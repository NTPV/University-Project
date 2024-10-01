<?php


$id = '1FfPDh0vuHD6QOi7t1x9t-0fXUtAekBiHRerOnyfKDf8';
$gid = 0;
$range = 'A1:C10';
$csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid. '&range=' . $range);
$csv = explode("\r\n", $csv);
$array = array_map('str_getcsv', $csv);





#echo '<pre>';
#print_r($array[0][1]);

###################

#phpinfo();


#$homepage = file_get_contents('http://www.mysite.com/ttt.csv');
#echo $homepage;

#var_dump(stream_get_wrappers());



#$id = 'Идентификатор документа. Его видно в ссылке';
#$gid = 'Идентификатор листа. Первый лист всегда 0';
#$csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);
#$csv = explode("\r\n", $csv);
#$array = array_map('str_getcsv', $csv);
?>





<!DOCTYPE html><html lang="en"><head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" itemprop="keywords" content="icons,svg,svg icons,ui icons,ios icons,android icons,icon manager,icon organizer,icon application">
<meta name="description" itemprop="description" content="Transform your workflow with Nucleo App, the powerful icon organizer for Mac and Windows. Discover our next-level SVG icon library, customize and share icons effortlessly, and collaborate with ease.">

<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicons/site.webmanifest">

<link rel="canonical" href="https://nucleoapp.com/">

<meta property="og:url" content="https://nucleoapp.com/">
<meta property="og:type" content="website">
<meta property="og:title" content="Nucleo – Ultimate Icon Organizer &amp; SVG Library for Mac/Windows">
<meta property="og:description" content="Transform your workflow with Nucleo App, the powerful icon organizer for Mac and Windows. Discover our next-level SVG icon library, customize and share icons effortlessly, and collaborate with ease.">
<meta property="og:image" content="images/open-graph-home.png">


<meta property="twitter:title" content="Nucleo – Ultimate Icon Organizer &amp; SVG Library for Mac/Windows">
<meta property="twitter:description" content="Transform your workflow with Nucleo App, the powerful icon organizer for Mac and Windows. Discover our next-level SVG icon library, customize and share icons effortlessly, and collaborate with ease.">
<meta property="twitter:image" content="https://nucleoapp.com/assets/img/twitter-card.png">
<meta content="summary_large_image" name="twitter:card">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<title>Nucleo – Ultimate Icon Organizer &amp; SVG Library for Mac/Windows</title>
</head>
<body data-theme="default" class="js-theme-animation" data-theme-animation-1="default, dark, #team">

<header class="main-header display@sm ">
<div class="main-header__container container max-width-lg">
<nav class="main-nav">
<ul class="main-nav__list">
<li>
<a class="main-nav__link" href="application">Аренда1мото/электровело</a>
</li>
<li>
<a class="main-nav__link" href="premium-icons">Стать курьером</a>
</li>
<li>
<a class="main-nav__link" href="pricing">Купить рекламу</a>
</li>
<li>
<a class="main-nav__link" href="support">Сотрудничество</a>
</li>
</ul>
</nav>
<div class="flex items-center justify-center">
<a class="main-header__logo" href="/">
<svg class="icon color-contrast-higher" viewBox="0 0 40 40">
<title>Go to homepage</title>
<g fill="currentColor">
<path fill="var(--color-contrast-low)" d="M22.5 20a3.002 3.002 0 0 1-6 0 3.002 3.002 0 0 1 6 0z"></path>
<path id="logo-path-right" d="M32.504 4.333a2.997 2.997 0 0 1 1.499 2.598v19.706a3.002 3.002 0 0 1-1.5 2.599l-4.005 2.312-8.998-5.195 5.5-3.176V0l7.504 4.333z" fill="currentColor"></path>
<path id="logo-path-left" d="M14.003 40V16.824l5.5-3.176-8.998-5.195L6.5 10.765A2.998 2.998 0 0 0 5 13.364V33.07a3 3 0 0 0 1.499 2.598L14.003 40z" fill="currentColor"></path>
</g>
</svg>
</a>
</div>
<div class="main-header-cta">
<div><a class="main-nav__link" href="log-in">Login</a></div>
<div class="height-xs border-right" aria-hidden="true"></div>
<div>
<a class="main-nav__link main-nav__link--primary gap-xs" href="downloads">
<span>Download Free App</span>
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<path d="M12 2.75h2.25a2 2 0 0 1 2 2v6.5a2 2 0 0 1-2 2H3.75a2 2 0 0 1-2-2v-6.5a2 2 0 0 1 2-2H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M5.75 16.25a10.814 10.814 0 0 1 6.5 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13.25v2.5"></path>
<g opacity="0.5">
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.5 6.75L9 9.25l-2.5-2.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 9.25V.75"></path>
</g>
</g>
</svg>
</a>
</div>
</div>
</div>
<div class="separator separator--position-absolute bottom-0" aria-hidden="true"><em></em></div>
</header>

