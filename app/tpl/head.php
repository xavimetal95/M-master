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
		<h1> View -<?= $title; ?></h1>
		<form>
			<label>Nombre</label><input type="text" name="nombre">
			<br>
			<label>Password</label><input type="password" name="pass">
			<br>
			<input type="submit" value="login"><input type="button" value="Olvidé mi contraseña">
		</form>
	</header>
	
