<?
/**
 * This file contain old legacy code include constant initialization
 * All code in this file in next updates should be moved into new
 * app structure if can.
 * 
 * For constant definitions:
 *     - each constant must contain a reasonable prefix and postfix
 *     - each constant must use english named
 * Example: 
 *     STRUCTURE_IBLOCK_ID is a valid constant
 *     INFOBLOK_VIZUALNOY_STRUCTURI is a invalid
 */
 
define('TEMPLATE_PATH_DEFAULT', '/bitrix/templates/.default');
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log_file.txt");
define("ERROR_EMAIL", "ofcoder@yandex.ru");

function dumps($var, $die = false, $all = false)
{
	global $USER;
	if( ($USER->GetID() == 1) || ($all == true))
	{
		?>
		<font style="text-align: left; font-size: 10px"><pre><?var_dump($var)?></pre></font><br>
		<?
	}
	if($die)
	{
		die;
	}
}
function my_dump($var)
{
	global $USER;
	if( ($USER->isAdmin() == 1) || ($REQUEST["dump"] === "Y"))
	{
		?>
		<font style="text-align: left; font-size: 10px"><pre><?var_dump($var)?></pre></font><br>
		<?
	}
	
}
?>