<div class="flex flex-center padding-top-md padding-bottom-sm hide@sm">
<a class="block" href="/">
<svg class="icon color-contrast-higher" style="--size: 40px;" viewBox="0 0 40 40">
<title>Go to homepage</title>
<g fill="currentColor">
<path fill="var(--color-contrast-low)" d="M22.5 20a3.001 3.001 0 0 1-6 0 3.001 3.001 0 0 1 6 0z"></path>
<path d="M32.504 4.333a2.998 2.998 0 0 1 1.499 2.598v19.706a3 3 0 0 1-1.5 2.599l-4.005 2.312-8.998-5.195 5.5-3.176V0l7.504 4.333zM14.003 40V16.824l5.5-3.176-8.998-5.195L6.5 10.765A2.998 2.998 0 0 0 5 13.364V33.07a3 3 0 0 0 1.499 2.598L14.003 40z"></path>
</g>
</svg>
</a>
</div>

<div class="sticky-nav js-sticky-banner" data-visible-class="sticky-nav--is-visible" data-offset-in="150" data-target-out=".main-footer" data-offset-out="150">
<div class="container max-width-2xs">
<div class="sticky-nav__content">

<nav class="flex-grow hide@sm">
<ul class="flex items-center justify-between">
<li class="flex-grow">
<a class="sticky-nav__link" href="application">Аренда</a>
</li>
<li class="flex-grow">
<a class="sticky-nav__link" href="premium-icons">Стать курьером</a>
</li>
<li class="flex-grow">
<a class="sticky-nav__link" href="pricing">Рекламодателю</a>
</li>
<li class="flex-grow">
<a class="sticky-nav__link" href="support">YouTube</a>
</li>

</li>
</ul>
</nav>

<nav class="flex-grow display@sm">
<ul class="sticky-nav__list flex items-center justify-between">
<li class="flex-grow">
<a class="sticky-nav__link" href="application">Аренда3</a>
</li>
<li class="flex-grow">
<a class="sticky-nav__link" href="premium-icons">Icons</a>
</li>
<li class="flex-grow">
<a class="sticky-nav__link" href="pricing">Pricing</a>
</li>
<li class="flex-grow">
<a class="sticky-nav__link" href="support">Рекламодателю</a>
</li>
<li class="flex-grow">
<a class="sticky-nav__link sticky-nav__link--primary" href="downloads">Сотрудничесвто</a>
</li>
</ul>
</nav>
</div>
</div>
</div>

<section class="main-intro padding-top-lg padding-bottom-2xl padding-top-xl@xs">
<div class="container max-width-lg text-center position-relative@md">
<div class="position-relative z-index-2">

<div class="container max-width-md">
<div class="text-center margin-bottom-lg">
<h2 class="text-2xl selection-contrast-higher text-3xl@sm text-4xl@md">Аренда мото/вело транспорта</h2>

<a class="btn btn--lg btn--blur-label js-app-dw-mc-s" href="index.html">
<span class="btn__label">Главная</span>
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<path d="M12 2.75h2.25a2 2 0 0 1 2 2v6.5a2 2 0 0 1-2 2H3.75a2 2 0 0 1-2-2v-6.5a2 2 0 0 1 2-2H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M5.75 16.25a10.814 10.814 0 0 1 6.5 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13.25v2.5"></path>
<g opacity="0.5">
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.5 6.75L9 9.25l-2.5-2.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 9.25V.75"></path>
</g>
</g>
</svg>
</a>

