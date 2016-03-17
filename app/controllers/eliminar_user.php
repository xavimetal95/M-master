<?php
	
	class Eliminar_user extends Controller{
		protected $model;
		protected $view;

		function __construct($params){
			parent::__construct($params);
			$this->model=new mEliminar_user();
			$this->view= new vEliminar_user();
		}
		
		function home(){

		}

		function eliminar_user()
		{
			if(!empty($_POST['email'])){

		        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		        $delete_user=$this->model->eliminar_user($email);
		   	}

		   		if ($delete_user == TRUE){ 
		               
		            header('Location:'.APP_W.'dashboard');
		         }
		         else{
		             
		               header('Location:'.APP_W.'eliminar_user');
		             }
		 
		}
	}
?>