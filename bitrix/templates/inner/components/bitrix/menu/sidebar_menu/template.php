<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--<div class="sb_nav">
						<ul>
							<li class="close"><a href=""><span>Каталог</span></a></li>
							<li class="close"><a href=""><span>Кухни</span></a></li>
							<li class="close"><a href=""><span>Гарнитуры</span></a></li>
							<li class="open current">
								<span class="sb_showchild"></span>
								<a href=""><span>Спальни</span></a>
								<ul>
									<li><a href="">Одноместрые</a></li>
									<li><a href="">Двухместные</a></li>
									<li><a href="">Детские</a></li>
								</ul>
							</li>
							<li class="close"><a href=""><span>Кухни</span></a></li>
							<li class="close"><a href=""><span>Гарнитуры</span></a></li>
							<li class="close">
								<span class="sb_showchild"></span>
								<a href=""><span>Спальни</span></a>
								<ul>
									<li><a href="">Одноместрые</a></li>
									<li><a href="">Двухместные</a></li>
									<li><a href="">Детские</a></li>
								</ul>
							</li>
						</ul>
					</div>-->


<?if (!empty($arResult)):?>
<div class="sb_nav">
<ul>

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="close <?if ($arItem["SELECTED"]):?>current<?endif?>">
				<span class="sb_showchild"></span>
				<a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a>
				<ul>
		<?else:?>
			<li class="close">
				<span class="sb_showchild"></span>
				<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li <?if ($arItem["SELECTED"]):?>class="current"<?endif?>>					
					<a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>	

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul></div>
<?endif?>
