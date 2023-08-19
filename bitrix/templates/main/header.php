<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?use Bitrix\Main\Page\Asset;

// Для подключения css
Asset::getInstance()->addCss(TEMPLATE_PATH_DEFAULT . "/template_styles.css");

// Для подключения скриптов
Asset::getInstance()->addJs(TEMPLATE_PATH_DEFAULT . "/js/jquery-1.8.2.min.js");
Asset::getInstance()->addJs(TEMPLATE_PATH_DEFAULT . "/js/slides.min.jquery.js");
Asset::getInstance()->addJs(TEMPLATE_PATH_DEFAULT . "/js/jquery.carouFredSel-6.1.0-packed.js");
Asset::getInstance()->addJs(TEMPLATE_PATH_DEFAULT . "/js/functions.js");

// Подключение мета тегов или сторонних файлов
Asset::getInstance()->addString('<link href="' . TEMPLATE_PATH_DEFAULT . '/favicon.ico" rel="shortcat-icon" type="image/x-icon">');
?>
<!--
	<link rel="stylesheet" href="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/template_styles.css"/>
	<script src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/js/jquery-1.8.2.min.js"></script>
	<script src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/js/slides.min.jquery.js"></script>
	<script src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/js/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/js/functions.js"></script>
	
	<link href="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/favicon.ico" rel="shortcat-icon" type="image/x-icon">
