<div class="dashboard">
		<h1>Dashboard de admin</h1>	
		<div id="tabla_admin"></div>

		<div class="admin_users">
		<h1>Gestionar usuarios</h1>
		
			<input type="button" value="Modificar usuario" class="boton" id="boton_modificar"></input>
		

				<div class="modificar_user" id="modificar_user">
					<h1>Modificar user</h1>	
					<form id="register" class="register" method="post" action="<?=APP_W.'dashboard/modificar_user';?>" >
						<label>Email para modificar:</label> <input type="text" placeholder="Modificar user" name="modificar">
						<br>
						<label>Nombre:</label> <input type="text" placeholder="Nombre" name="nombre">
						<br>
						<label>Email:</label> <input type="text" placeholder="Email" name="email">
						<br>
						<label>Pass:</label> <input type="password" placeholder="Password" name="password">
						<br>
						<label><input type="submit" value="Modificar" class="boton" id="submit_modificar"></label>
					
					</form>
					
				</div>
			
			<br>
			<input type="button" value="Eliminar usuario" class="boton" id="boton_eliminar">
				<div class="eliminar_user" id="eliminar_user">
				
					<h1>Eliminar user</h1>	
					<form id="register" class="register" method="post" action="<?=APP_W.'dashboard/eliminar_user';?>" >
						<label>Email del usuario:</label> <input type="text" placeholder="Email" name="email">
						<br>
						<label><input type="submit" value="Eliminar" class="boton" id="submit_eliminar"></label>
					
					</form>
			</div>
			
			<br>
			<input type="button" value="Crear usuario" class="boton" id="boton_crear">
				<div class="crear_user" id="crear_user">

					<form id="register" class="register" method="post" action="<?=APP_W.'dashboard/crear_user';?>" >
					<h1>Registrar nuevo usuario</h1>
						
						<label>Nombre:</label> <input type="text" placeholder="Nombre" name="nombre">
						<br>
						<label>Email:</label> <input type="text" placeholder="Email" name="email">
						<br>
						<label>Pass:</label> <input type="password" placeholder="Password" name="password">
						<br>
						<label>Rol:</label> <input type="text" placeholder="Rol" name="rol">
						<br>
						<label><input type="submit" value="Crear" class="boton" id="submit_crear"></label>
						
					</form>
				</div>
			
		</div>

		<div class="admin_anuncios">
			<h1>Gestionar anuncios</h1>
			<div id="anuncios"></div>
			<input type="button" value="Modificar anuncio" class="boton" id="boton_modificar_anuncio"></input>
		
				<div class="modificar_anuncio" id="modificar_anuncio">
					<h1>Modificar anuncio</h1>	
					<form id="register" class="register" method="post" action="<?=APP_W.'dashboard/modificar_anuncio';?>" >
						<label>ID del anuncio a modificar:</label> <input type="text" placeholder="Modificar anuncio" name="modificar">
						<br>
						<label>Titulo:</label> <input type="text" placeholder="Titulo" name="titulo">
						<br>
						<label>Descripcion:</label> <input type="text" placeholder="Descripcion" name="descripcion">
						<br>
						<label>Imagen:</label> <input type="text" placeholder="URL Imagen" name="imagen">
						<br>
						<label><input type="submit" value="Modificar" class="boton" id="submit_modificar_anuncio"></label>
					
					</form>
					
				</div>
				<br>
				<input type="button" value="Eliminar anuncio" class="boton" id="boton_eliminar_anuncio">
				<div class="eliminar_anuncio" id="eliminar_anuncio">
				
					<h1>Eliminar anuncio</h1>	
					<form id="register" class="register" method="post" action="<?=APP_W.'dashboard/eliminar_anuncio';?>" >
						<label>ID del anuncio:</label> <input type="text" placeholder="Anuncio" name="id">
						<br>
						<label><input type="submit" value="Eliminar" class="boton" id="submit_eliminar_anuncio"></label>
					
					</form>
			</div>

			<br>
			<input type="button" value="Crear anuncio" class="boton" id="boton_crear_anuncio">
				<div class="crear_user" id="crear_anuncio">

					<form id="register" class="register" method="post" action="<?=APP_W.'dashboard/crear_anuncio';?>" >
					<h1>Nuevo anuncio</h1>
						
						<label>Titulo:</label> <input type="text" placeholder="Titulo" name="titulo">
						<br>
						<label>Descripcion:</label> <input type="text" placeholder="Descripcion" name="descripcion">
						<br>
						<label>Imagen:</label> <input type="text" placeholder="URL Imagen" name="imagen">
						<br>
						<label><input type="submit" value="Crear" class="boton" id="submit_crear_anuncio"></label>
						
					</form>
				</div>


		</div>
</div>