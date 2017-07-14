<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetPageProperty("title", "Отзывы");
$APPLICATION->SetPageProperty("keywords", "Отзывы о компании, мебель");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
?>
<p>Заголовок - <?php $APPLICATION->ShowTitle(); ?></p>
<p>test - <?php $APPLICATION->ShowProperty('test'); ?></p>
<p>title - <?php $APPLICATION->ShowProperty('title'); ?></p>
<p>keywords - <?php $APPLICATION->ShowProperty('keywords'); ?></p>
<p>description - <?php $APPLICATION->ShowProperty('description'); ?></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>