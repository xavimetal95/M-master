<?php
	
	class vModificar_user extends View{

		function __construct(){
			parent::__construct();

			$this->tpl=Template::load('modificar_user',$this->view_data);
			
		}
	}

	

?>