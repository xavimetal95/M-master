<!DOCTYPE html>
<html>
<head>                                                                                                 
	<title><?= $title; ?></title>
    <link rel="stylesheet"  type="text/css" href="<?= APP_W.'pub/css/m.css'; ?>">
    <script src="<?=APP_W.'pub/js/jquery.min.js'; ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="<?=APP_W.'pub/js/app.js'; ?>"></script>

</head>
<body>
	<header>
		<div class="logo">
			<img src="logo_wallawall.png"><h1><?= $title; ?></h1>
		</div>
		<?php
			if($_SESSION['islogged']!=TRUE)
			{
				echo '
			<div id="cuadro_login">
				<form class="login" method="post" action="'.APP_W.'home/login" >
					<label>Email</label><input type="text" name="email" id="login_email">
					<br>
					<label>Password</label><input type="password" name="password" id="login_pass">
					<br>
					<div class="botones">
						<input type="submit" value="Login" class="boton" id="boton_login">
					</div>
				</form>
				
				<form class="regis" method="post">
					<a class="boton" href="'.APP_W.'register">Registrate</a>
				</form>
			</div>';
		}else
		{
			echo'
			<div id="logeado">
				<a href="'.APP_W.'home/user_icon"><img src="http://image005.flaticon.com/1/svg/32/32438.svg" id="img_user"></a>
				<a href="'.APP_W.'home/logout"><img src="http://publicdomainvectors.org/photos/system-log-out.png" id="img_logout"></a>
			</div>';
		}
		?>
			
	</header>
	
	