<a class="btn btn--lg btn--blur-label js-app-dw-mc-s" href="contacts.html">
<span class="btn__label">Контакты</span>
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<path d="M12 2.75h2.25a2 2 0 0 1 2 2v6.5a2 2 0 0 1-2 2H3.75a2 2 0 0 1-2-2v-6.5a2 2 0 0 1 2-2H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M5.75 16.25a10.814 10.814 0 0 1 6.5 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13.25v2.5"></path>
<g opacity="0.5">
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.5 6.75L9 9.25l-2.5-2.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 9.25V.75"></path>
</g>
</g>
</svg>
</a>

</div>
<ul class="grid gap-md">
<li class="col@xs">
<figure class="margin-bottom-md radius-lg overflow-hidden scroll-fx@md origin-top-left js-scroll-fx" data-scroll-fx="rotate, 5deg, 0deg, 0%, 50%">
<img class="width-100%" src="https://raw.githubusercontent.com/NTPV/WorkIn/main/skuter1080x1080.webp" alt="Profile picture of Claudia Romano" loading="lazy">
</figure>
<div class="grid gap-xs text-center">
<h3><?php 
$array = array_map('str_getcsv', $csv);
echo '<pre>';
print_r($array[1][0]);
		?></h3>
		<h7>От 700р/день
		<?php 
		#$i = 0;
		#unset($array[0]);
		#foreach ($array as $arr){
		#	$i++;
		#	$html = '<tr>';
		#	#$html .= '<td scope="row">'.$i.'</td>';
		#		foreach ($arr as $val) {
		#			$html .= '<td scope="row">'.$val.'</td>';					
		#		}
		#		$html .= '</tr>';
		#		echo $html;
		#}
		?>
		</h7>
<h7>Статус: <?php 
$array = array_map('str_getcsv', $csv);
echo '<pre>';
print_r($array[1][1]);
		?></h7>
<div>
<a class="btn btn--lg btn--blur-label js-app-dw-mc" href="https://docs.google.com/spreadsheets/d/1O8NKSxykp4msMEGh6ieEAFToXEmHlnKMYjK_N5Ac1Sw/pub?output=pdf">
<span class="btn__label">Скачать каталог</span>
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<path d="M12 2.75h2.25a2 2 0 0 1 2 2v6.5a2 2 0 0 1-2 2H3.75a2 2 0 0 1-2-2v-6.5a2 2 0 0 1 2-2H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M5.75 16.25a10.814 10.814 0 0 1 6.5 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13.25v2.5"></path>
<g opacity="0.5">
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.5 6.75L9 9.25l-2.5-2.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 9.25V.75"></path>
</g>
</g>
</svg>
</a>
</div>
</div>
</li>


<li class="col@xs">
<figure class="margin-bottom-md radius-lg overflow-hidden scroll-fx@md origin-top-left js-scroll-fx" data-scroll-fx="rotate, 5deg, 0deg, 0%, 50%">
<img class="width-100%" src="https://raw.githubusercontent.com/NTPV/WorkIn/main/skuter1080x1080n1.webp" alt="Profile picture of Claudia Romano" loading="lazy">
</figure>
<div class="grid gap-xs text-center">
<h3>		<?php 
$array = array_map('str_getcsv', $csv);
echo '<pre>';
print_r($array[0][1]);
		?></h3>
<h7>от 700р/день</h7>
		<h7>Наличие: да
		<?php 
		#$i = 0;
		#unset($array[0]);
		#foreach ($array as $arr){
		#	$i++;
		#	$html = '<tr>';
		#	#$html .= '<td scope="row">'.$i.'</td>';
		#		foreach ($arr as $val) {
		#			$html .= '<td scope="row">'.$val.'</td>';					
		#		}
		#		$html .= '</tr>';
		#		echo $html;
		#}
		?>
		</h7>
<div>
<a class="btn btn--lg btn--blur-label js-app-dw-mc" href="https://docs.google.com/spreadsheets/d/1O8NKSxykp4msMEGh6ieEAFToXEmHlnKMYjK_N5Ac1Sw/pub?output=pdf">
<span class="btn__label">Подробнее</span>
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<path d="M12 2.75h2.25a2 2 0 0 1 2 2v6.5a2 2 0 0 1-2 2H3.75a2 2 0 0 1-2-2v-6.5a2 2 0 0 1 2-2H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M5.75 16.25a10.814 10.814 0 0 1 6.5 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13.25v2.5"></path>
<g opacity="0.5">
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.5 6.75L9 9.25l-2.5-2.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 9.25V.75"></path>
</g>
</g>
</svg>
</a>
</div>
</div>
</li>

