<?php
/**
 * Шаблон списка товаров
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

if(! empty($result["error"]))
{
	echo '<p>'.$result["error"].'</p>';
	return;
}



?>
<div class="pagecontent">
	<div class="container">
		<h1><?=$result["name"]; ?></h1>
		<div class="colmns">
			<div class="colmns colmns_left">
				<div class="pageleft">
				    <div class="pageimg">
				        <img src="<?=$result["img"][1]["vs"]["medium"];?>">
				        
				        
				    </div>

					<? if(! empty($result["text"])) {
						echo $result['text'];
					} ?>
				</div>
			</div>
			<div class="colmns colmns_right">
				<aside>
					<div class="asideform"><div class="pageform">						
						<?echo $this->htmleditor('<insert name="show_form" module="feedback" site_id="185">');?>						
				</div>
				<div class="pageform">
				    	<div class="pageformflex">
				    <svg xmlns="http://www.w3.org/2000/svg" width="98.488" height="98.488" viewBox="0 0 98.488 98.488"><path fill="#4caf50" d="M49.256,0h-.025A49.213,49.213,0,0,0,9.375,78.107L3.238,96.4,22.166,90.35A49.235,49.235,0,1,0,49.256,0Z" data-name="Path 55"/><path fill="#fafafa" d="M164.541,164.1c-1.188,3.355-5.9,6.137-9.664,6.95-2.573.548-5.934.985-17.248-3.706-14.472-6-23.791-20.7-24.517-21.655-.7-.954-5.848-7.787-5.848-14.853a15.721,15.721,0,0,1,5.035-11.985,7.155,7.155,0,0,1,5.035-1.767c.609,0,1.157.031,1.65.055,1.447.062,2.173.148,3.127,2.431,1.188,2.862,4.081,9.929,4.426,10.655a2.931,2.931,0,0,1,.209,2.665,8.51,8.51,0,0,1-1.594,2.259c-.726.837-1.416,1.477-2.142,2.376-.665.782-1.416,1.619-.579,3.065a43.709,43.709,0,0,0,7.99,9.929,36.2,36.2,0,0,0,11.548,7.122,3.114,3.114,0,0,0,3.472-.548,59.579,59.579,0,0,0,3.847-5.1,2.748,2.748,0,0,1,3.533-1.071c1.33.462,8.365,3.94,9.812,4.66s2.4,1.071,2.751,1.68S165.729,160.743,164.541,164.1Z" data-name="Path 56" transform="translate(-86.631 -94.565)"/></svg>
				    
					<a class="wtsp" href="https://api.whatsapp.com/send?phone=79391053303" target="blank">Записаться через WhatsApp</a>
						</div>
				</div>
				
				</div>
					<div class="colbanner"><a href=""><img src="/images/banner1.png" alt=""></a></div>
				</aside>
			</div>
			
		</div>
		</div><br/><br/><br/><br/>
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
</div>

<?
/*
//вывод описания текущей категории
if(! empty($result["text"]))
{
	echo '<div class="shop_text text">';
	//вывод изображений текущей категории
	if(! empty($result["img"]))
	{
		echo '<div class="shop_cat_all_img">';
		foreach($result["img"] as $img)
		{
			switch ($img["type"])
			{
				case 'animation':
					echo '<a href="'.BASE_PATH.$img["link"].'" data-fancybox="gallery'.$result["id"].'shop_cat">';
					break;
				case 'large_image':
					echo '<a href="'.BASE_PATH.$img["link"].'" rel="large_image" width="'.$img["link_width"].'" height="'.$img["link_height"].'">';
					break;
				default:
					echo '<a href="'.BASE_PATH_HREF.$img["link"].'">';
					break;
			}
			echo '<img src="'.$img["src"].'" width="'.$img["width"].'" height="'.$img["height"].'" alt="'.$img["alt"].'" title="'.$img["title"].'">'
			. '</a> ';
		}
		echo '</div>';
	}
	echo $result['text'].'</div>';
}
else
{
	//вывод изображений текущей категории
	if(! empty($result["img"]))
	{
		echo '<div class="shop_cat_all_img">';
		foreach($result["img"] as $img)
		{
			switch ($img["type"])
			{
				case 'animation':
					echo '<a href="'.BASE_PATH.$img["link"].'" data-fancybox="gallery'.$result["id"].'shop_cat">';
					break;
				case 'large_image':
					echo '<a href="'.BASE_PATH.$img["link"].'" rel="large_image" width="'.$img["link_width"].'" height="'.$img["link_height"].'">';
					break;
				default:
					echo '<a href="'.BASE_PATH_HREF.$img["link"].'">';
					break;
			}
			echo '<img src="'.$img["src"].'" width="'.$img["width"].'" height="'.$img["height"].'" alt="'.$img["alt"].'" title="'.$img["title"].'">'
			. '</a> ';
		}
		echo '</div>';
	}
}

//вывод подкатегории
if(! empty($result["children"]))
{
	foreach($result["children"] as $child)
	{
		echo '<div class="shop_cat_link">';

		//вывод изображений подкатегории
		if(! empty($child["img"]))
		{
			echo '<div class="shop_cat_img">';
			foreach($child["img"] as $img)
			{
				switch ($img["type"])
				{
					case 'animation':
						echo '<a href="'.BASE_PATH.$img["link"].'" data-fancybox="gallery'.$child["id"].'shop">';
						break;
					case 'large_image':
						echo '<a href="'.BASE_PATH.$img["link"].'" rel="large_image" width="'.$img["link_width"].'" height="'.$img["link_height"].'">';
						break;
					default:
						echo '<a href="'.BASE_PATH_HREF.$img["link"].'">';
						break;
				}
				echo '<img src="'.$img["src"].'" width="'.$img["width"].'" height="'.$img["height"].'" alt="'.$img["alt"].'" title="'.$img["title"].'">'
				. '</a> ';
			}
			echo '</div>';
		}

		//название и ссылка подкатегории
		echo '<a href="'.BASE_PATH_HREF.$child["link"].'">'.$child["name"].' ('.$child["count"].')</a>';		

		//краткое описание подкатегории
		if($child["anons"])
		{
			echo '<div class="shop_cat_anons">'.$child['anons'].'</div>';
		}
		echo '</div>';

		//вывод списка товаров подкатегории
		if(! empty($child["rows"]))
		{
			$res = $result; unset($res["show_more"]);
			$res["rows"] = $child["rows"];
                        echo '<div class="shop-pane">';
			echo $this->get($result["view_rows"], 'shop', $res);
                        echo '</div>';
		}
	}
}

//вывод списка товаров
if(! empty($result["rows"]))
{
    //вывод сортировки товаров
	if(! empty($result["link_sort"]))
	{
		echo $this->get('sort_block', 'shop', $result);
	}

	echo '<div class="shop-pane">';
	echo $this->get($result["view_rows"], 'shop', $result);
	echo '</div>';
}

//постраничная навигация
if(! empty($result["paginator"]))
{
	echo $result["paginator"];
}

if (!empty($result["rows"]) && empty($result["hide_compare"]))
{
	echo $this->get('compared_goods_list', 'shop', array("site_id" => $this->diafan->_site->id, "shop_link" => $result['shop_link']));
}

//вывод ссылок на предыдущую и последующую категории
if(! empty($result["previous"]) || ! empty($result["next"]))
{
	echo '<div class="previous_next_links">';
	if(! empty($result["previous"]))
	{
		echo '<div class="previous_link"><a href="'.BASE_PATH_HREF.$result["previous"]["link"].'">&larr; '.$result["previous"]["text"].'</a></div>';
	}
	if(! empty($result["next"]))
	{
		echo '<div class="next_link"><a href="'.BASE_PATH_HREF.$result["next"]["link"].'">'.$result["next"]["text"].' &rarr;</a></div>';
	}
	echo '</div>';
}

//вывод комментариев ко всей категории товаров (комментарии к конкретному товару в функции id())
if(! empty($result["comments"]))
{
	echo $result["comments"];
}

if(empty($result["ajax"]))
{
	echo '</div>';
}
*/