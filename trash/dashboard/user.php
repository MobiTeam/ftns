<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
	<body>
		<div class="container main-wrapper no-padding">
			<?php require_once('user_header.php') ?>
			<div class="content">
				<?php require_once('user_main_page.php') ?>
			</div>	
			<?php require_once('user_footer.php') ?>
		</div>
		<?php require_once('user_scripts.php') ?>	
	</body>
</html>