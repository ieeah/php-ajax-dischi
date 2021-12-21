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
	var_dump(__DIR__);
	include __DIR__ . '/../data/database.php';
	?>
	<!-- printing the cards -->
	<?php foreach ($database as $key => $value) : ?>
		<div>
			<div class="top">
				<img src="<?php echo $value['poster'] ?>" alt="">
			</div>
			<div class="bottom">
				<h5><?php echo $value['title'] ?></h5>
				<div><?php echo $value['author'] ?></div>
				<h6><?php echo $value['year'] ?> </h6>
				<div><?php echo $value['genre'] ?></div>
			</div>
		</div>
	<?php endforeach; ?>



</body>

</html>