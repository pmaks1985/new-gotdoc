<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?$APPLICATION->ShowHead()?>
	<title>
		<?$APPLICATION->ShowTitle()?>
	</title>
	<?
		use Bitrix\Main\Page\Asset;
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.5.1.min.js");
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
		// $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/popper.min.js" );
		// $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap.min.js" );
	?>
	<? 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap.min.css");
		Asset::getInstance()->addString("<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css'>");
		// $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css");
	?>
</head>

<body>
	<?$APPLICATION->ShowPanel();?>

	<div class="container">
		<header>
			<div class="align-items-center banner">
			</div>
			<div class="d-flex justify-content-between">
				<div>
					<nav class="navbar navbar-expand-lg p-0">
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item mr-4">
									<a class="nav-link nav-link_menu pl-0" href="#">О компании</a>
								</li>
								<li class="nav-item mr-4">
									<a class="nav-link nav-link_menu" href="#">Доставка и оплата</a>
								</li>
								<li class="nav-item mr-4">
									<a class="nav-link nav-link_menu" href="#">Гарантии</a>
								</li>
								<li class="nav-item mr-4">
									<a class="nav-link nav-link_menu" href="#">Статьи</a>
								</li>
								<li class="nav-item mr-4">
									<a class="nav-link nav-link_menu" href="#">Акции</a>
								</li>
								<li class="nav-item mr-4">
									<a class="nav-link nav-link_menu" href="#">Контакты</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<div>
					<div class="d-flex mt-2 select-region">
						<div class="mr-3">
							<span class="select-region_text">Ваш регион:</span>
							<span class="select-region_city">
								<span class="dottedUnderline">Москва</span><i class="bi bi-caret-down-fill"></i>
							</span>
						</div>
						<div>
							<a href="#" class="btn-outline-danger select-region_button text-decoration-none">Войти</a>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-between mt-3">
				<div>
					<div class="site-name">Готовые документы</div>
					<div class="site-name_explanation">Автоматизированный помощник для подготовки к проектам</div>
				</div>
				<div class="text-right">
					<img class="mr-1" src="/bitrix/templates/new-gotdoc/img/phone.png" alt="phone"><a class="phone text-decoration-none" href="tel:+78005504908">8 (800) 550-49-08</a>
					<div class="opening-hours">пн-вс: 06:00 - 21:00</div>
				</div>
			</div>
			<div class="d-flex justify-content-between mt-3">
				<div class="d-flex">
					<div class="dropdown">
						<a class="catalog_btn d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdownMenuLink" aria-haspopup="true" data-toggle="dropdown" aria-expanded="true">
							<img class="p-3" src="/bitrix/templates/new-gotdoc/img/catalog.png" alt="catalog">
							<div>Каталог документов</div>
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li class="dropdown-submenu">
								<a class="dropdown-item dropdown-toggle d-flex align-items-center justify-content-between" href="#">
									<div class="text-normal">Образовательные организации</div><i class="bi bi-chevron-right"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item font-weight-bold" href="#">Детский сад</a>
									</li>
									<ul class="pl-3">
										<li class="dropdown-submenu dropdown-item_li">
											<a class="dropdown-item dropdown-toggle d-flex align-items-center justify-content-between" href="#">Пожарная безопасность<i class="bi bi-chevron-right"></i></a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Готовые документы по ПБ</a></li>
												<li><a class="dropdown-item" href="#">Декларация ПБ</a></li>
												<li><a class="dropdown-item" href="#">Формы документов</a></li>
											</ul>
										</li>
										<li class="dropdown-item_li"><a class="dropdown-item" href="#">Первая помощь</a>
										</li>
									</ul>
									<li><a class="dropdown-item font-weight-bold" href="#">Детский лагерь</a>
									</li>
									<li><a class="dropdown-item font-weight-bold" href="#">Школа</a></li>
									<li><a class="dropdown-item font-weight-bold" href="#">Техникум</a></li>
									<li><a class="dropdown-item font-weight-bold" href="#">Коледж</a></li>
									<li><a class="dropdown-item font-weight-bold" href="#">Лицей</a></li>
									<li><a class="dropdown-item font-weight-bold" href="#">Университет</a>
									</li>
									<li><a class="dropdown-item font-weight-bold" href="#">Институт</a></li>
									<li><a class="dropdown-item font-weight-bold" href="#">Организация ДПО</a>
									</li>
									<li><a class="dropdown-item font-weight-bold" href="#">Автошкола</a></li>
								</ul>
							</li>
							<li class="dropdown-submenu"><a class="dropdown-item">
									<div class="text-normal">Объекты размещения</div>
								</a></li>
							<li class="dropdown-submenu"><a class="dropdown-item">
									<div class="text-normal">Производственные предприятия</div>
								</a>
							</li>
							<li class="dropdown-submenu"><a class="dropdown-item">
									<div class="text-normal">Административные здания</div>
								</a></li>
							<li class="dropdown-submenu"><a class="dropdown-item">
									<div class="text-normal">Торговые организации</div>
								</a></li>
							<li class="dropdown-submenu"><a class="dropdown-item">
									<div class="text-normal">Офисные здания</div>
								</a></li>
							<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle d-flex align-items-center justify-content-between" href="#">
									<div class="text-normal">Спортивные организации</div><i class="bi bi-chevron-right"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item font-weight-bold" href="#">Детский сад</a>
									</li>
									<ul class="pl-3">
										<li class="dropdown-submenu dropdown-item_li">
											<a class="dropdown-item dropdown-toggle d-flex align-items-center justify-content-between" href="#">Пожарная безопасность<i class="bi bi-chevron-right"></i></a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="#">Готовые документы по ПБ</a></li>
												<li><a class="dropdown-item" href="#">Декларация ПБ</a></li>
												<li><a class="dropdown-item" href="#">Формы документов</a></li>
											</ul>
										</li>
										<li class="dropdown-item_li"><a class="dropdown-item" href="#">Первая помощь</a>
										</li>
									</ul>
									<li><a class="dropdown-item font-weight-bold" href="#">Детский лагерь</a>
									</li>
									<li><a class="dropdown-item font-weight-bold" href="#">Школа</a></li>
									<li><a class="dropdown-item font-weight-bold" href="#">Техникум</a></li>
									<li><a class="dropdown-item font-weight-bold" href="#">Коледж</a></li>
									<li><a class="dropdown-item font-weight-bold" href="#">Лицей</a></li>
									<li><a class="dropdown-item font-weight-bold" href="#">Университет</a>
									</li>
									<li><a class="dropdown-item font-weight-bold" href="#">Институт</a></li>
									<li><a class="dropdown-item font-weight-bold" href="#">Организация ДПО</a>
									</li>
									<li><a class="dropdown-item font-weight-bold" href="#">Автошкола</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div>
						<nav class="navbar py-0">
							<form class="form-inline">
								<input class="form-control form-control_input" type="search" placeholder="Введите название документа" aria-label="Введите название документа">
								<button class="search_btn" type="submit"></button>
							</form>
						</nav>
					</div>
				</div>
				<div class="btn backet d-flex align-items-center">
					<img class="pr-3" src="/bitrix/templates/new-gotdoc/img/backet.png" alt="backet">
					<span class="backet_text">Корзина пуста</span>
				</div>
			</div>
		</header>