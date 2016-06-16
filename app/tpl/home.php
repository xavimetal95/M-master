<?php  
	
	if($_SESSION['islogged']!=TRUE)
	{
		echo'<h1>Bienvenido a WallaXavi, porfavor logeate para ver y crear anuncios :D</h1>';
	}else
	{
		echo
		'<div id="anuncios"></div>';
	}

	?>
	
