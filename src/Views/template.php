<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><? echo $title?></title>
	<link rel="stylesheet" href="/static/css/template.css">
	<link rel="stylesheet" href="/static/css/page1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="/static/js/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="/static/js/immersive-slider-master/jquery.immersive-slider.js"></script>
  <link href='/static/css/immersive-slider.css' rel='stylesheet'>
  <link rel="stylesheet" href="/static/css/page2.css">
  <link rel="stylesheet" href="/static/css/personal.css">
  <link rel="stylesheet" href="/static/css/registration.css">
</head>
<body class="wrapper">
	<div class="content">
	<header>
		<div class="contacts">
		<div class="flex container">
			<p class="game-page"> <a href="/">Главная страница</a> </p>
			<p class="game-page"><a href="/table" >График игр</a></p>
			<p class="address"><a href="">Адрес местоположения</a></p>
			<!-- узнать, как привязать геоданные -->
			<? if(isset($_SESSION['login'])):?>
			<p class="entry"><a class=address href="/personal">Личный кабинет</a> / <a class="registration" href="/logout">Выход</a></p>
			
			<?else:?>
			<p class="entry"><a class="entry1" href="#">Вход</a> / <a class="entry" href="/registration">Регистрация</a></p>
			 <?endif?>
		</div>
		</div>

		<div class="background1">
		<div class="up2 flex container">
			<div class="flex-1 logo">
				<img src="/static/img/logo1.jpg" alt="">
			</div>
			<div class="flex-2 name">Nastolkey.ru</div>
			<div class="flex-3">
				<input type="search" placeholder="Поиск по сайту">
			</div>
			<? if($_SESSION['login'] == 'Admin'):?>
				<p><a class="registration" href="/admin">AdminPage</a></p>
			<?endif?>
	
		</div>
		</div>
	</header>



 <? include_once $content; ?>
	

	
	
	
</div>

	<footer class="flex  footer">
		<div class="foot border ">
			<div class="foot-head">О нас:</div>
			<div class="foot-nonhead"><a href="">Запись на игры</a></div>
			<div class="foot-nonhead"><a href="">Возможности</a></div>
		</div>
		<div class="foot border ">
			<div class="foot-head">По играм</div>
			<div class="foot-nonhead"><a href="">Отзывы</a></div>
			<div class="foot-nonhead"><a href="">Форма записи</a></div>
		</div>
	</footer>
</body>
</html>