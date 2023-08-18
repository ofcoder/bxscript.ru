<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Заголовок окна страницы");
$APPLICATION->SetPageProperty("keywords", "отзывы, компания");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
?>
<p>Заголовок - <?$APPLICATION->ShowTitle()?></p>
<p>Заголовок окна - <?$APPLICATION->ShowTitle(false)?></p>
<p>title - <?$APPLICATION->ShowProperty("title")?></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>