<li class="col@xs">
<figure class="margin-bottom-md radius-lg overflow-hidden scroll-fx@md origin-top-left js-scroll-fx" data-scroll-fx="rotate, 5deg, 0deg, 0%, 50%">
<img class="width-100%" src="<?php 
$array = array_map('str_getcsv', $csv);
print_r($array[9][2]);
		?>" alt="Profile picture of Claudia Romano" loading="lazy">
</figure>
<div class="grid gap-xs text-center">
<h3>Скутер honda CRS 50 кубов</h3>
<h7>от 700р/день</h7>
<h7>Наличие: Да</h7>
<div>
<a class="btn btn--lg btn--blur-label js-app-dw-mc" href="https://www.appsheet.com/start/c3574585-66f6-4cbe-9af3-be944a2e6afe#appName=FieldDelivery-550116255&group=%5B%5D&page=card&sort=%5B%5D&table=Driver&view=Drivers">
<span class="btn__label">Подробнее</span>
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<path d="M12 2.75h2.25a2 2 0 0 1 2 2v6.5a2 2 0 0 1-2 2H3.75a2 2 0 0 1-2-2v-6.5a2 2 0 0 1 2-2H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M5.75 16.25a10.814 10.814 0 0 1 6.5 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13.25v2.5"></path>
<g opacity="0.5">
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.5 6.75L9 9.25l-2.5-2.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 9.25V.75"></path>
</g>
</g>
</svg>
</a>
</div>
</div>
</li>

<li class="col@xs">
<figure class="margin-bottom-md radius-lg overflow-hidden scroll-fx@md origin-top-left js-scroll-fx" data-scroll-fx="rotate, 5deg, 0deg, 0%, 50%">
<img class="width-100%" src="images/profile-claudia.jpg" alt="Profile picture of Claudia Romano" loading="lazy">
</figure>
<div class="grid gap-xs text-center">
<h3>Скутер honda CRS 50 кубов</h3>
<h7>от 700р/день</h7>
<h7>Наличие: Да</h7>
<div>
<a class="btn btn--lg btn--blur-label js-app-dw-mc" href="https://nucleoapp.com/download/mac/latest">
<span class="btn__label">Подробнее</span>
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<path d="M12 2.75h2.25a2 2 0 0 1 2 2v6.5a2 2 0 0 1-2 2H3.75a2 2 0 0 1-2-2v-6.5a2 2 0 0 1 2-2H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M5.75 16.25a10.814 10.814 0 0 1 6.5 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13.25v2.5"></path>
<g opacity="0.5">
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.5 6.75L9 9.25l-2.5-2.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 9.25V.75"></path>
</g>
</g>
</svg>
</a>
</div>
</div>
</li>

<li class="col@xs">
<figure class="margin-bottom-md radius-lg overflow-hidden scroll-fx@md origin-top-left js-scroll-fx" data-scroll-fx="rotate, 5deg, 0deg, 0%, 50%">
<img class="width-100%" src="images/profile-claudia.jpg" alt="Profile picture of Claudia Romano" loading="lazy">
</figure>
<div class="grid gap-xs text-center">
<h3>Скутер honda CRS 50 кубов</h3>
<h7>от 700р/день</h7>
<h7>Наличие: Да</h7>
<div>
<a class="btn btn--lg btn--blur-label js-app-dw-mc" href="https://nucleoapp.com/download/mac/latest">
<span class="btn__label">Подробнее</span>
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<path d="M12 2.75h2.25a2 2 0 0 1 2 2v6.5a2 2 0 0 1-2 2H3.75a2 2 0 0 1-2-2v-6.5a2 2 0 0 1 2-2H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M5.75 16.25a10.814 10.814 0 0 1 6.5 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13.25v2.5"></path>
<g opacity="0.5">
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.5 6.75L9 9.25l-2.5-2.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 9.25V.75"></path>
</g>
</g>
</svg>
</a>
</div>
</div>
</li>
</ul>
</div>

