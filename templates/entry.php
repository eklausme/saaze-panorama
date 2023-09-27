<?php require SAAZE_PATH . "/templates/top-layout.php"; ?>

	<main>
	<article class=aentry>
<?php
	if (!function_exists('postproc')) {
		// Post-processing of MD4C processed Markdown, not really clean,
		//because probably specific to MD4C, but does the job
		function postproc(string $s) : string {
			//return $s;
			$s = str_replace(
				array(PHP_EOL.'<ul>',
					PHP_EOL.'<li><p>',
					'</p>'.PHP_EOL.'</li>',
					'<ul>'.PHP_EOL,
					'class=leaders>'.PHP_EOL.'<li><code>'),
				array(PHP_EOL.'<ul class=leaders>',	// add class=leaders to ul
					PHP_EOL.'<li>',	// strip <p> after <li>
					'</li>',	// strip </p> before </li>
					'<ul class=noleaders>'.PHP_EOL,	// 2nd ul must not have leaders but noleaders
					'class=noleaders>'.PHP_EOL.'<li><code>'),	// Allergene Sonderfall
				$s);
			// replace ABC ...... UVW with ABC+UVW each enclosed in span's
			// catchword is six dots
			return preg_replace(
				'/(' . PHP_EOL . '<li>)(.+)\s+\.\.\.\.\.\.\s+(.+)(<ul|<\/li>)/',
				'$1<span>$2</span><span>$3</span>$4',
				$s
			);
		}
	}
	echo '<h1>' . $entry['title'] . "</h1>\n";
	if (isset($entry['heroimg']))
		printf("<p><img class=heroimg src=\"%s/img/%s\" alt=\"Hero image\"></p>\n",$rbase,$entry['heroimg']);
	$s = ($entry['postproc'] ?? false) ? postproc($entry['content']) : $entry['content'];
	echo $s;
	//$s = str_replace('*%3C?','<?',$entry['content']);
	//$s = str_replace('?%3E*','?>',$s);
	//require 'data:text/plain;base64,'.base64_encode($s);
?>
	</article>
	</main>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
