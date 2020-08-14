<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Combatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">	
	<link rel="shortcut icon" href="../img/icon.png" type="image/png">
	<title>CloudsWorld</title>
</head>
<header>
<div class="top-header">
	<div class="d-flex flex-column flex-md-row align-items-center bg-202020">
		<nav class="my-0 mr-md-auto font-weight-normal">
			<a class="p-2 text-white font-weight-light" href="../pages/about.php">О компании</a>
			<a class="p-2 text-white font-weight-light" href="">Бренды</a>
			<a class="p-2 text-white font-weight-light" href="">Доставка</a>
			<a class="p-2 text-white font-weight-light" href="">Оплата</a>
			<a class="p-2 text-white font-weight-light" href="">Контакты</a>
		</nav>
		<?php 
		if (isset($_SESSION['username'])) {
			echo '<a id="login" class="mt-1 btn btn-outline-light " href="../users/logout.php">Выход</a>';
		} else {
			echo '<a id="login" class="mt-1 btn btn-outline-light " href="../users/login.php">Войти</a>';
		} ?>		
	</div> 
</div>	
	<div class="mid-header d-flex flex-column flex-md-row align-items-center">
		<div class="search">
			<div class="search-container">
		    	<form action="/action_page.php">
		      	<input type="text" placeholder="Поиск" name="search">
		    	</form>
		  	</div>
		</div>
		<div class="address">
			 <a class="p-2 text-dark" href="cart.php">Адреса магазинов</a>
		</div>
		<div class="logo">
			<a href="../index.php"><img src="../img/logo.jpg" alt="CloudsWorld"></a>
		</div>
		<div class="basket">
			<a class="p-2 text-dark" href="../pages/basket.php">Корзина</a>
		</div>
		<div class="number">
			<h4>+7 (495) 485-15-51</h4>
			<p class="info">Интернет-магазин работает <br>с 07:00 до 23:00 без выходных</p>
		</div>
	</div>
	<div class="menu">
		<nav>
			<a class="text-dark font-weight-bold" href="">Скидки</a>
			<a class="text-dark font-weight-bold" href="../pages/newitems.php">Новинки</a>
			<a class="text-dark font-weight-bold" href="../pages/podsystem.php">POD-системы</a>
			<a class="text-dark font-weight-bold" href="#">Жидкости</a>
			<a class="text-dark font-weight-bold" href="">Вейпы</a>
			<a class="text-dark font-weight-bold" href="">Атомайзеры</a>
			<a class="text-dark font-weight-bold" href="">Аксессуары</a>
		</nav>
	</div>
</header>
