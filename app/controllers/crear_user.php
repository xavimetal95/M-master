<?php
	
	class Crear_user extends Controller{
		protected $model;
		protected $view;

		function __construct($params){
			parent::__construct($params);
			$this->model=new mCrear_user();
			$this->view= new vCrear_user();
		}
		
		function home(){

		}

		function crear_user()
		{
			if(!empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['nombre'])&& !empty($_POST['rol'])){

		        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		        $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		        $name=filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
		        $rol=filter_input(INPUT_POST, 'rol', FILTER_SANITIZE_STRING);
		        $new_user2=$this->model->crear_user($email,$password,$name,$rol);

		         if ($new_user2 == TRUE){ 
		               
		            header('Location:'.APP_W.'dashboard');
		         }
		         else{
		             
		               header('Location:'.APP_W.'crear_user');
		             }
		   		}
		}
	}
?>