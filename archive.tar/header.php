<?

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

CModule::IncludeModule("kvokka.mobiledetect");

use \Bitrix\Main\Page\Asset;

CJSCore::Init(array("jquery3")); 

Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Exo+2:400,600,700&display=swap&subset=cyrillic" rel="stylesheet">');

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/normalize.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/ReaspektPopupBody.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');

Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/main.js');

$bodyClass = $APPLICATION->sDirPath === '/' ? 'home' : 'no-home';
$rsSites = CSite::GetByID('s2');
$arSite = $rsSites->Fetch();

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
        <meta charset="<?=SITE_CHARSET?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/favicon/site.webmanifest">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
        <?$APPLICATION->ShowHead();?>
        <script src="<?=SITE_TEMPLATE_PATH . '/js/splitting.min.js'?>"></script>
		<title><?$APPLICATION->ShowTitle(true)?> - <?=$arSite["SITE_NAME"]?></title>
	</head>
    <body class="<?=$bodyClass?><?$APPLICATION->ShowProperty("PAGESCLASS")?>">
    
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function(d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter49498204 = new Ya.Metrika2({
                            id: 49498204,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true
                        });
                    } catch (e) {}
                });
                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function() {
                        n.parentNode.insertBefore(s, n);
                    };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/tag.js";
                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks2");
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/49498204" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=UA-127320581-1"></script>
        <script type="text/javascript">
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-127320581-1');
        </script>
        <!-- /Global site tag (gtag.js) - Google Analytics -->

        <div class="jump-kvokka">
            <span data-splitting class="headline headline--jump ">kvokka</span>
        </div>

        <script>
            Splitting();
        </script>

        <?if ($USER->IsAdmin()): ?>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        <?endif;?>

        <section class="top-section top-section--mod">
            <a href="/" class="logo">kvokka</a>
            <div class="burger-wrap">
                <span>Меню</span>
                <div class="burger">
                    <span></span>
                </div>
            </div>
        </section>

        <? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
        <div class="arrow-wrapper">
            <div class="arrow-nav__prev">
                <svg width="100%" height="100%" viewBox="0 0 98 25" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-miterlimit:1.5;">
                    <rect x="1.707" y="11.369" width="82.288" height="2.5" style="fill:#ccc;" />
                    <path d="M84.587,1.5l10.793,10.794l-11,11" style="fill:none;stroke:#ccc;stroke-width:2.5px;" />
                </svg>
            </div>
        </div>
        <? endif; ?>
