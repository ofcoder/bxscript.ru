<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="sb_action">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"/></a>
	<h4><?=$arItem["NAME"];?></h4>
	<h5><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["PREVIEW_TEXT"]?> <?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> Р</a></h5>
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="sb_action_more"><?=GetMessage("LINK_TEXT")?></a>
<?endforeach;?>
</div>