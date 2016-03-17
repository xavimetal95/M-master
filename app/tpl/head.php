<!DOCTYPE html>
<html>
<head>                                                                                                 
	<title><?= $title; ?></title>
    <link rel="stylesheet"  type="text/css" href="<?= APP_W.'pub/css/m.css'; ?>">
    <script src="<?=APP_W.'pub/js/jquery.min.js'; ?>"></script>
    <script src="<?=APP_W.'pub/js/app.js'; ?>"></script>

</head>
<body>
	<header>
		<div class="logo">
			<img src="logo_wallawall.png"><h1><?= $title; ?></h1>
		</div>
		<div id="cuadro_login">
			<form class="login" method="post" action="<?=APP_W.'home/login';?>" >
				<label>Email</label><input type="text" name="email">
				<br>
				<label>Password</label><input type="password" name="password">
				<br>
				<div class="botones">
					<input type="submit" value="Login" class="boton" id="boton_login">
				</div>
			</form>
			
			<form class="regis" method="post">
				<a class="boton" href="<?=APP_W.'register';?>">Registrate</a>
			</form>
		</div>
			
	</header>
	
	
