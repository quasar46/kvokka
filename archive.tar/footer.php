<?

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){
	die();
}

?>
<div class="modal-wrapper">
    <div class="modal-wrapper-big">
        <div class="modal-container">
            <div class="burger active burger__modal"></div>
            <div class="modal-services">
                <div class="modal-services-wrapper">
                    <div class="modal-services__body">
                        <!-- <h2 class="modal-services__title">Услуги</h2> -->
                        <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "service",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "service",
                                    "USE_EXT" => "N"
                                )
                            );?>
                    </div>
                    <div class="modal-services__body">
                        <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "section",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "section",
                                    "USE_EXT" => "N"
                                )
                            );?>
                    </div>
                </div>
            </div>
            <div class="modal-contacts">
                <div class="modal-contacts-wrapper">
                    <div class="modal-contacts__body">
                        <h2 class="modal-contacts__title">Контакты</h2>
                        <ul class="modal-contacts__list">
                            <li class="modal-contacts__item">
                                <?$APPLICATION->IncludeComponent(
                                    "reaspekt:reaspekt.geoip",
                                    "city_name",
                                    array(
                                        "CHANGE_CITY_MANUAL" => "Y",
                                    )
                                );?>
                            </li>
                            <?\Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("contacts");?>

                            <? switch(kvokkaCityDir()){

                                case 'krasnodar':?>

                            <li class="modal-contacts__item">ул. Красная, 155/2</li>
                            <li class="modal-contacts__item"><a href="tel:+78612925852">+7 (861) 292 58 52</a></li>
                            <li class="modal-contacts__item"><a href="mail:sale@kvokka.com">sale@kvokka.com</a>

                                <?break;

                                default:?>
                            <li class="modal-contacts__item">ул. Максима Горького д. 70</li>
                            <li class="modal-contacts__item"><a href="tel:+74712747565">+7 (4712) 747-565</a></li>
                            <li class="modal-contacts__item"><a href="mail:sale@kvokka.com">sale@kvokka.com</a>
                                <?break;

                            } ?>

                                <?\Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("contacts", "");?>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-contacts__body">
                        <h2 class="modal-contacts__title modal-contacts__title--social">Мы в соц сетях</h2>
                        <ul class="modal-social">
                            <li class="modal-social__item">
                                <a href="https://t.me/kvokka_bot" target="_blank">
                                    <svg version="1.1" width="36" height="43" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 189.473 189.473" style="enable-background:new 0 0 189.473 189.473;" xml:space="preserve">
                                        <path d="M152.531,179.476c-1.48,0-2.95-0.438-4.211-1.293l-47.641-32.316l-25.552,18.386c-2.004,1.441-4.587,1.804-6.914,0.972
                                            c-2.324-0.834-4.089-2.759-4.719-5.146l-12.83-48.622L4.821,93.928c-2.886-1.104-4.8-3.865-4.821-6.955
                                            c-0.021-3.09,1.855-5.877,4.727-7.02l174.312-69.36c0.791-0.336,1.628-0.53,2.472-0.582c0.302-0.018,0.605-0.018,0.906-0.001
                                            c1.748,0.104,3.465,0.816,4.805,2.13c0.139,0.136,0.271,0.275,0.396,0.42c1.11,1.268,1.72,2.814,1.835,4.389
                                            c0.028,0.396,0.026,0.797-0.009,1.198c-0.024,0.286-0.065,0.571-0.123,0.854L159.898,173.38c-0.473,2.48-2.161,4.556-4.493,5.523
                                            C154.48,179.287,153.503,179.476,152.531,179.476z M104.862,130.579l42.437,28.785L170.193,39.24l-82.687,79.566l17.156,11.638
                                            C104.731,130.487,104.797,130.533,104.862,130.579z M69.535,124.178l5.682,21.53l12.242-8.809l-16.03-10.874
                                            C70.684,125.521,70.046,124.893,69.535,124.178z M28.136,86.782l31.478,12.035c2.255,0.862,3.957,2.758,4.573,5.092l3.992,15.129
                                            c0.183-1.745,0.974-3.387,2.259-4.624L149.227,38.6L28.136,86.782z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="modal-social__item">
                                <a href="https://vk.com/kvokkacom" target="_blank">
                                <svg id="regular" enable-background="new 0 0 24 24" width="44" height="45"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path d="m12.145 19.5c3.472 0 2.234-2.198 2.502-2.83-.004-.472-.008-.926.008-1.202.22.062.739.325 1.811 1.367 1.655 1.67 2.078 2.665 3.415 2.665h2.461c.78 0 1.186-.323 1.389-.594.196-.262.388-.722.178-1.438-.549-1.724-3.751-4.701-3.95-5.015.03-.058.078-.135.103-.175h-.002c.632-.835 3.044-4.449 3.399-5.895.001-.002.002-.005.002-.008.192-.66.016-1.088-.166-1.33-.274-.362-.71-.545-1.299-.545h-2.461c-.824 0-1.449.415-1.765 1.172-.529 1.345-2.015 4.111-3.129 5.09-.034-1.387-.011-2.446.007-3.233.036-1.535.152-3.029-1.441-3.029h-3.868c-.998 0-1.953 1.09-.919 2.384.904 1.134.325 1.766.52 4.912-.76-.815-2.112-3.016-3.068-5.829-.268-.761-.674-1.466-1.817-1.466h-2.461c-.998 0-1.594.544-1.594 1.455 0 2.046 4.529 13.544 12.145 13.544zm-8.09-13.499c.217 0 .239 0 .4.457.979 2.883 3.175 7.149 4.779 7.149 1.205 0 1.205-1.235 1.205-1.7l-.001-3.702c-.066-1.225-.512-1.835-.805-2.205l3.508.004c.002.017-.02 4.095.01 5.083 0 1.403 1.114 2.207 2.853.447 1.835-2.071 3.104-5.167 3.155-5.293.075-.18.14-.241.376-.241h2.461.01c-.001.003-.001.006-.002.009-.225 1.05-2.446 4.396-3.189 5.435-.012.016-.023.033-.034.05-.327.534-.593 1.124.045 1.954h.001c.058.07.209.234.429.462.684.706 3.03 3.12 3.238 4.08-.138.022-.288.006-2.613.011-.495 0-.882-.74-2.359-2.23-1.328-1.292-2.19-1.82-2.975-1.82-1.524 0-1.413 1.237-1.399 2.733.005 1.622-.005 1.109.006 1.211-.089.035-.344.105-1.009.105-6.345 0-10.477-10.071-10.636-11.996.055-.005.812-.002 2.546-.003z"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="politics">
                    <p><a href="/policy.pdf" target="_blank">Политика конфиденциальности</a></p>
                    <p><a href="/agreement.pdf" target="_blank">Согласие на обработку персональных данных</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bitrix24 -->

