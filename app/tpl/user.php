<?php  
if($_SESSION['islogged']!=TRUE)
	{
		echo'<h1>Bienvenido a WallaXavi, porfavor logeate para ver y crear anuncios :D</h1>';
	}else
	{
		echo
		'<div id="anuncios"></div>
		<h1>Gestionar anuncios</h1>
			<div id="anuncios"></div>
			<input type="button" value="Modificar anuncio" class="boton" id="boton_modificar_anuncio"></input>
		
				<div class="modificar_anuncio" id="modificar_anuncio">
					<h1>Modificar anuncio</h1>	
					<form id="register" class="register" method="post" action="'.APP_W.'dashboard/modificar_anuncio" >
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
					<form id="register" class="register" method="post" action="'.APP_W.'dashboard/eliminar_anuncio" >
						<label>ID del anuncio:</label> <input type="text" placeholder="Anuncio" name="id">
						<br>
						<label><input type="submit" value="Eliminar" class="boton" id="submit_eliminar_anuncio"></label>
					
					</form>
			</div>

			<br>
			<input type="button" value="Crear anuncio" class="boton" id="boton_crear_anuncio">
				<div class="crear_user" id="crear_anuncio">

					<form id="register" class="register" method="post" action="'.APP_W.'dashboard/crear_anuncio" >
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
		';
	}
?>