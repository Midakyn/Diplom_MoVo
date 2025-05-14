<?php
// Text
$_['text_information'] = 'Інформація';
$_['text_service'] = 'Служба підтримки';
$_['text_extra'] = 'Додатково';
$_['text_contact'] = 'Контакти';
$_['text_return'] = 'Повернення товару';
$_['text_sitemap'] = 'Карта сайту';
$_['text_manufacturer'] = 'Виробники';
$_['text_voucher'] = 'Подарункові сертифікати';
$_['text_affiliate'] = 'Партнерська програма';
$_['text_special'] = 'Акції';
$_['text_account'] = 'Особистий Кабінет';
$_['text_order'] = 'Історія замовлень';
$_['text_wishlist'] = 'Закладки';
$_['text_newsletter'] = 'Розсилка';
if (isset($_SERVER['REQUEST_URI']) && trim($_SERVER['REQUEST_URI'], '/') == '') {
    $_['text_powered'] = '<a href="https://ocmod.net/ua/moduli/" target="_blank">OpenCart</a><br> %s &copy; %s';
} else {
    $_['text_powered'] = 'OpenCart<br> %s &copy; %s';
}