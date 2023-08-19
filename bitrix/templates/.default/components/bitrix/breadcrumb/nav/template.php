<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

$strReturn .= '<div class="bc_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><ul>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	

	//if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	if($arResult[$index]["LINK"] <> "")
	{
		$strReturn .= '
			<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
					<span itemprop="name">'.$title.'</span>
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</li>';
	}
	else
	{
		$strReturn .= '
			<li class="bx-breadcrumb-item">				
				'.$title.'
			</li>';
	}
}


$strReturn .= '</ul><div class="clearboth"></div></div>';

return $strReturn;
