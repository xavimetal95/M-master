<?php
	
	class vEliminar_user extends View{

		function __construct(){
			parent::__construct();

			$this->tpl=Template::load('eliminar_user',$this->view_data);
			
		}
	}

	

?>