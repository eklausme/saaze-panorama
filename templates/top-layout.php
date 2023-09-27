<?php require SAAZE_PATH . "/templates/head.php"; ?>
	<title><?= $title ?? "Saaze" ?></title>

<style>
:root { --bg-color:GhostWhite; --bgAcolor:white; color:DarkRed; --h1Color:DarkPurple; --thColor:LightBlue; --nthChild:LightGray; --klmWidth:66rem }
.dark-mode { background-color:black; color:white; --h1Color:LightBlue; --thColor:DarkBlue; --nthChild:Orange; }
body {
	background-color: var(--bg-color);
	font-family:Arial, Helvetica, Verdana, sans-serif;
	margin:auto;
	/*max-width: var(--klmWidth);*/
	/* From https://www.svgbackgrounds.com, "Subtle Prism", by Matt Visiwig */
	background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='100%25' gradientTransform='rotate(240)'%3E%3Cstop offset='0' stop-color='Ivory'/%3E%3Cstop offset='1' stop-color='AliceBlue'/%3E%3C/linearGradient%3E%3Cpattern patternUnits='userSpaceOnUse' id='b' width='540' height='450' x='0' y='0' viewBox='0 0 1080 900'%3E%3Cg fill-opacity='0.1'%3E%3Cpolygon fill='%23444' points='90 150 0 300 180 300'/%3E%3Cpolygon points='90 150 180 0 0 0'/%3E%3Cpolygon fill='%23AAA' points='270 150 360 0 180 0'/%3E%3Cpolygon fill='%23DDD' points='450 150 360 300 540 300'/%3E%3Cpolygon fill='%23999' points='450 150 540 0 360 0'/%3E%3Cpolygon points='630 150 540 300 720 300'/%3E%3Cpolygon fill='%23DDD' points='630 150 720 0 540 0'/%3E%3Cpolygon fill='%23444' points='810 150 720 300 900 300'/%3E%3Cpolygon fill='%23FFF' points='810 150 900 0 720 0'/%3E%3Cpolygon fill='%23DDD' points='990 150 900 300 1080 300'/%3E%3Cpolygon fill='%23444' points='990 150 1080 0 900 0'/%3E%3Cpolygon fill='%23DDD' points='90 450 0 600 180 600'/%3E%3Cpolygon points='90 450 180 300 0 300'/%3E%3Cpolygon fill='%23666' points='270 450 180 600 360 600'/%3E%3Cpolygon fill='%23AAA' points='270 450 360 300 180 300'/%3E%3Cpolygon fill='%23DDD' points='450 450 360 600 540 600'/%3E%3Cpolygon fill='%23999' points='450 450 540 300 360 300'/%3E%3Cpolygon fill='%23999' points='630 450 540 600 720 600'/%3E%3Cpolygon fill='%23FFF' points='630 450 720 300 540 300'/%3E%3Cpolygon points='810 450 720 600 900 600'/%3E%3Cpolygon fill='%23DDD' points='810 450 900 300 720 300'/%3E%3Cpolygon fill='%23AAA' points='990 450 900 600 1080 600'/%3E%3Cpolygon fill='%23444' points='990 450 1080 300 900 300'/%3E%3Cpolygon fill='%23222' points='90 750 0 900 180 900'/%3E%3Cpolygon points='270 750 180 900 360 900'/%3E%3Cpolygon fill='%23DDD' points='270 750 360 600 180 600'/%3E%3Cpolygon points='450 750 540 600 360 600'/%3E%3Cpolygon points='630 750 540 900 720 900'/%3E%3Cpolygon fill='%23444' points='630 750 720 600 540 600'/%3E%3Cpolygon fill='%23AAA' points='810 750 720 900 900 900'/%3E%3Cpolygon fill='%23666' points='810 750 900 600 720 600'/%3E%3Cpolygon fill='%23999' points='990 750 900 900 1080 900'/%3E%3Cpolygon fill='%23999' points='180 0 90 150 270 150'/%3E%3Cpolygon fill='%23444' points='360 0 270 150 450 150'/%3E%3Cpolygon fill='%23FFF' points='540 0 450 150 630 150'/%3E%3Cpolygon points='900 0 810 150 990 150'/%3E%3Cpolygon fill='%23222' points='0 300 -90 450 90 450'/%3E%3Cpolygon fill='%23FFF' points='0 300 90 150 -90 150'/%3E%3Cpolygon fill='%23FFF' points='180 300 90 450 270 450'/%3E%3Cpolygon fill='%23666' points='180 300 270 150 90 150'/%3E%3Cpolygon fill='%23222' points='360 300 270 450 450 450'/%3E%3Cpolygon fill='%23FFF' points='360 300 450 150 270 150'/%3E%3Cpolygon fill='%23444' points='540 300 450 450 630 450'/%3E%3Cpolygon fill='%23222' points='540 300 630 150 450 150'/%3E%3Cpolygon fill='%23AAA' points='720 300 630 450 810 450'/%3E%3Cpolygon fill='%23666' points='720 300 810 150 630 150'/%3E%3Cpolygon fill='%23FFF' points='900 300 810 450 990 450'/%3E%3Cpolygon fill='%23999' points='900 300 990 150 810 150'/%3E%3Cpolygon points='0 600 -90 750 90 750'/%3E%3Cpolygon fill='%23666' points='0 600 90 450 -90 450'/%3E%3Cpolygon fill='%23AAA' points='180 600 90 750 270 750'/%3E%3Cpolygon fill='%23444' points='180 600 270 450 90 450'/%3E%3Cpolygon fill='%23444' points='360 600 270 750 450 750'/%3E%3Cpolygon fill='%23999' points='360 600 450 450 270 450'/%3E%3Cpolygon fill='%23666' points='540 600 630 450 450 450'/%3E%3Cpolygon fill='%23222' points='720 600 630 750 810 750'/%3E%3Cpolygon fill='%23FFF' points='900 600 810 750 990 750'/%3E%3Cpolygon fill='%23222' points='900 600 990 450 810 450'/%3E%3Cpolygon fill='%23DDD' points='0 900 90 750 -90 750'/%3E%3Cpolygon fill='%23444' points='180 900 270 750 90 750'/%3E%3Cpolygon fill='%23FFF' points='360 900 450 750 270 750'/%3E%3Cpolygon fill='%23AAA' points='540 900 630 750 450 750'/%3E%3Cpolygon fill='%23FFF' points='720 900 810 750 630 750'/%3E%3Cpolygon fill='%23222' points='900 900 990 750 810 750'/%3E%3Cpolygon fill='%23222' points='1080 300 990 450 1170 450'/%3E%3Cpolygon fill='%23FFF' points='1080 300 1170 150 990 150'/%3E%3Cpolygon points='1080 600 990 750 1170 750'/%3E%3Cpolygon fill='%23666' points='1080 600 1170 450 990 450'/%3E%3Cpolygon fill='%23DDD' points='1080 900 1170 750 990 750'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect x='0' y='0' fill='url(%23b)' width='100%25' height='100%25'/%3E%3C/svg%3E");
	background-attachment: fixed;
	background-size: cover;
}
header, main, article, aside { margin:auto; background-color:var(--bgAcolor) }

