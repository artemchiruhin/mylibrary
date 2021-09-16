<?php
	require_once '../inc/connection.php';
	$sql = "SELECT * FROM assortment WHERE id=" . $_GET['id'];
	$result = mysqli_fetch_assoc(mysqli_query($connect, $sql));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyLibrary - <?= $result['title'] ?></title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/book.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="../img/icon.ico">
</head>
<body>
	<?php include '../inc/header.php'; ?>
	<section class="book-description">
		<div class="container">
			<?php
				echo 
				'<img src="../img/books/' . $result['image'] . '" alt="' . $result['title'] . '">
				<h3 class="title title-book">' . $result['title'] . '</h3>
				<p class="description">' . $result['description'] . '</p>';
			?>
		</div>
	</section>
	<section class="comments">
		<div class="container">
			<h2 class="comments-title">Комментарии</h2>
			<?php 
				$sql = "SELECT author, text FROM comments WHERE comments.book_id=" . $_GET['id'];
				$result = mysqli_query($connect, $sql);
				if($result){
					for($i = 0; $i < mysqli_num_rows($result); $i++){
						$row = mysqli_fetch_assoc($result);
						echo 
						'<div class="comment">
							<h3 class="comment-author">' . $row['author'] . '</h3>
							<p class="comment-body">' . $row['text'] . '</p>
						</div>';
					}
				}
			?>
			<form class="comment-form" action="<?= '../inc/commenthandler.php?id=' . $_GET['id']; ?>" method="post">
				<input type="text" placeholder="Ваше имя" name="name" autocomplete="off">
				<textarea placeholder="Ваш комментарий" name="comment"></textarea>
				<input type="submit" value="Отправить" class="comment-btn">
			</form>
		</div>
	</section>
	<?php include '../inc/footer.php'; ?>
</body>
</html>