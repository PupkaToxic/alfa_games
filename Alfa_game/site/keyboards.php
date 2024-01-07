<?php
require_once 'config/connect.php';

session_start(); /* Проверка сессии пользователя */
if (!$_SESSION['user']) {
	header('Location: autoris.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha game</title>
	<link rel="stylesheet" href="css/keyboardss.css">
</head>
<body>
	<div class="main_grid">
		<header>
			<a href="config/logout.php">Выйти</a>
			<a href="contacts.php">Контакты</a>
			<a href="pay.php">Оплата</a>
			<a href="delivery.php">Доставка</a>
			<a href="articles.php">Статьи</a>
			<a href="orders.php">История заказов</a>
		</header>

		<nav>
			<a href="main.php"><div class="img_logo"></div></a>
			<a href="basket.php"><div class="basket_img"></div></a>
			<a href="comps.php">игровые компьютеры</a>
			<a href="laptop.php">игровые ноутбуки</a>
			<a href="choose.php">аксессуары и периферия</a>
		</nav>

		<main>

			<h2>Игровые клавиатуры</h2>

			<div class="parent">
				<?php

					$products = mysqli_query($link, query:"SELECT *  FROM `products` WHERE `category_id` = '5'"); /* Выборка элементов из базы данных */
					$products = mysqli_fetch_all($products);
					foreach ($products as $products) {
				?>
				<div class="div">
					<p>Игровая Клавиатура</p>
					<img class="img" src="css/img_keyboard/<?= $products[8] ?>.png" alt="">

					<h2><?= $products[1] ?></h2>
					<p class="p"><?= $products[2] ?></p>
					<p class="price">От <?= $products[3] ?> Р</p>
					<button><a href="detail_keyboards.php?id=<?= $products[0] ?>">Подробнее</a></button>
				</div>

				<?php
					}

				?>
			</div>

			<h2 class="h">Часто задаваемые вопросы</h2>

			<div class="red_line"><p>Куда осуществляется доставка?</p></div>
			<div class="red_line"><p>Как можно оплатить заказ?</p></div>
			<div class="red_line"><p>Сколько длится гарантия на игровой компьютер</p></div>
			<div class="red_line"><p>Сколько времени займет сборка моего компьютера</p></div>

			<h2>Ищете что-то иное?</h2>

			<div class="parent-2">
				<div class="img-12"></div>
				<div class="img-13"></div>
				<div class="img-14"></div>

				<div class="block">
					<a href="comps.php"><h3>Компактные<br>Игровые компьютеры</h3></a>
					<p>Серия компактных, но мощных<br> игровых компьютеров </p>
				</div>
				<div class="block">
					<a href="comps.php"><h3>Профессиональные<br> игровые компьютеры</h3></a>
					<p>Серия профессиональных компьютеров для<br> представителей творческих профессий</p>
				</div>
				<div class="block">
					<a href="comps.php"><h3>Игровые компьютеры<br> Poweres by MSI</h3></a>
					<p>Серия игровых компьютеров на<br> комплектующих от MSI</p>
				</div>
			</div>
		</main>

		<footer>
			<div>
				<a href=""><h3>Социальные медиа</h3></a>
				<a href=""><p>Whatsapp</p></a>
				<a href=""><p>VK</p></a>
				<a href=""><p>Instagram</p></a>
			</div>
			<div>
				<a href=""><h3>Поддержка</h3></a>
				<a href=""><p>Форум</p><a href=""></a>
				<a href=""><p>Помощь</p></a>
				<a href=""><p>Отзывы</p></a>
			</div>
			<div>
				<a href=""><h3>Компания</h3></a>
				<a href=""><p>О нас</p></a>
				<a href=""><p>Контакты</p></a>
				<a href=""><p>Пресса</p></a>
			</div>

			<div class="line"></div>

			<div class="link">
				<a href="" class="txt-link">Авторские права</a>
				<a href="" class="txt-link">Условия использования</a>
				<a href="" class="txt-link">Конфиденциальность</a>
			</div>
		</footer>
	</div>
</body>
</html>