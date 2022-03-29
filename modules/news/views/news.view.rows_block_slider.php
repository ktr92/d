<?php
/**
 * Шаблон элементов в списке новостей
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

if(empty($result['rows'])) return false;

?>
<? /*
<pre><? print_r($result) ?></pre>
*/ ?>



					
				


<div class="portfolio">

	<div class="portfolioslider-container">
	<div class="portfolioslider">
	<? //вывод списка новостей
		foreach ($result["rows"] as $row)
		{	 ?>
		<div class="portfolioslide">
			<div class="card">
				<div class="card__img"><a data-item="btn-<?='data-item-'.$row["id"];?>" data-toggle="modal" data-target="#exampleModal"><? echo '<img src="'.$row["img"][0]["src"].'"  class="card-img-top">' ?></a></div>
				<div class="card-body">
					<h4 class="card-title"><a data-item="btn-<?='data-item-'.$row["id"];?>" data-toggle="modal" data-target="#exampleModal"><?=$row["name"]; ?></a></h4>
					<div class="card__link"><a data-item="btn-<?='data-item-'.$row["id"];?>" data-toggle="modal" data-target="#exampleModal">Подробнее</a></div>
				</div>
			</div>
		</div>
						
		
		<? } ?>
		
		</div>
		
		<div class="portfolioslider__arrows">
			<div class="portfolioslider__left"><span><img src="/images/left-white.png" alt=""></span></div>
			<div class="portfolioslider__right"><span><img src="/images/right-white.png" alt=""></span></div>
		</div>
						
		</div>				
	<!-- Modal -->
			<div class="modal fade modal_cards" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				 aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">						
						<div class="modal-body">
							<ul class="nav nav-tabs d-none" id="myTab" role="tablist">
								<? $numtab = 0;
									foreach ($result["rows"] as $row)
									{	 
									if ($numtab==0) {?> 
							
								<li class="nav-item">
									<a class="nav-link active" id="btn-data-item-<?=$row["id"];?>" data-toggle="tab" href="#<?='data-item-'.$row["id"];?>" role="tab"
									   aria-controls="home" aria-selected="true">Home</a>
								</li>
								
									<? } else { ?>
									
									<li class="nav-item">
									<a class="nav-link " id="btn-data-item-<?=$row["id"];?>" data-toggle="tab" href="#<?='data-item-'.$row["id"];?>" role="tab"
									   aria-controls="home" aria-selected="true">Home</a>
								</li>
									
									<? } 
									$numtab = $numtab + 1;
									}?>
							</ul>
							<div class="tab-content">
							
								<? //вывод списка новостей
								$count = 0;
								foreach ($result["rows"] as $row)
								{	 ?>
								<? if ($count==0) { ?> <div class="tab-pane fade show active" id="<?='data-item-'.$row["id"];?>" role="tabpanel" aria-labelledby="home-tab"> <?  ?>
								<? } else { ?> <div class="tab-pane fade show" id="<?='data-item-'.$row["id"];?>" role="tabpanel" aria-labelledby="home-tab"> <? } ?>
									<div class="inmodal">
										<div class="inmodal__item">
											<div class="inmodal__items">
												<div class="inmodal__left">
													<div class="inmodal__photo">
														<div class="inmodal__slidercontainer">
															<div class="inmodal__slider inmodal__sliderto">
															
																<? $numimage = 0;
																
																if (! empty($row["img"]))
																{	
																	
																	foreach ($row["img"] as $img)
																	{	
																		if ($numimage > 0) {
																		echo '<div class="inmodal__slide">';																			
																		echo '<img src="'.$img["src"].'">';
																		echo '</div>';
																		}	
																		$numimage = $numimage + 1;
																		
																	}
																	
																}	?>
																
															</div>
															<div class="inmodal__arrows">
																<div class="inmodal__arrow inmodal__arrow_left"><img src="/images/inmodal-left.png" alt=""></div>
															
																<div class="inmodal__arrow inmodal__arrow_right"><img src="/images/inmodal-right.png" alt=""></div>
															</div>
														</div>
														
													</div>
												</div>
												<div class="inmodal__right">
													<div class="inmodal__content">
														<div class="inmodal__textcontent">
															<div class="inmodal__caption">Название</div>
															<div class="inmodal__title"><?=$row['name'];?></div>
														</div>
														<div class="inmodal__textcontent">
															<div class="inmodal__caption">Описание</div>
															<div class="inmodal__text"><?=$row['anons']?></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								
								<? $count = $count + 1;} ?>
								


						</div>
						<div class="modal-footer">

							<button type="button" class="inmodal-left">
								Предыдущая работа
							</button>
							<button type="button" class="inmodal-right">
								Следующая работа
							</button>


						</div>
					</div>
				</div>
			</div>
</div>
</div>
<?
/* 
//вывод списка новостей
foreach ($result["rows"] as $row)
{		           
	echo '<div class="news block">';

	//вывод изображений новости
	if (! empty($row["img"]))
	{			
		foreach ($row["img"] as $img)
		{
			switch($img["type"])
			{
				case 'animation':
					echo '<a href="'.BASE_PATH.$img["link"].'" data-fancybox="gallery'.$row["id"].'news" class="block-row-img">';
					break;
				case 'large_image':
					echo '<a href="'.BASE_PATH.$img["link"].'" rel="large_image" width="'.$img["link_width"].'" height="'.$img["link_height"].'" class="block-row-img">';
					break;
				default:
					echo '<a href="'.BASE_PATH_HREF.$img["link"].'" class="block-row-img">';
					break;
			}
			echo '<img src="'.$img["src"].'" width="'.$img["width"].'" height="'.$img["height"].'" alt="'.$img["alt"].'" title="'.$img["title"].'">'
			.'</a> ';
		}			
	}

	echo '<div class="block-text">';
		   
		//вывод названия и ссылки на новость
		echo '<h4>';
			echo '<a href="'.BASE_PATH_HREF.$row["id"].'" class="black">'.$row["name"].'</a>';		
		echo '</h4>';

		//вывод рейтинга новости за названием, если рейтинг подключен
		if (! empty($row["rating"]))
		{
			echo '<div class="news_rating rate"> ' .$row["rating"] . '</div>';
		}

		//вывод анонса новостей
		if(! empty($row["anons"]))
		{
			echo '<div class="news_anons anons">'.$row['anons'].'</div>';
		}

		//вывод даты новости
		if (! empty($row['date']))
		{
			echo '<div class="news_date date">'.$row["date"]."</div>";
		}		

		//вывод прикрепленных тегов к новости
		if(! empty($row["tags"]))
		{
			echo $row["tags"];
		}		

		echo '</div>';

	echo '</div>';
}
 */
