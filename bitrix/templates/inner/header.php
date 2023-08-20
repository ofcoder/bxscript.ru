<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>//">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?use Bitrix\Main\Page\Asset;

// Для подключения css
Asset::getInstance()->addCss(TEMPLATE_PATH_DEFAULT . "/template_styles.css");

// Для подключения скриптов
Asset::getInstance()->addJs(TEMPLATE_PATH_DEFAULT . "/js/jquery-1.8.2.min.js");
Asset::getInstance()->addJs(TEMPLATE_PATH_DEFAULT . "/js/functions.js");

// Подключение мета тегов или сторонних файлов
Asset::getInstance()->addString('<link href="' . TEMPLATE_PATH_DEFAULT . '/favicon.ico" rel="shortcat-icon" type="image/x-icon">');
?>
	
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
	<div class="wrap">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<div class="hd_header_area">
			<?include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/.default/include/header.php"); ?>
		</div>
		
		<!--- // end header area --->
		<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav", 
	array(
		"COMPONENT_TEMPLATE" => "nav",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	),
	false
);?>
		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
						<div class="main_title">
							<p class="title"><?$APPLICATION->ShowTitle()?></p>
						</div>
						<!-- workarea -->