-->	
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
	<div class="wrap">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href="<?=SITE_DIR?>">Мебельный магазин</a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel">8 (495) 212-85-06</span>	<br/>	
							<?=GetMessage('WORKING_TIME')?> <span class="workhours">ежедневно с 9-00 до 18-00</span>						
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
							<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
							<div class="hd_loginform">
								<span class="hd_title_loginform">Войти на сайт</span>
								<form name="" method="" action="">
					
									<input placeholder="Логин"  type="text">
									<input  placeholder="Пароль"  type="password">			
									<a href="/" class="hd_forgotpassword">Забыли пароль</a>
									
									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>
									</div>				
									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform">Закрыть</span>
							</div>
							</span><br>
							<a href="" class="hd_signup">Зарегистрироваться</a>
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
		</div>
		
		<!--- // end header area --->
		
		<script type="text/javascript" >
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
		
		<div class="sl_slider" id="slides">
			<div class="slides_container">
				<div>
					<div>
						<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/1.jpg" alt="" />
						<h2><a href="">Диваны и кресла</a></h2>
						<p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.</p>
						<a href="" class="sl_more">Подробнее &rarr;</a>
					</div>
				</div>
				<div>
					<div>
						<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/1.jpg" alt="" />
						<h2><a href="">Диваны и кресла</a></h2>
						<p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.</p>
						<a href="" class="sl_more">Подробнее &rarr;</a>
					</div>
				</div>
			</div>
		</div>

		
		<!--- // end slider area --->
		
		<div class="main_container homepage">
			
			<!-- events -->
			<div class="ev_events">
				<div class="ev_h">
					<h3>Ближайшие события</h3>
					<a href="" class="ev_allevents">Все мероприятия &rarr;</a>
				</div>
				<ul class="ev_lastevent">
					<li>
						<h4><a href="">29 августа 2012, Москва</a></h4>
						<p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
					</li>
					<li>
						<h4><a href="">30 августа 2012, Санкт-Петербург</a></h4>
						<p>Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</p>
					</li>
					<li>
						<h4><a href="">31 августа 2012, Краснодар</a></h4>
						<p>Открытие нового магазина в нашей дилерской сети.</p>
					</li>
				</ul>
				<div class="clearboth"></div>
			</div>
			<!-- // end events -->
			<div class="cn_hp_content">
				<div class="cn_hp_category">
					<ul>
						<li>
							<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/1.png" alt=""/>
							<h2><a href="">Мягкая мебель</a></h2>
							<p>Диваны, кресла и прочая мягкая мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
							<div class="clearboth"></div>
						</li>
						<li>
							<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/2.png" alt=""/>
							<h2><a href="">Офисная мебель</a></h2>
							<p>Диваны, столы, стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
							<div class="clearboth"></div>
						</li>
						<li>
							<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/3.png" alt=""/>
							<h2><a href="">Мебель для кухни</a></h2>
							<p>Полки, ящики, столы и стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
							<div class="clearboth"></div>
						</li>
						<li>
							<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/4.png" alt=""/>
							<h2><a href="">Детская мебель</a></h2>
							<p>Кровати, стулья, мягкая детская мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
							<div class="clearboth"></div>
						</li>
					</ul>
					<a href="" class="cn_hp_category_more">Все разделы каталога &rarr;</a>
				</div>
				<div class="cn_hp_post">
					<div class="cn_hp_post_new">
						<h3>Новинки</h3>
						<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/7.png" alt=""/>
						<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
						<div class="clearboth"></div>
					</div>
					<div class="cn_hp_post_action">
						<h3>Акции</h3>
						<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/7.png" alt=""/>
						<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
						<div class="clearboth"></div>
					</div>
					<div class="cn_hp_post_bestsellersn">
						<h3>Хиты продаж</h3>
						<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/7.png" alt=""/>
						<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
						<div class="clearboth"></div>
					</div>
				</div>
				<div class="cn_hp_lastnews">
					<h3><a href="">Новости</a></h3>		
					<ul>
						<li>
							<h4><a href="">29 августа 2012</a></h4>
							<p>Поступление лучших офисных кресел из Германии</p>
						</li>
						<li>
							<h4><a href="">29 августа 2012</a></h4>
							<p>Мастер-класс дизайнеров из Италии для производителей мебели</p>
						</li>
						<li>
							<h4><a href="">29 августа 2012</a></h4>
							<p>Открытие нашего нового офиса рядом с метро Измайлово</p>
						</li>
						<li>
							<h4><a href="">29 августа 2012</a></h4>
							<p>Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани</p>
						</li>					
					</ul>
					<br/>
					<a href="" class="cn_hp_lastnews_more">Все новости &rarr;</a>
				</div>
				<div class="clearboth"></div>
			</div>
		</div>
		
		<script type="text/javascript" >
			$(document).ready(function(){
			
				$("#foo").carouFredSel({
					items:2,
					prev:'#rwprev',
					next:'#rwnext',
					scroll:{
						items:1,
						duration:2000
					}
				});	
			});	
		</script>
	
		<div class="rw_reviewed">
			<div class="rw_slider">
				<h4>Отзывы</h4>
				<ul id="foo">
					<li>
						<div class="rw_message">
							<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/8.png" class="rw_avatar" alt=""/>
							<span class="rw_name">Сергей Антонов</span>
							<span class="rw_job">Руководитель финансового отдела “Банк+”</span>
							<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
							<div class="clearboth"></div>
							<div class="rw_arrow"></div>
						</div>
					</li>
					<li>
						<div class="rw_message">
							<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/8.png" class="rw_avatar" alt=""/>
							<span class="rw_name">Дмитрий Иванов</span>
							<span class="rw_job">Генеральный директор группы компаний "Офис+"</span>
							<p>“В магзине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного клиента.”</p>
							<div class="clearboth"></div>
							<div class="rw_arrow"></div>
						</div>
					</li>
					<li>
						<div class="rw_message">
							<img src="<?=TEMPLATE_PATH_DEFAULT//SITE_TEMPLATE_PATH?>/content/8.png" class="rw_avatar" alt=""/>
							<span class="rw_name">Сергей Антонов</span>
							<span class="rw_job">Руководитель финансового отдела “Банк+”</span>
							<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
							<div class="clearboth"></div>
							<div class="rw_arrow"></div>
						</div>
					</li>
				</ul>
				<div id="rwprev"></div>
				<div id="rwnext"></div>
				<a href="" class="rw_allreviewed">Все отзывы</a>
			</div>
		</div>