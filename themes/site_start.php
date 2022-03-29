<?php
/**
 * Шаблон стартовой страницы сайта
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
<insert name="show_css" files="fonts.css, animista.css, lightbox.min.css, default.css, bootstrap.min.css, custom.css, font-awesome.min.css, slick.css, slick-theme.css, animate.min.css, animista.css,  style.css">

</head>

<body>

	<insert name="show__header">
		<main>
			<div class="wrapper">
			<div class="content">
					<div class="mainslider">
						<div class="mainslider__container">
						<div class="container">
							<div class="mainslider__slider">							
								<insert name="show_block" module="bs" count="20" cat_id="1" template="mainslider">
							</div>
							<div class="mainslider__arrows">
								<div class="mainslider__left">
									<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="30" cy="30" r="30" fill="white"/>
									<path d="M24.3351 28.6806L33.6803 19.3355C33.8965 19.1192 34.185 19 34.4927 19C34.8003 19 35.0889 19.1192 35.305 19.3355L35.9932 20.0235C36.441 20.4719 36.441 21.2005 35.9932 21.6482L28.1458 29.4956L36.0019 37.3518C36.2181 37.5681 36.3374 37.8565 36.3374 38.164C36.3374 38.4718 36.2181 38.7602 36.0019 38.9766L35.3137 39.6645C35.0974 39.8808 34.809 40 34.5014 40C34.1937 40 33.9052 39.8808 33.689 39.6645L24.3351 30.3109C24.1184 30.0939 23.9994 29.8042 24.0001 29.4962C23.9994 29.187 24.1184 28.8974 24.3351 28.6806Z" fill="#CACEDC"/>
									</svg>

								</div>
								<div class="mainslider__right">
									<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="30" cy="30" r="30" transform="rotate(-180 30 30)" fill="white"/>
									<path d="M35.6645 31.3194L26.3192 40.6645C26.103 40.8808 25.8145 41 25.5069 41C25.1992 41 24.9107 40.8808 24.6945 40.6645L24.0063 39.9765C23.5585 39.5281 23.5585 38.7995 24.0063 38.3518L31.8538 30.5044L23.9976 22.6482C23.7814 22.4319 23.6621 22.1435 23.6621 21.836C23.6621 21.5282 23.7814 21.2398 23.9976 21.0234L24.6858 20.3355C24.9021 20.1192 25.1905 20 25.4981 20C25.8058 20 26.0943 20.1192 26.3105 20.3355L35.6645 29.6891C35.8811 29.9061 36.0001 30.1958 35.9994 30.5038C36.0001 30.813 35.8811 31.1026 35.6645 31.3194Z" fill="#CACEDC"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br/><br/>
				<div class="services">
					<div class="container">
						<h2>Наши услуги</h2>
						
					

						
						
						<div class="services__items">
							<div class="row">
									<insert name="show_category" module="shop" images="1">
								<div class="col-md-8 col-sm-12 col-xs-12">
									<div class="services__banner"><a href=""><img src="/images/img1.png" alt=""></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="maintext">
					<div class="container">
						<div class="row">
							<div class="col-md-5 col-sm-4 col-xs-12">
								<div class="maintext__image"><img src="/images/img2.png" alt=""></div>
							</div>
							<div class="col-md-7 col-sm-8 col-xs-12">
								<div class="maintext__content">
									<div class="maintext__title">Колонка главного врача</div>
									<div class="maintext__subtitle">Печерская Галина Анатольевна -заслуженный врач РТ, врач высшей категории.</div>
									<div class="maintext__text">Уважаемые пациенты! Мы рады приветствовать вас на страницах нашего сайта, где Вы можете найти общую информацию о Центре Семейной Медицины и видах предоставляемой медицинской помощи.<br/>
Наши врачи – это высококвалифицированные специалисты, обладающие многолетним практическим опытом работы.<br/>
Помните! Своевременная профилактика, диагностика и лечение заболеваний поможет вам сохранить здоровье на долгие годы.<br/>
Берегите себя и своих близких!</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<insert name="show_block" module="shop" count="100" images="1" template="slider">
				
			<!--	<div class="teamblock">
					<div class="container">
						<h3>Специалисты клиники</h2>
					</div>	
						
						<div class="teamblock__container">
						<div class="container">
							<div class="teamblock__slider">
								<div class="teamblock__slide">
									<div class="teamblock__item">
										<div class="teamblock__wrappwe">
											<div class="teamblock__content">
												<div class="teamblock__link"><a href="">
														<div class="teamblock__name">Москова Наталья Валентиновна</div>
														<div class="teamblock__text">Врач УЗИ</div>
														<div class="teamblock__img"><img src="/images/spec1.png" alt=""></div>
													</a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="teamblock__slide">
									<div class="teamblock__item">
										<div class="teamblock__wrappwe">
											<div class="teamblock__content">
												<div class="teamblock__link"><a href="">
														<div class="teamblock__name">Юсупов Рустам Равильевич</div>
														<div class="teamblock__text">Врач УЗДГ</div>
														<div class="teamblock__img"><img src="/images/spec2.png" alt=""></div>
													</a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="teamblock__slide">
									<div class="teamblock__item">
										<div class="teamblock__wrappwe">
											<div class="teamblock__content">
												<div class="teamblock__link"><a href="">
														<div class="teamblock__name">Нестерова Светлана Павловна</div>
														<div class="teamblock__text">Врач терапевт</div>
														<div class="teamblock__img"><img src="/images/spec3.png" alt=""></div>
													</a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="teamblock__slide">
									<div class="teamblock__item">
										<div class="teamblock__wrappwe">
											<div class="teamblock__content">
												<div class="teamblock__link"><a href="">
														<div class="teamblock__name">Москова Наталья Валентиновна</div>
														<div class="teamblock__text">Врач УЗИ</div>
														<div class="teamblock__img"><img src="/images/spec1.png" alt=""></div>
													</a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="teamblock__slide">
									<div class="teamblock__item">
										<div class="teamblock__wrappwe">
											<div class="teamblock__content">
												<div class="teamblock__link"><a href="">
														<div class="teamblock__name">Юсупов Рустам Равильевич</div>
														<div class="teamblock__text">Врач УЗДГ</div>
														<div class="teamblock__img"><img src="/images/spec2.png" alt=""></div>
													</a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="teamblock__slide">
									<div class="teamblock__item">
										<div class="teamblock__wrappwe">
											<div class="teamblock__content">
												<div class="teamblock__link"><a href="">
														<div class="teamblock__name">Нестерова Светлана Павловна</div>
														<div class="teamblock__text">Врач терапевт</div>
														<div class="teamblock__img"><img src="/images/spec3.png" alt=""></div>
													</a></div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
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
				</div>-->
				
				<div class="contactsblock">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="contactsblock__item">
									<h3>Контакты</h3>
									<div class="contactsblock__address">423520, р. Татарстан, г. Заинск, <br/>ул. Энергетиков, д. 12, помещение Н</div>
									<div class="contactsblock__trb">
										<div class="contactsblock__trbx">
											<div class="contactsblock__phones">
												<div class="contactsblock__phone1"><insert name="show_block" module="site" id="1"></div>
												<div class="contactsblock__phone2"><insert name="show_block" module="site" id="2"></div>
											</div>
										</div>
										<div class="contactsblock__trbx">
											<div class="contactsblock__socials">
											<!--	<a href=""><svg width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.96583 6.1882C9.99952 6.14967 10.157 6.02379 10.7756 6.02379L12.8037 6.02303C13.4635 6.02303 14 5.47905 14 4.81033V1.21765C14 0.550079 13.4642 0.00610352 12.8056 0.00495908L9.79307 0C7.93378 0 6.3532 0.621605 5.2222 1.79787C4.09627 2.96879 3.50103 4.60339 3.50103 6.52466V8.46233H1.19649C0.53671 8.46233 0 9.00631 0 9.67503V13.5443C0 14.213 0.53671 14.757 1.19649 14.757H3.50103V23.7873C3.50103 24.456 4.03774 25 4.69753 25H8.64758C9.30736 25 9.84407 24.456 9.84407 23.7873V14.7572H12.661C13.3208 14.7572 13.8574 14.213 13.8574 13.5447L13.8589 9.67522C13.8589 9.23595 13.6231 8.8295 13.2433 8.61454C13.0673 8.51498 12.8626 8.46233 12.6515 8.46233H9.84407V6.9315C9.84407 6.43253 9.91032 6.25191 9.96583 6.1882Z" fill="#D2D3DA"/>
</svg>
</a>
												<a href="">
												<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.0066 0H6.68335C2.99809 0 0 2.99809 0 6.68335V18.0068C0 21.6919 2.99809 24.69 6.68335 24.69H18.0068C21.6919 24.69 24.69 21.6919 24.69 18.0068V6.68335C24.69 2.99809 21.6919 0 18.0066 0V0ZM12.345 19.096C8.62242 19.096 5.59401 16.0675 5.59401 12.345C5.59401 8.62242 8.62242 5.59401 12.345 5.59401C16.0675 5.59401 19.096 8.62242 19.096 12.345C19.096 16.0675 16.0675 19.096 12.345 19.096ZM19.2574 7.18611C18.1573 7.18611 17.2626 6.29135 17.2626 5.19127C17.2626 4.0912 18.1573 3.19625 19.2574 3.19625C20.3575 3.19625 21.2524 4.0912 21.2524 5.19127C21.2524 6.29135 20.3575 7.18611 19.2574 7.18611Z" fill="#D2D3DA"/>
<path d="M12.345 7.04138C9.4208 7.04138 7.0415 9.42049 7.0415 12.3449C7.0415 15.2692 9.4208 17.6485 12.345 17.6485C15.2695 17.6485 17.6486 15.2692 17.6486 12.3449C17.6486 9.42049 15.2695 7.04138 12.345 7.04138Z" fill="#D2D3DA"/>
<path d="M19.2574 4.64392C18.9556 4.64392 18.71 4.88955 18.71 5.19132C18.71 5.49309 18.9556 5.73872 19.2574 5.73872C19.5593 5.73872 19.805 5.49328 19.805 5.19132C19.805 4.88937 19.5593 4.64392 19.2574 4.64392Z" fill="#D2D3DA"/>
</svg>
</a>
												<a href=""><svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M22.4312 4.98769C23.4479 4.27692 24.3031 3.38974 25 2.36821V2.36718C24.0698 2.76821 23.0802 3.03487 22.0469 3.1641C23.1094 2.53949 23.9208 1.55795 24.3021 0.375385C23.3115 0.956923 22.2177 1.36718 21.0521 1.59692C20.1115 0.610256 18.7708 0 17.3083 0C14.4708 0 12.1865 2.26769 12.1865 5.04718C12.1865 5.44718 12.2208 5.8318 12.3052 6.19795C8.04479 5.99282 4.27396 3.98256 1.74062 0.918974C1.29896 1.67487 1.03854 2.53949 1.03854 3.46974C1.03854 5.21744 1.95208 6.76615 3.31562 7.66359C2.49167 7.64821 1.68437 7.41231 1 7.04205V7.09744C1 9.54974 2.77604 11.5867 5.10625 12.0564C4.68854 12.1692 4.23438 12.2226 3.7625 12.2226C3.43437 12.2226 3.10312 12.2041 2.79271 12.1364C3.45625 14.1344 5.34167 15.6041 7.58125 15.6523C5.8375 16.9949 3.62292 17.8041 1.22604 17.8041C0.80625 17.8041 0.403125 17.7856 0 17.7354C2.27083 19.1764 4.96042 20 7.8625 20C16.9073 20 22.8021 12.5703 22.4312 4.98769Z" fill="#D2D3DA"/>
</svg>
</a>-->
											<a href="//vk.com/public66406430" target="_blank"><svg width="25" height="15" viewBox="0 0 25 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.4681 12.5642C24.4017 12.4531 23.9913 11.5612 22.0161 9.72797C19.9483 7.80833 20.2261 8.12004 22.7167 4.80079C24.2335 2.77929 24.84 1.5448 24.6502 1.01705C24.4696 0.513991 23.354 0.646699 23.354 0.646699L19.6443 0.668303C19.6443 0.668303 19.3696 0.631268 19.1644 0.753175C18.9653 0.873538 18.8372 1.1513 18.8372 1.1513C18.8372 1.1513 18.2493 2.71603 17.4654 4.0462C15.8127 6.85314 15.1507 7.00128 14.8807 6.8269C14.2526 6.42106 14.41 5.19428 14.41 4.32396C14.41 1.60344 14.822 0.46924 13.6061 0.176047C13.2018 0.0788299 12.9055 0.0140188 11.8731 0.00321697C10.5491 -0.0106711 9.42728 0.00784633 8.79306 0.318014C8.37024 0.524792 8.04464 0.986187 8.24371 1.01242C8.48906 1.04483 9.04459 1.1621 9.33932 1.56331C9.72047 2.08026 9.70659 3.24377 9.70659 3.24377C9.70659 3.24377 9.92571 6.44575 9.19581 6.84388C8.6943 7.11701 8.00761 6.55994 6.53393 4.01225C5.77934 2.70831 5.20838 1.26549 5.20838 1.26549C5.20838 1.26549 5.09882 0.996988 4.90284 0.853478C4.6652 0.679105 4.33189 0.623553 4.33189 0.623553L0.804312 0.645156C0.804312 0.645156 0.27502 0.660588 0.0805869 0.890513C-0.0922429 1.09575 0.0666988 1.51856 0.0666988 1.51856C0.0666988 1.51856 2.82889 7.97962 5.95526 11.2371C8.82392 14.2231 12.0799 14.0271 12.0799 14.0271H13.5551C13.5551 14.0271 14.0011 13.9777 14.2279 13.7324C14.4378 13.5071 14.4301 13.0843 14.4301 13.0843C14.4301 13.0843 14.4008 11.1044 15.3205 10.8128C16.2263 10.5258 17.3898 12.7263 18.6227 13.5734C19.5548 14.2138 20.2631 14.0734 20.2631 14.0734L23.5607 14.0271C23.5607 14.0271 25.286 13.9206 24.4681 12.5642Z" fill="#D2D3DA"/>
</svg>
</a>
											</div>
										</div>
									</div>
									<div class="contactsblock__email"><a href="mailto:ooodeko@mail.ru">ooodeko@mail.ru</a></div>
									<div class="contactsblock__callback">
										<div class="contactsblock__button"><a href="#myModal2" data-toggle="modal" class="btn btn_main">Задать вопрос</a></div>
										<div class="contactsblock__text">Всегда рады помочь!</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="contactsblock__item">
									<div class="contactsblock__map">
										<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7095bc8b25fb2cb0fe2caabf774a6ca09e3d083222fec8892c23e88087595315&amp;source=constructor" width="100%" height="410" frameborder="0"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
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