<p class="margin-top-lg text-md color-contrast-medium selection-contrast-higher max-width-sm margin-x-auto text-balance"><strong class="color-contrast-high font-medium">С 2023</strong>, сдаю в аренду электровелосипеды скутера и мопеды для доставки, если у вас есть предложения или вы хотите взятьтранспорт в аренду, то вы попали по адресу.</p>

<figure class="main-intro__figure max-width-md margin-top-lg margin-x-auto">
<!--   <img class="main-intro__img" src="https://raw.githubusercontent.com/NTPV/WorkIn/main/newsite.webp" alt="A preview of the Nucleo application">  -->
<img class="main-intro__img" src="images/newsite.webp" alt="A preview of the Nucleo application">
</figure>
</div>
<img class="main-intro__icon main-intro__icon--check display@md" src="images/intro-icon-check.png" alt="a floating checkmark decorative icon">
<img class="main-intro__icon main-intro__icon--avatar" src="images/intro-icon-avatar.png" alt="a floating avatar decorative icon">
<img class="main-intro__icon main-intro__icon--cloud display@md" src="images/intro-icon-cloud.png" alt="a floating cloud decorative icon">
<img class="main-intro__icon main-intro__icon--heart" src="images/intro-icon-heart.png" alt="a floating heart decorative icon">
<img class="main-intro__icon main-intro__icon--plus display@md" src="images/intro-icon-plus.png" alt="a floating plus decorative icon">
<img class="main-intro__icon main-intro__icon--star" src="images/intro-icon-star.png" alt="a floating star decorative icon">
</div>
</section>





<section class="main-intro padding-top-lg padding-bottom-2xl padding-top-xl@xs">
<div class="container max-width-lg text-center position-relative@md">
<div class="position-relative z-index-2">
<h1 class="selection-contrast-higher text-4xl text-5xl@md">@C Работай В Питере</h1>
<p class="margin-top-md text-md color-contrast-medium text-balance selection-contrast-higher">Сервис аренды электровело/мото</p>
<div class="margin-top-md padding-top-2xs flex flex-center flex-wrap gap-sm">
<a class="btn btn--lg btn--blur-label js-app-dw-mc" href="https://nucleoapp.com/download/mac/latest">
<span class="btn__label">Каталог</span>
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<path d="M12 2.75h2.25a2 2 0 0 1 2 2v6.5a2 2 0 0 1-2 2H3.75a2 2 0 0 1-2-2v-6.5a2 2 0 0 1 2-2H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M5.75 16.25a10.814 10.814 0 0 1 6.5 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13.25v2.5"></path>
<g opacity="0.5">
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.5 6.75L9 9.25l-2.5-2.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 9.25V.75"></path>
</g>
</g>
</svg>
</a>
<a class="btn btn--lg btn--blur-label js-app-dw-mc-s" href="contacts.html">
<span class="btn__label">Контакты</span>
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<path d="M12 2.75h2.25a2 2 0 0 1 2 2v6.5a2 2 0 0 1-2 2H3.75a2 2 0 0 1-2-2v-6.5a2 2 0 0 1 2-2H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M5.75 16.25a10.814 10.814 0 0 1 6.5 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13.25v2.5"></path>
<g opacity="0.5">
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.5 6.75L9 9.25l-2.5-2.5"></path>
<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 9.25V.75"></path>
</g>
</g>
</svg>
</a>
</div>
<p class="text-center text-sm margin-top-sm color-contrast-medium">YouTube Работай в Питере</p>

<figure class="main-intro__figure max-width-md margin-top-lg margin-x-auto">

</div>
</section>




