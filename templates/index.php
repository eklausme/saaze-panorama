<?php
$title = "{$collection['title']} (Page {$pagination['currentPage']})";
require SAAZE_PATH . "/templates/top-layout.php";
?>

<main>

<h1>Willkommen im Ristorante Panorama in Dietzenbach</h1>
<img src="<?=$rbase?>/img/Innenbereich.webp" alt=Innenbereich>
<?php
	if (count($pagination['entries']) > 0) {
		$entry = array_shift($pagination['entries']);	// 1st element, i.e., newest
		echo "<aside>\n" . $entry['content'] . "</aside>\n";
	}
?>
<div class=agrid-container>
<?php foreach ($pagination['entries'] as $entry) { ?>
	<article class=aindex>
	<h2><a href="<?= $rbase . $entry['url'] ?>"><?= $entry['title'] ?? 'Unknown title' ?></a></h2>
<?php if (isset($entry['heroimg'])) { ?>
	<div class=ixImgContainer><a href="<?=$rbase.$entry['url']?>"><img class=ixImgZoomIn width=300 src="<?=$rbase?>/img/<?=$entry['heroimg']?>" alt=HeroImg></a></div>
<?php } ?>
	<p><?= $entry['excerpt'] ?? '---' ?></p>
	</article>
<?php } ?>
</div>

</main>
<p></p>
<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>

