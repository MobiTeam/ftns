<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Панель администратора</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
</head>
	<body>
		<div class="container main-wrapper no-padding">

			<?php require_once('dashboard/user_header.php') ?>

			<div class="content">                
                <div class="panel-body">
                    <h3 class="no-margin custom-title">Личный профиль</h3>
                    <div class="row">
                        <div class="cols-xs-12 col-md-3 col-lg-3">
                            <img alt="Ваша фотография" title="Ваша фотография" src="/img/user-logo-256.png" class="img-circle img-responsive">
                        </div>
                        <div class=" col-md-9 col-lg-9">
                            <table class="table table-user-information">
                                <tr>
                                    <td>Логин:</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <td>ФИО:</td>
                                    <td>Иванов Иван Иванович</td>
                                </tr>
                                <tr>
                                    <td>Пол</td>
                                    <td>Мужской</td>
                                </tr>
                                <tr>
                                    <td>Телефон:</td>
                                    <td>+7 999 777 123 34</td>
                                </tr>
                                <tr>
                                    <td>Электронная почта:</td>
                                    <td>user@mail.ru</td>
                                </tr>
                            </table>
                            <form action="" method="POST" class="table-user-information-form" style="display: none">
                                <table class="table">
                                    <tr>
                                        <td>Логин:</td>
                                        <td>
                                            <input type="text" name="login" value="user" class="form-control" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ФИО:</td>
                                        <td>
                                            <input type="text" name="fullname" value="Иванов Иван Иванович" class="form-control" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Пол</td>
                                        <td>
                                            <select name="sex" class="form-control">
                                                <option value="0">Женский</option>
                                                <option value="1" selected>Мужской</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Телефон:</td>
                                        <td>
                                            <input type="text" name="phone" value="+7 999 777 123 34" class="form-control" />                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Электронная почта:</td>
                                        <td>
                                            <input type="text" name="mail" value="user@mail.ru" class="form-control" />                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button class="btn btn-success save-user-profile">
                                                Сохранить изменения
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <a href="#" class="btn btn-primary edit-user-profile">Редактировать</a>
                            <a href="#" class="btn btn-warning load-photo" disabled>Загрузить новую фотографию</a>                                

                        </div>
                    </div>
                </div>                                
            </div>	
			<div class="footer">
				Ugra-Fit - 2016
			</div>
		</div>
    <?php require_once('dashboard/user_scripts.php') ?>
	</body>
</html>