/* Taken from "How To - Hoverable Dropdown", see https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown_hover */
.dropbtn {
	background-color: #04AA6D;
	color: white;
	padding: 16px;
	font-size: 16px;
	border: none;
}
.dropdown {
	position: relative;
	display: inline-block;
}
.dropdown-content {
	display: none;
	position: absolute;
	background-color: #f1f1f1;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
}
.dropdown-content a {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
}
.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}


/* Scroll to top button ("chevronButton"), see https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_scroll_to_top
   Icon is from https://icons.getbootstrap.com/icons/chevron-up/
*/
#toTopBtn {
	display:none;
	position:fixed;
	bottom:20px;
	right:30px;
	z-index:99;
	font-size:18px;
	border:none;
	outline:none;
	background-color:DarkGray;
	color:white;
	cursor:pointer;
	padding: 15px;
	border-radius:6px;
}
#toTopBtn:hover { background-color: #555 }

blockquote { font-style:italic; padding-left:0.4rem; border-left:7px solid GoldenRod; color:white; background-color:DarkRed; }
footer { background:IndianRed; color:white }
.bordered { border-style:groove; box-shadow:10px 5px 5px gray; padding:10px 25px 20px }

/* Three column output in footer from Chris Coyier, see https://codepen.io/chriscoyier/pen/vWEMWw */
.flex-container { display:flex; justify-content:space-evenly; flex-wrap:wrap; flex-direction:row; gap:4rem }
.flex-container p { font-size:1rem; margin-top:0; margin-bottom:0 }

