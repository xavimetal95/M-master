<div class="crear_user">
	<article>
		<form id="register" class="register" method="post" action="<?=APP_W.'crear_user/crear_user';?>" >
		<h1>Registrar nuevo usuario</h1>
		
			<label>Nombre:</label> <input type="text" placeholder="Nombre" name="nombre">
			<br>
			<label>Email:</label> <input type="text" placeholder="Email" name="email">
			<br>
			<label>Pass:</label> <input type="password" placeholder="Password" name="password">
			<br>
			<label>Rol:</label> <input type="text" placeholder="Rol" name="rol">
			<br>
		
			<label><input type="submit" value="Crear" class="boton" id="boton_"></label>
		
		</form>
	</article>
</div>