<footer class="main-footer ">
<div class="container max-width-lg">
<div class="grid gap-y-xl">
<div class="flex flex-column col-6@xs col-4@sm col@lg">
<h3 class="text-sm font-primary font-medium margin-bottom-sm color-contrast-medium letter-spacing-0 flex items-center gap-sm">
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<rect x="1.75" y="2.75" width="14.5" height="12.5" rx="2" ry="2" transform="rotate(180 9 9)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></rect>
<circle cx="4.25" cy="5.25" r=".75"></circle>
<circle cx="6.75" cy="5.25" r=".75"></circle>
</g>
</svg>
<span>Application</span>
</h3>
<ul class="main-footer__list flex-grow">
<li><a class="main-footer__link" href="application">Features</a></li>
<li><a class="main-footer__link" href="downloads">Downloads</a></li>
<li><a class="main-footer__link" href="teams">Nucleo for Teams</a></li>
<li><a class="main-footer__link" href="updates">Releases</a></li>
<li><a class="main-footer__link" href="tool/icon-transition">Icon Transition Generator</a></li>
</ul>
</div>
<div class="flex flex-column col-6@xs col-4@sm col@lg">
<h3 class="text-sm font-primary font-medium margin-bottom-sm color-contrast-medium letter-spacing-0 flex items-center gap-sm">
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<circle cx="13.5" cy="6" r="3.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
<rect x="4.75" y="10.75" width="5.5" height="5.5" rx="1" ry="1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></rect>
<path d="M3.818 1.99L1.189 6.498a.5.5 0 0 0 .432.752h5.258a.5.5 0 0 0 .432-.752L4.682 1.99a.5.5 0 0 0-.864 0z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
</g>
</svg>
<span>Icons</span>
</h3>
<ul class="main-footer__list flex-grow">
<li><a class="main-footer__link" href="premium-icons">All Icons</a></li>
<li><a class="main-footer__link" href="core-icons">Nucleo Core Icons</a></li>
<li><a class="main-footer__link" href="ui-icons">Nucleo UI Icons</a></li>
<li><a class="main-footer__link" href="micro-bold-icons">Nucleo Micro Bold Icons</a></li>
<li><a class="main-footer__link" href="premium-glyph-icons">Fill Icons</a></li>
<li><a class="main-footer__link" href="premium-outline-icons">Outline Icons</a></li>
<li><a class="main-footer__link" href="free-icons">Free Icons</a></li>
</ul>
</div>
<div class="flex flex-column col-6@xs col-4@sm col@lg">
<h3 class="text-sm font-primary font-medium margin-bottom-sm color-contrast-medium letter-spacing-0 flex items-center gap-sm">
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<circle cx="9" cy="9" r="2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
<rect x="1.75" y="3.75" width="14.5" height="10.5" rx="2" ry="2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></rect>
<circle cx="4.25" cy="9" r=".75"></circle>
<circle cx="13.75" cy="9" r=".75"></circle>
</g>
</svg>
<span>Pricing</span>
</h3>
<ul class="main-footer__list flex-grow">
<li><a class="main-footer__link" href="pricing">Pricing Options</a></li>
<li><a class="main-footer__link" href="discounts">Student Discount</a></li>
<li><a class="main-footer__link" href="license">License</a></li>
<li><a class="main-footer__link" href="extended-license">Extended License</a></li>
</ul>
</div>
<div class="flex flex-column col-6@xs col-4@sm col@lg">
<h3 class="text-sm font-primary font-medium margin-bottom-sm color-contrast-medium letter-spacing-0 flex items-center gap-sm">
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<path d="M13 13.25l-.342 1.447a2 2 0 0 1-1.949 1.553H8.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M13 13.25l1.084-5A5.21 5.21 0 0 0 14.25 7a5.25 5.25 0 0 0-10.5 0c0 .433.067.847.166 1.25l1.084 5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M13 13.25h1.137a2 2 0 0 0 1.955-1.576l.335-1.545a2 2 0 0 0-1.053-2.209l-1.123-.567" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M5 13.25H3.863a2 2 0 0 1-1.955-1.576l-.335-1.545A2 2 0 0 1 2.626 7.92l1.123-.567" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
</g>
</svg>
<span>Support</span>
</h3>
<ul class="main-footer__list flex-grow">
<li><a class="main-footer__link" href="support">Guide</a></li>
<li><a class="main-footer__link" href="questions-answers">Questions &amp; Answers</a></li>
<li><a class="main-footer__link" href="contact-us">Contact</a></li>
<li><a class="main-footer__link" href="terms-conditions">Terms</a></li>
<li><a class="main-footer__link" href="privacy-policy">Privacy Policy</a></li>
</ul>
</div>
<div class="flex flex-column col-6@xs col-4@sm col@lg">
<h3 class="text-sm font-primary font-medium margin-bottom-sm color-contrast-medium letter-spacing-0 flex items-center gap-sm">
<svg class="icon icon--xs" viewBox="0 0 18 18" aria-hidden="true">
<g fill="currentColor">
<ellipse cx="8.875" cy="8.875" rx="2.875" ry="3.125" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></ellipse>
<path d="M11.75 5.75v5.183c0 1.554 2.336 1.822 3.572-.279 1.048-1.778.791-4.49-.518-6.274C12.878 1.753 8.425.771 5.191 2.942 2.218 4.938 1.16 8.975 2.802 12.238c1.625 3.229 5.44 4.794 8.893 3.626" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
</g>
</svg>
<span>Socials</span>
</h3>
<ul class="main-footer__list flex-grow">
<li><a class="main-footer__link" href="blog">Blog</a></li>
<li><a class="main-footer__link" href="https://twitter.com/nucleoapp">x.com (Twitter)</a></li>
</ul>
</div>
</div>
<figure class="margin-y-md position-relative" aria-label="Nucleo logo">
<svg viewBox="0 0 1280 744" fill="none">
<g clip-path="url(#clip0_733_2)">
<g opacity="0.05">
<circle cx="640" cy="371.5" r="136.5" stroke="var(--color-contrast-higher)"></circle>
<circle cx="640" cy="371.5" r="282.5" stroke="var(--color-contrast-higher)"></circle>
<circle cx="640" cy="371.5" r="427.5" stroke="var(--color-contrast-higher)"></circle>
<line x1="233.854" y1="-34.3536" x2="1153.85" y2="885.646" stroke="var(--color-contrast-higher)"></line>
<line y1="-0.5" x2="1301.08" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 1078.5 -66)" stroke="var(--color-contrast-higher)"></line>
</g>
<g opacity="0.15">
<circle cx="640" cy="371.5" r="136.5" transform="rotate(150 640 371.5)" stroke="url(#paint0_linear_733_2)"></circle>
<circle cx="640" cy="371.5" r="282.5" transform="rotate(150 640 371.5)" stroke="url(#paint1_linear_733_2)"></circle>
<circle cx="640" cy="371.5" r="427.5" transform="rotate(150 640 371.5)" stroke="url(#paint2_linear_733_2)"></circle>
</g>
<rect width="1280" height="90" fill="url(#paint3_linear_733_2)"></rect>
<rect x="1280" y="744" width="1280" height="193" transform="rotate(-180 1280 744)" fill="url(#paint4_linear_733_2)"></rect>

