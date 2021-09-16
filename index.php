<?php 
	require_once 'inc/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Наша библиотека MyLibrary предоставляет каждому читателю обширный выбор литературы по самым разным жанрам и направлениям! Заказывайте книги только у нас!">
	<title>MyLibrary - Библиотека</title>
	<link rel="stylesheet" href="css/fontawesome.css">
	<link rel="stylesheet" href="libs/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/icons/icon.ico">
</head>
<body>
	<?php include 'inc/header.php'; ?>
	<section class="header-bottom">
		<div class="container">
			<div>
				<h1 class="title title-main">Библиотека “MyLibrary”</h1>
				<p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Возвращайся, агентство грамматики коварных ее она взобравшись над маленькая точках, не пояс предупреждал прямо страну свое деревни моей, рыбного свой.</p>
				<a href="#" class="arrow"><i class="fas fa-chevron-down"></i></a>
			</div>
		</div>
    </section>
	<section id="about-section">
		<div class="container">
			<div class="about">
				<h2 class="title title-about">О нас</h2>
				<div>
					<p>Далеко-далеко за словесными горами в стране гласных, и согласных живут рыбные тексты. Страна дорогу они скатился лучше жаренные составитель безорфографичный, заглавных от всех однажды имени пустился щеке речью грамматики назад себя раз взгляд там образ рукопись букв языком lorem! Меня которое над свое путь снова залетают, запятых переписали мир первую пустился послушавшись злых скатился образ запятой строчка всемогущая гор, языкового однажды силуэт выйти, реторический дал но. Большой великий предупреждал грустный вскоре ручеек текстов решила пунктуация они последний буквоград пор домах собрал всемогущая меня, власти грамматики ее живет толку, вдали безопасную пустился эта переулка курсивных. Семантика ему продолжил океана свой она ты образ если. Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Ручеек напоивший буквоград собрал коварный. Даль своего океана ты, раз жизни букв, предложения сбить подзаголовок моей грустный, вопроса большого знаках.</p>
					<img src="img/picture.webp" alt="Книги">
				</div>
			</div>
		</div>
	</section>
	<section id="assortment-section" class="assortment">
		<div class="container">
			<h2 class="title title-assortment">Книги в наличии</h2>
			<div class="books" itemscope itemtype="https://schema.org/OfferCatalog">
			<?php 
				$sql = "SELECT * FROM assortment";
				$result = mysqli_query($connect, $sql);
				if($result){
					$rows = mysqli_num_rows($result);
					for($i = 0; $i < $rows; $i++){
						$row = mysqli_fetch_assoc($result);
						echo
						'<div class="book">
							<img itemprop="image" src="img/books/' . $row['image'] . '" alt="' . $row['title'] . '">
							<h3 itemprop="name" class="title title-book">' . $row['title'] . '</h3>
							<a itemprop="url" href="pages/book.php?id=' . $row['id'] . '" class="look-btn">Посмотреть</a>
						</div>';
					}
				}
			?>
			</div>
		</div>
	</section>
	<section class="section-personal">
		<div class="container swiper-container">
			<h2 class="title title-personal">Персонал</h2>
			<div class="personal swiper-wrapper">
			<?php 
				$sql = "SELECT * FROM workers";
				$result = mysqli_query($connect, $sql);
				if($result){
					$rows = mysqli_num_rows($result);
					for($i = 0; $i < $rows; $i++){
						$row = mysqli_fetch_assoc($result);
						echo
						'<div class="swiper-slide">
							<div class="worker" itemscope itemtype="https://schema.org/SocialMediaPosting">
								<img width="150" class="worker-img" src="img/workers/' . $row['photo'] . '" alt="' . $row['firstName'] . " " . $row['lastName'] . '">
								<h3 class="title title-worker">' . $row['lastName'] . " " . $row['firstName'] . '</h3>
								<p class="phone"><i class="fas fa-phone-alt"></i>' . $row['telephone'] . '</p>
								<p class="social"><i class="fab fa-vk"></i><a href="' . $row['vkontakte'] . '" target="_blank" itemprop="url">ВКонтакте</a>
								<p class="worker-description">' . $row['description'] . '</p>
							</div>
						</div>';
					}
				}
			?>
			</div>
			<div class="swiper-pagination"></div>
    		<div class="swiper-button-prev"></div>
    		<div class="swiper-button-next"></div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="subscribe">
				<h2 class="title title-subscribe">Подписаться на рассылку</h2>
				<form class="subscribe-form">
					<input class="email-input" type="email" placeholder="Ваш e-mail">
					<input class="subscribe-btn" type="submit" value="Подписаться">
				</form>
			</div>
		</div>
	</section>
	<?php include 'inc/footer.php'; ?>
	<script src="libs/swiper/swiper-bundle.js"></script>
	<script src="js/main.js"></script>
</body>
</html>