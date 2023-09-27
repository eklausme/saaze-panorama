<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
	<title>Ristorante Panorama Dietzenbach</title>
	<description>Ristorante Panorama Dietzenbach</description>
	<lastBuildDate><?=gmdate("r")?></lastBuildDate>
	<link>https://eklausmeier.goip.de/panorama/</link>
	<atom:link href="https://eklausmeier.goip.de/panorama/feed.xml" rel="self" type="application/rss+xml" />
	<generator>Simplified Saaze</generator>
<?php
$rssRelevant = array();
foreach ($collections as $collection) {
	if (!array_key_exists('rss',$collection->data) || $collection->data['rss'] === false)
		continue;
	foreach ($collection->entries as $entry) {
		if ($collection->draftOverride == false && array_key_exists('draft',$entry->data) && $entry->data['draft']) continue;
		$rssRelevant[$entry->data['date'] . $entry->data['title']] = $entry;
	}
}
krsort($rssRelevant);	// sort on key=date+title in reverse order
$maxRss = 50;	// number of item's in RSS XML feed
$timeZone = new \DateTimeZone('Europe/Berlin');
foreach ($rssRelevant as $entry) {
	if ($maxRss-- <= 0) break;
	$html = str_replace('<img src="../img/','<img src="https://eklausmeier.goip.de/panorama/img/',$entry->data['content']);
	// RFC-822 format: Wed, 02 Oct 2002 13:00:00 GMT, previously used 'D, j M Y G:i:s'
	$d = date_create($entry->data['date'],$timeZone);
	printf("\t<item>\n"
		. "\t\t<link>https://eklausmeier.goip.de/panorama%s</link>\n"
		. "\t\t<guid>https://eklausmeier.goip.de/panorama%s</guid>\n"
		. "\t\t<title>%s</title>\n"
		. "\t\t<pubDate>%s</pubDate>\n"
		. "\t\t<description><![CDATA[\n%s\n"
		. "\t\t]]></description>\n"
		. "\t</item>\n",
		$entry->data['url'], $entry->data['url'], $entry->data['title'], date_format($d,"r"), $html);
}
?>
</channel>
</rss>
