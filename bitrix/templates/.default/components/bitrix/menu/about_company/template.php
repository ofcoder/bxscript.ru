<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="ft_about">
	<h4><?=GetMessage('ABOUT_SHOP')?></h4>
	<ul>
	<?foreach ($arResult as $item) {?>
		<li><a href="<?=$item['LINK']?>" title="<?=$item['TEXT']?>"><?=$item['TEXT']?></a></li>
	<?}?>	
	</ul>
</div>