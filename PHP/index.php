<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/style.css">
	<title>Document</title>
</head>

<body>
	<!-- including DB -->
	<?php
	include __DIR__ . '/../data/database.php';
	?>
	<header>
		<img src="../assets/logo.png" alt="">
	</header>
	<!-- printing the cards -->
	<div class="container">
		<?php foreach ($database as $key => $value) : ?>
			<div class="album">
				<div class="top">
					<img src="<?php echo $value['poster'] ?>" alt="">
				</div>
				<div class="bottom">
					<h5><?php echo $value['title'] ?></h5>
					<div class="author"><?php echo $value['author'] ?></div>
					<h6><?php echo $value['year'] ?> </h6>
					<div class="genre"><?php echo $value['genre'] ?></div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>




</body>

</html>