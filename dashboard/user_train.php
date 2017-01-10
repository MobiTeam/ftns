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
	<link rel="stylesheet" type="text/css" href="../css/user.css">
</head>
	<body>
		<div class="container main-wrapper no-padding">
			
			<?php require_once('user_header.php') ?>
			<?php require_once('user_groups_menu.php') ?>
			<div class="content">
				<div class="user-groups">
					<h3 class="no-margin custom-title">Группы пользователя</h3>
					<table class='table'>
						<thead>
							<tr>
								<th>Наименование группы</th>
								<th>Описание</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>2</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
			<?php require_once('user_footer.php') ?>
		</div>
		<?php require_once('user_scripts.php') ?>	
	</body>
</html>