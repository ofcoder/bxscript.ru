<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
</div>
				</div>
				<div class="sb_sidebar">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"sidebar_menu",
						Array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "3",
							"MENU_CACHE_GET_VARS" => array(""),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "left",
							"USE_EXT" => "N"
						)
					);?>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_RECURSIVE" => "Y",
							"AREA_FILE_SHOW" => "sect",
							"AREA_FILE_SUFFIX" => "event",
							"EDIT_TEMPLATE" => "",							
						)
					);?>					
					<div class="sb_action">
						<a href=""><img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/11.png" alt=""/></a>
						<h4>Акция</h4>
						<h5><a href="">Мебельная полка всего за 560 Р</a></h5>
						<a href="" class="sb_action_more">Подробнее &rarr;</a>
					</div>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_RECURSIVE" => "Y",
							"AREA_FILE_SHOW" => "sect",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",							
						)
					);?>
					<div class="sb_reviewed">
							<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/8.png" class="sb_rw_avatar" alt=""/>
							<span class="sb_rw_name">Сергей Антонов</span>
							<span class="sb_rw_job">Руководитель финансового отдела “Банк+”</span>
							<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
							<div class="clearboth"></div>
							<div class="sb_rw_arrow"></div>
					</div>
				</div>
				<div class="clearboth"></div>
			</div>
		</div>
		
		<?include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/.default/include/footer.php"); ?>
		
	</div>
</body>
</html>