
<?php
	$urlEncoded = urlencode('https://eklausmeier.goip.de/panorama' . ($url??''));
	$titleEncoded = urlencode($entry['title'] ?? 'Ristorante Panorama');
?>
	<br><br>
	<aside>
	<p>Diese Seite teilen:
	<a href="https://www.facebook.com/sharer/sharer.php?u=<?=$urlEncoded?>" title="Auf Facebook" target=_blank><img src="<?=$rbase?>/img/facebook.png" alt="Facebook logo"> Facebook</a>,
	<a href="https://twitter.com/intent/tweet?text=<?=$titleEncoded?>%0A<?=$urlEncoded?>" title="Auf Twitter" target=_blank><img src="<?=$rbase?>/img/TwitterLogo.png" alt="Twitter logo"> Twitter</a>,
	<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?=$urlEncoded?>" title="Auf LinkedIn" target=_blank><img src="<?=$rbase?>/img/LinkedInLogo.png" alt="LinkedIn logo"> LinkedIn</a>,
	<a href="mailto:?subject=<?=$titleEncoded?>&amp;body=<?=$urlEncoded?>" title="Via e-mail"><img src="<?=$rbase?>/img/EMailLogo.png" alt="E-Mail logo"> E-Mail</a>,
	<a href="whatsapp://send?text=<?=$titleEncoded?>%0A<?=$urlEncoded?>" title="Auf WhatsApp"><img src="<?=$rbase?>/img/WhatsAppLogo.png" alt="WhatsApp logo"> WhatsApp</a>
	</p>
	</aside>

	<footer>
		<hr>
		<div class=flex-container><div class=bordered>
		<p>Nützliche Links:</p>
		<p><a href="https://tgd-sport.de/kontakt/">TG Dietzenbach 1886 e.V.</a>
		<p><a href="https://www.dietzenbach.de/">Kreisstadt Dietzenbach</a>
		<p><a href="https://www.dietzenbach.de/Kultur-Freizeit/Freizeit-Bewegung/Waldschwimmbad/">Waldschwimmbad</a>
		<p><a href="https://de.wikipedia.org/wiki/Aussichtsturm_Dietzenbach">Aussichtsturm Dietzenbach</a>

		</div><div class=bordered><p><a href=<?=$rbase?>/catering>Catering</a></p>
		<a href=<?=$rbase?>/catering><img src="<?=$rbase?>/img/Mercedeslieferwagen.webp" alt=Mercedeslieferwagen></a>

		</div></div>
		<hr>
		<p><br><br>&nbsp;<a href="<?=$rbase?>/impressum">Impressum</a> &nbsp; &nbsp; <a href="<?=$rbase?>/datenschutzerklaerung">Datenschutzerklärung</a><br><?php
			printf("Generiert %s CET (Europa/Berlin) durch <a href=\"%s\">Simplified Saaze</a>%s<br><br>\n",
				date('d-M-y H:i'), 'https://jamstack.org/generators/simplified-saaze',
				getenv('NON_NGINX') ? '' : ', Web-Server <a href="https://nginx.org">NGINX</a>');
			?>
		</p>
	</footer>

<script>
let chevronButton = document.getElementById("toTopBtn"); // Get the chevron-button
window.onscroll = function() {	// When the user scrolls down 20px from the top of the document, show the button
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		chevronButton.style.display = "block";
	} else {
		chevronButton.style.display = "none";
	}
};
function topFunction() {	// When the user clicks on the button, scroll to the top of the document
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
</script>

<?php if (!isset($pagination)) {
	if (isset($entry['gallery_js'])) echo $entry['gallery_js'];
	if (isset($entry['markmap_js'])) echo $entry['markmap_js'];
} ?>

</div></body>
</html>
