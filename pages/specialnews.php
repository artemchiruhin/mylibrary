<?php 
	require_once '../inc/connection.php';
	$sql = "SELECT * FROM news WHERE id=" . $_GET['id'];
	$result = mysqli_fetch_assoc(mysqli_query($connect, $sql));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?= $result['meta_description']; ?>">
	<meta name="keywords" content="<?= $result['meta_keywords']; ?>">
	<title><?= "MyLibrary | " . $result['title']; ?></title>
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
			<h2 class="title title-news"><?= $result['title']; ?></h2>
			<div class="special-news">
				<img src="../img/news/<?= $result['image']; ?>" alt="<?= $result['title']; ?>">
				<p><?= $result['description']; ?></p>
			<a href="news.php" class="look-btn">Назад</a>
			<p class="pub-date"><i class="far fa-calendar-alt"></i><?= date("d.m.Y", strtotime($result['pubdate'])); ?></p>
			</div>
		</div>
	</section>
	<?php include '../inc/footer.php'; ?>
</body>
</html>