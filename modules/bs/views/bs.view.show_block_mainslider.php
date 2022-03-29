<?php
/**
 * Шаблон блока баннеров
 * 
 * Шаблонный тег <insert name="show_block" module="bs" [count="all|количество"]
 * [cat_id="категория"] [id="номер_баннера"] [template="шаблон"]>:
 * блок баннеров
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

if (empty($result))
{
	return false;
}               

foreach ($result as $row)
{ ?>

	<div class="mainslider__slide">
	<? if (! empty($row['link']))
	{
		echo '<a href="'.$row['link'].'" class="js_bs_counter bs_counter" rel="'.$row['id'].'" '.(! empty($row['target_blank']) ? 'target="_blank"' : '').'>';
	} ?>
		<div class="mainslider__item">
			<div class="mainslider__content" style="background-image: url(<?=BASE_PATH.USERFILES.'/bs/'.$row['image']?>)">
				<div class="mainslider__bleft">
					<div class="mainslider__text1"><?=$row['name'] ?></div>
					<div class="mainslider__text2"><?=$row['text'] ?></div>
				</div>
			</div>
		</div>
	<? if (! empty($row['link']))
	{
		echo '</a>';
	} ?>
	</div>
<? } ?>

