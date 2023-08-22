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
	<script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script>	


<div class="sl_slider" id="slides">
	<div class="slides_container">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div>
			<div>
			<?if (isset($arItem["PREVIEW_PICTURE"]) && !empty($arItem["PREVIEW_PICTURE"])) {?>
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" >
			<?}?>
				<h2><a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>"><?=$arItem["NAME"]?></a></h2>
				<p><?=$arItem["PREVIEW_TEXT"]?></p>
				<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="sl_more"><?=GetMessage("LINK_TEXT")?></a>	
			
			</div>
		</div>
	<?endforeach;?>
	</div>
</div>

<script>
			$().ready(function(){
				$(function(){
					$('#slides').slides({
						preload: true,
						generateNextPrev: false,
						autoHeight: true,
						play: 4000,
						effect: 'fade'
					});
				});
			});
</script>