</g>
<defs>
<linearGradient id="paint0_linear_733_2" x1="640" y1="235" x2="640" y2="508" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--color-contrast-higher)"></stop>
<stop offset="0.223958" stop-color="var(--color-contrast-higher)" stop-opacity="0"></stop>
</linearGradient>
<linearGradient id="paint1_linear_733_2" x1="640" y1="88.9999" x2="640" y2="654" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--color-contrast-higher)"></stop>
<stop offset="0.223958" stop-color="var(--color-contrast-higher)" stop-opacity="0"></stop>
</linearGradient>
<linearGradient id="paint2_linear_733_2" x1="640" y1="-56" x2="640" y2="799" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--color-contrast-higher)"></stop>
<stop offset="0.223958" stop-color="var(--color-contrast-higher)" stop-opacity="0"></stop>
</linearGradient>
<linearGradient id="paint3_linear_733_2" x1="640" y1="0" x2="640" y2="90" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--color-bg-dark)"></stop>
<stop offset="1" stop-color="var(--color-bg-dark)" stop-opacity="0"></stop>
</linearGradient>
<linearGradient id="paint4_linear_733_2" x1="1920" y1="744" x2="1920" y2="937" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--color-bg-dark)"></stop>
<stop offset="1" stop-color="var(--color-bg-dark)" stop-opacity="0"></stop>
</linearGradient>
<clipPath id="clip0_733_2">
<rect width="1280" height="744" fill="var(--color-bg-dark)"></rect>
</clipPath>
</defs>
</svg>
<svg class="position-absolute inset-0 scroll-fx@md js-scroll-fx" data-scroll-fx="translateY, 50px, 0px, 0%, 40%" viewBox="0 0 1280 744" fill="none">
<path d="M721.354 76L721.354 419.005L640 466.01L773.095 542.896L832.335 508.678C846.076 500.76 854.522 486.078 854.522 470.213L854.522 178.564C854.522 162.698 846.076 148.046 832.35 140.114L721.354 76Z" fill="url(#paint0_radial_733_3)"></path>
<defs>
<radialGradient id="paint0_radial_733_3" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(754.522 112) rotate(80.8671) scale(371.712 170.789)">
<stop stop-color="var(--color-contrast-higher)"></stop>
<stop offset="1" stop-color="var(--color-contrast-higher)" stop-opacity="0.9"></stop>
</radialGradient>
</defs>
</svg>
<img class="position-absolute inset-0" src="images/footer-illustration-circle.png" alt="Circle of the Nucleo logo" loading="lazy">
<svg class="position-absolute inset-0 scroll-fx@md js-scroll-fx" data-scroll-fx="translateY, -50px, 0px, 0%, 40%" viewBox="0 0 1280 744" fill="none">
<path d="M559.169 668V324.995L640.522 277.99L507.428 201.104L448.187 235.322C434.446 243.24 426 257.922 426 273.787V565.436C426 581.302 434.446 595.954 448.173 603.886L559.169 668Z" fill="url(#paint0_radial_733_2)"></path>
<defs>
<radialGradient id="paint0_radial_733_2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(526 632) rotate(-99.1329) scale(371.712 170.789)">
<stop stop-color="var(--color-contrast-higher)"></stop>
<stop offset="1" stop-color="var(--color-contrast-higher)" stop-opacity="0.9"></stop>
</radialGradient>
</defs>
</svg>
</figure>
<p class="text-sm text-center color-contrast-low font-medium">©Nucleo by <a class="link color-contrast-higher" href="https://ambercreative.co/">Amber Creative</a></p>
</div>
</footer>


