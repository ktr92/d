<?php
/**
 * Шаблон блока товаров
 *
 * Шаблонный тег <insert name="show_block" module="shop" [count="количество"]
 * [cat_id="категория"] [ids="товары"] [site_id="страница_с_прикрепленным_модулем"] [brand_id="производитель"] 
 * [images="количество_изображений"] [images_variation="тег_размера_изображений"]
 * [sort="порядок_вывода"] [param="дополнительные_условия"]
 * [hits_only="только_хиты"] [action_only="только акции"] [new_only="только_новинки"]
 * [discount_only="только_со_скидкой"]
 * [only_module="only_on_module_page"] [template="шаблон"]>:
 * блок товаров
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

if (empty($result["rows"]))
{
	return false;
}

//заголовок блока
/*if(! empty($result["name"]))
{
	echo '<h2>'.$result["name"].'</h2>';
}*/

//товары в разделе/*
/*if(! empty($result["rows"]))
{	
	echo '<div class="shop-pane"><div class="teamblock__catalog"> ';	
	
		echo $this->get($result["view_rows"], 'shop', $result);
	echo '</div></div>';
}
*/?>


<div class="teamblock">
					<div class="container">
						<h3>Специалисты направления</h3>
					</div>	
<div class="teamblock__container">
						<div class="container">		
	<div class="teamblock__slider">	
	<?		//вывод списка товаров
	if(! empty($result["rows"]))
	{
	

		echo $this->get($result["view_rows"], 'shop', $result);
	}
	?>
	</div></div>
	<div class="teamblock__arrows">
		<div class="teamblock__left">
			<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="30" cy="30" r="30" fill="white"/>
				<path d="M24.3351 28.6806L33.6803 19.3355C33.8965 19.1192 34.185 19 34.4927 19C34.8003 19 35.0889 19.1192 35.305 19.3355L35.9932 20.0235C36.441 20.4719 36.441 21.2005 35.9932 21.6482L28.1458 29.4956L36.0019 37.3518C36.2181 37.5681 36.3374 37.8565 36.3374 38.164C36.3374 38.4718 36.2181 38.7602 36.0019 38.9766L35.3137 39.6645C35.0974 39.8808 34.809 40 34.5014 40C34.1937 40 33.9052 39.8808 33.689 39.6645L24.3351 30.3109C24.1184 30.0939 23.9994 29.8042 24.0001 29.4962C23.9994 29.187 24.1184 28.8974 24.3351 28.6806Z" fill="#CACEDC"/>
				</svg>
		</div>
		<div class="teamblock__right">
			<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="30" cy="30" r="30" transform="rotate(-180 30 30)" fill="white"/>
				<path d="M35.6645 31.3194L26.3192 40.6645C26.103 40.8808 25.8145 41 25.5069 41C25.1992 41 24.9107 40.8808 24.6945 40.6645L24.0063 39.9765C23.5585 39.5281 23.5585 38.7995 24.0063 38.3518L31.8538 30.5044L23.9976 22.6482C23.7814 22.4319 23.6621 22.1435 23.6621 21.836C23.6621 21.5282 23.7814 21.2398 23.9976 21.0234L24.6858 20.3355C24.9021 20.1192 25.1905 20 25.4981 20C25.8058 20 26.0943 20.1192 26.3105 20.3355L35.6645 29.6891C35.8811 29.9061 36.0001 30.1958 35.9994 30.5038C36.0001 30.813 35.8811 31.1026 35.6645 31.3194Z" fill="#CACEDC"/>
				</svg>
		</div>
	</div>
	
</div>
</div>
