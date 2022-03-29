<?php
/**
 * Шаблон формы поиска по сайту, template=top
 *
 * Шаблонный тег <insert name="show_search" module="search" template="top"
 * [button="надпись на кнопке"]>:
 * форма поиска по сайту
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2018 OOO «Диафан» (http://www.diafan.ru/)
 */

if (! defined('DIAFAN'))
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

echo '
<div class="top_search">

<form  action="'.$result["action"].'" class="searchform js_search_form search_form'.($result["ajax"] ? ' ajax" method="post"' : '" method="get"').' id="search">
	<input type="text" placeholder="поиск" name="searchword">
	<input type="hidden" name="module" value="search">
	<button type="submit">
		<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M7.92682 0C3.55609 0 0 3.55609 0 7.92682C0 12.2978 3.55609 15.8536 7.92682 15.8536C12.2978 15.8536 15.8536 12.2978 15.8536 7.92682C15.8536 3.55609 12.2978 0 7.92682 0ZM7.92682 14.3903C4.36293 14.3903 1.46341 11.4908 1.46341 7.92686C1.46341 4.36296 4.36293 1.46341 7.92682 1.46341C11.4907 1.46341 14.3902 4.36293 14.3902 7.92682C14.3902 11.4907 11.4907 14.3903 7.92682 14.3903Z" fill="#212C58"/>
		<path d="M17.786 16.751L13.5908 12.5558C13.305 12.27 12.842 12.27 12.5562 12.5558C12.2703 12.8414 12.2703 13.3049 12.5562 13.5905L16.7513 17.7856C16.8942 17.9285 17.0814 18 17.2687 18C17.4557 18 17.643 17.9285 17.786 17.7856C18.0718 17.5 18.0718 17.0366 17.786 16.751Z" fill="#212C58"/>
		</svg>
	</button>
</form>
	';
if($result["ajax"])
{
	echo '<div class="js_search_result search_result"></div>';
}
echo '</div>';