/* Three column output for index-list */
/* Center everything, see https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_center_website */
.allcontent { max-width:var(--klmWidth); margin:auto; padding:1rem }
img { border-radius:8px; max-width:100% }
/*img[alt=Photo] { max-width:100% }*/
.heroimg { max-width:100% }
@media screen and (max-width:300px) {	/* very small screens, e.g., Pixel 5 => scale down images */
	img { max-width:100%; height:auto; width:200px }
}
.imgicon { width:32px; height:32px }
@media screen and (max-width:80rem) {	/* single column output */
	.aentry, header, main, aside, footer { margin-left:0rem; margin-right:0rem }
	.aindex { margin-left:3rem; margin-right:3rem }
	.agrid-container {
		display:grid;
		justify-content:center;
		grid-template-columns:auto;
		grid-template-areas: 'article';
		/*background-color:BurlyWood; padding:10rem;*/
	}
}
@media screen and (min-width:80rem) and (max-width:99rem) {	/* 2 column output */
	.aentry, header, main, aside, footer { margin-left:0rem; width:58rem }
	.aindex { margin-left:0rem; width:28rem }
	.allcontent { max-width:66rem; margin:auto; padding:0rem }
	/*img { width:auto; height:auto }*/
	.agrid-container {
		display:grid;
		justify-content:center;
		column-gap:2rem;
		grid-template-columns: auto auto;
		grid-template-areas: 'article article';
		/*background-color:BurlyWood; padding:0.8rem;*/
	}
	/* https://www.w3docs.com/snippets/css/how-to-vertically-align-text-next-to-an-image.html */
	.imgcontainer { display:flex; align-items:center }
	.textimg { padding-left:2.5rem }
}
@media screen and (min-width:99rem) {	/* 3 column output */
	/*.aentry, header, main, aside { margin-left:0rem; width:58rem }*/
	.aentry, header, aside, footer { width:var(--klmWidth) }
	.aindex { margin-left:0rem; width:20rem }
	.allcontent { max-width:var(--klmWidth); margin:auto; padding:0rem }
	/*img { width:auto; height:auto; }*/
	.agrid-container {
		display:grid;
		justify-content:center;
		column-gap:2rem;
		grid-template-columns: auto auto auto;
		grid-template-areas: 'article article article';
		/*background-color:BurlyWood; padding:0.8rem;*/
	}
	/* https://www.w3docs.com/snippets/css/how-to-vertically-align-text-next-to-an-image.html */
	.imgcontainer { display:flex; align-items:center }
	.textimg { padding-left:2.5rem }
}
@media print {
	h2 { page-break-before: always }
	h1, h2, h3, h4, h5, h6, ul, li, p { color:black }
}


h1 { font-size:3em; color:var(--h1Color) }
h2 { font-size:2.7em; color:var(--h1Color) }
h3 { font-size:2em; color:var(--h1Color) }
ul, ol { line-height:1.5; font-size:1.3rem }
p { line-height:1.7; font-size:1.3rem }
code { color:black; background-color:DeepSkyBlue }
/* CSS3, still does not work
ul.leaders { padding:0; list-style:none }
ul.leaders span:first-child:after { content:leader(dotted) }
*/
/* Bert Bos: https://www.w3.org/Style/Examples/007/leaders.en.html */
ul.leaders { max-width:44em; padding:0; overflow-x:hidden; list-style:none }
ul.leaders li:before {
	float:left;
	width:0;
	white-space:nowrap;
	content:
		". . . . . . . . . . . . . . . . . . . . "
		". . . . . . . . . . . . . . . . . . . . "
		". . . . . . . . . . . . . . . . . . . . "
		". . . . . . . . . . . . . . . . . . . . "
}
ul.noleaders { list-style:none }
ul.noleaders li:before { background-color:yellow; content:"" }
ul.leaders span:first-child { padding-right:0.33em; background:white }
ul.leaders span + span { float:right; padding-left:0.33em; background:white }

/* From Chris Coyier: https://codepen.io/chriscoyier/pen/wvKeQOp */
ol { list-style:none; counter-reset:steps }
ol li { counter-increment:steps }
ol li::before {
	content: counter(steps);
	/*margin-top: 1rem;*/
	margin-right: 0.5rem;
	margin-left: -2rem;
	background: #ff6f00;
	color: white;
	width: 1.2em;
	height: 1.2em;
	border-radius: 50%;
	display: inline-grid;
	place-items: center;
	line-height: 1.2em;
}
ol ol li::before { background:DarkOrchid }
li > p:first-child { margin-top: -1.5em }

/* See https://codepen.io/nxworld/pen/ZYNOBZ */
.hover01 figure img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover01 figure:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}
.dimmedColor { color:Gray }
.ixImgContainer { position:relative; color:gray }
.ixImgZoomIn { -webkit-transform: scale(1); transform: scale(1); -webkit-transition: .3s ease-in-out; transition: .3s ease-in-out; }
.ixImgZoomIn:hover { -webkit-transform: scale(1.2); transform: scale(1.2) }

html {
	/*background: -webkit-radial-gradient(center ellipse, #1d4b92 0%, #194385 100%);
	background: radial-gradient(ellipse at center, #1d4b92 0%, #07132e 100%);
	overflow: hidden;*/
}
</style>
<?php if (!isset($pagination)) {
	if (isset($entry['gallery_css'])) echo $entry['gallery_css'];
	if (isset($entry['markmap_css'])) echo $entry['markmap_css'];
} ?>
</head>

<body><div class=allcontent>
<button onclick="topFunction()" id="toTopBtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/></svg></button>
	<header>
		<div class=imgcontainer><a href="<?=$rbase?>/"><img alt="Panorama Logo" src="<?=$rbase?>/img/PanoramaLogo.webp"></a><div class=textimg>
		<p><a href="mailto:info@ristorantepanorama.de">info@ristorantepanorama.de</a><br>
		   Tel. <a href="tel:+49607449193129">06074-49 19 3120</a></p>
		<p>Jungfern-Wingert-Straße 5<br>
		   63128 Dietzenbach</p>
		<p>Mo-Sa 11:00-14:30, 17:00-22:00<br>
		   So 11:30-22:00</p>
		</div></div>
	</header>
