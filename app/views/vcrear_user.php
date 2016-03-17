<?php
	
	class vCrear_user extends View{

		function __construct(){
			parent::__construct();

			$this->tpl=Template::load('crear_user',$this->view_data);
			
		}
	}

	

?>