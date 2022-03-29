<?php
/**
 * Шаблон - Страница контакты
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2018 OOO «Диафан» (http://www.diafan.ru/)
 */

if(! defined("DIAFAN"))
{
	$path = __FILE__;
	while(! file_exists($path.'/includes/404.php'))
	{
		$parent = dirname($path);
		if($parent == $path) exit;
		$path = $parent;
	}
	include $path.'/includes/404.php';
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<!-- шаблонный тег show_head выводит часть HTML-шапки сайта. Описан в файле themes/functions/show_head.php. -->
<insert name="show_head">
      <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<insert name="path">favicon.ico" type="image/x-icon">
<!-- шаблонный тег show_css подключает CSS-файлы. Описан в файле themes/functions/show_css.php. -->
<insert name="show_css" files="fonts.css, jquery.mCustomScrollbar.min.css, animista.css, lightbox.min.css, default.css, bootstrap.min.css, bootstrap-grid.min.css, bootstrap-reboot.min.css, custom.css, font-awesome.min.css, slick.css, slick-theme.css, animate.min.css, animista.css,  style.css">

</head>
   <body>   
	<div class="content contactspage"> 
		<insert name="show__header">
		
		<main>
			<div class="page__content">
				<div class="container">
					<insert name="show_breadcrumb" current="true" separator=" ">	
				</div>
					<insert name="show_body">
					
				
			</div>
		</main>	
					
		<insert name="show__footer">				
		<!-- шаблонный тег show_js подключает JS-файлы. Описан в файле themes/functions/show_js.php. -->
		<insert name="show_js">
		<script type="text/javascript" asyncsrc="<insert name="custom" path="js/main.js" absolute="true" compress="js">" charset="UTF-8"></script>
		<!-- шаблонный тег подключает вывод информации о Политике конфиденциальности. Если необходимо вывести свой текст сообщения, то добавле его в атрибут "text". -->
		<insert name="show_privacy" hash="false" text="">
		<insert name="show_include" file="counters">
   </body>
</html>