<script type="text/javascript">
    (function(w, d, u) {
        var s = d.createElement('script');
        s.async = true;
        s.src = u + '?' + (Date.now() / 60000 | 0);
        var h = d.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s, h);
    })(window, document, 'https://cdn.bitrix24.ru/b9936445/crm/site_button/loader_1_ylw5aq.js');
</script>

<!-- <script type="text/javascript" id="bx24_form_button" data-skip-moving="true">
    (function(w, d, u, b) {
        w['Bitrix24FormObject'] = b;
        w[b] = w[b] || function() {
            arguments[0].ref = u;
            (w[b].forms = w[b].forms || []).push(arguments[0])
        };
        if (w[b]['forms']) return;
        var s = d.createElement('script');
        s.async = 1;
        s.src = u + '?' + (1 * new Date());
        var h = d.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s, h);
    })(window, document, 'https://kvokka.bitrix24.ru/bitrix/js/crm/form_loader.js', 'b24form');
    b24form({
        "id": "7",
        "lang": "ru",
        "sec": "byoxln",
        "type": "button",
        "click": ""
    });
</script> -->

<script id="bx24_form_button" data-skip-moving="true">
    (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
            (w[b].forms=w[b].forms||[]).push(arguments[0])};
            if(w[b]['forms']) return;
            var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://kvokka.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

    b24form({"id":"1","lang":"ru","sec":"2nibjt","type":"button","click":""});
</script>

<!-- /Bitrix24 -->

<!-- VK -->
<script type="text/javascript">
    ! function() {
        var t = document.createElement("script");
        t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?160", t.onload =
            function() {
                VK.Retargeting.Init("VK-RTRG-322672-bz8Ig"), VK.Retargeting.Hit()
            }, document.head.appendChild(t)
    }();
</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-322672-bz8Ig" style="position:fixed; left:-999px;"
        alt="" /></noscript>
<!-- /VK -->

</body>

</html>