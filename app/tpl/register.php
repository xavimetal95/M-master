<div class="container">
	<article>
		<form id="register" class="register" method="post" action="<?=APP_W.'register/register';?>" >
		<h1>Registro</h1>
		
			<label>Nombre:</label> <input type="text" placeholder="Nombre" name="nombre">
			<br>
			<label>Email:</label> <input type="text" placeholder="Email" name="email">
			<br>
			<label>Pass:</label> <input type="password" placeholder="Password" name="password">
			<br>
			<label>Retype pass:</label> <input type="password" placeholder="Retype password">
			<br>
		
			<label><input type="submit" value="Registrar" class="boton" id="bot_regis"></label>
		
		</form>
	</article>
</div>