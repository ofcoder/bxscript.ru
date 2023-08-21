<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<!--<h1><a href="<?=SITE_DIR?>">Мебельный магазин</a></h1>-->
							<h1><?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/include/logo.php"
								)
							);?>
							</h1>
													</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel"><?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/include/phone.php"
								)
							);?>
							</span>	<br/>	
							<?=GetMessage('WORKING_TIME')?> <span class="workhours">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/include/workingtime.php"
								)
							);?>
							</span>						
													</td>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Поиск" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							<?$APPLICATION->IncludeComponent(
								"bitrix:system.auth.form",
								"auth",
								Array(
									"COMPONENT_TEMPLATE" => ".default",
									"FORGOT_PASSWORD_URL" => "/user/",
									"PROFILE_URL" => "/user/profile.php",
									"REGISTER_URL" => "/user/registration.php",
									"SHOW_ERRORS" => "N"
								)
							);?>
						</td>
					</tr>
				</table>
				<?$APPLICATION->IncludeComponent("bitrix:menu", "top_multi", Array(
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"MAX_LEVEL" => "3",	// Уровень вложенности меню
					"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_TYPE" => "N",	// Тип кеширования
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					"COMPONENT_TEMPLATE" => "horizontal_multilevel"
					),
					false
				);?>
			</div>