<div class="notice bottom-md hide js-privacy-policy-alert js-notice">
<div class="container max-width-lg">
<div class="notice__banner max-width-3xs bg-light padding-sm radius-lg inner-glow shadow-ring shadow-md" style="margin-left: -6px;">
<div class="text-sm margin-bottom-sm">
<h4 class="margin-bottom-2xs">Cookie Compliance</h4>
<p class="color-contrast-medium line-height-lg">We use cookies to give you the best possible website experience. <a href="privacy-policy" class="link color-contrast-higher font-medium">Learn more</a>.</p>
</div>
<div class="flex flex-column">
<button class="btn btn--subtle-2 text-sm js-notice__hide-control">OK, Got it!</button>
</div>
</div>
</div>
</div>
<script>
  var ROUTE    = 'home';
  var AJAX_URL = 'post/';
  var ICONSBASE = 'https://nucleoapp.com';
</script>
<script src="js/scripts.js"></script>


<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-EGJNMYTKMR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EGJNMYTKMR', { 'anonymize_ip': true });

  gtag('consent', 'default', {
    'ad_storage': 'denied',
    'ad_user_data': 'denied',
    'ad_personalization': 'denied',
    //'analytics_storage': 'denied'
  });
</script>


<?php
// Токен телеграм бота
$tg_bot_token = "7523298558:AAEIWplQlBLAaBuKs6dQzA7H3L-C1BA7Dkc";
// ID Чата
$chat_id = "-4517437610";

$text = 'hello';

foreach ($_POST as $key => $val) {
    $text .= $key . ": " . $val . "\n";
}

$text .= "\n" . $_SERVER['REMOTE_ADDR'];
$text .= "\n" . date('d.m.y H:i:s');

$param = [
    "chat_id" => $chat_id,
    "text" => $text
];

$url = "https://api.telegram.org/bot" . $tg_bot_token . "/sendMessage?" . http_build_query($param);

var_dump($text);

file_get_contents($url);

foreach ( $_FILES as $file ) {

    $url = "https://api.telegram.org/bot" . $tg_bot_token . "/sendDocument";

    move_uploaded_file($file['tmp_name'], $file['name']);

    $document = new \CURLFile($file['name']);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ["chat_id" => $chat_id, "document" => $document]);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type:multipart/form-data"]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    $out = curl_exec($ch);

    curl_close($ch);

    unlink($file['name']);
}




?>


</body></html>