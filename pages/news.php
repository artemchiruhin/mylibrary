<?php
	require_once '../inc/connection.php';
	$sql = "SELECT * FROM news ORDER BY pubdate DESC";
	$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Новости нашей библиотеки MyLibrary">
	<meta name="keywords" content="Новости, новости библиотеки, библиотека MyLibrary">
	<title>MyLibrary - Новости</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/news.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="../img/icon.ico">
</head>
<body>
	<?php include '../inc/header.php'; ?>
	<section>
		<div class="container">
			<h2 class="title title-news">Новости</h2>
			<div class="news">
				<?php
					if($result){
						$rows = mysqli_num_rows($result);
						for($i = 0; $i < $rows; $i++){
							$row = mysqli_fetch_assoc($result);
							echo
							'<div class="news-item">
								<img height="100" src="../img/news/' . $row['image'] . '" alt="' . $row['title'] . '">
								<h3>' . $row['title'] . '</h3>
								<p>' . mb_substr(strip_tags($row['description']), 0, 60) . '...</p>
								<a href="specialnews.php?id=' . $row['id'] . '" class="look-btn">Подробнее</a>
								<p class="pub-date"><i class="far fa-calendar-alt"></i>' . date("d.m.Y", strtotime($row['pubdate'])) . '</p>
							</div>';
						}
					}
				?>
			</div>
		</div>
	</section>
	<?php include '../inc/footer.php'; ?>
</body>
</html>