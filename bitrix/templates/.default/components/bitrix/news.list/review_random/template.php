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
<div class="sb_reviewed">
<?foreach($arResult["ITEMS"] as $arItem):?>
<?if (is_array($arItem["PREVIEW_PICTURE"])){?>
	<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="sb_rw_avatar" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/>
<?}?>
	<span class="sb_rw_name"><?=$arItem["NAME"]?></span>
	<span class="sb_rw_job"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?> <?=$arItem["PROPERTIES"]["COMPANY_NAME"]["VALUE"]?></span>
	<p><?=$arItem["PREVIEW_TEXT"]?></p>
	<div class="clearboth"></div>
	<div class="sb_rw_arrow"></div>
<?endforeach?>
</div>
