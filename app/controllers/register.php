<?php
	
	class Register extends Controller{
		protected $model;
		protected $view;

		function __construct($params){
			parent::__construct($params);
			$this->model=new mRegister();
			$this->view= new vRegister();
		}
		
		function home(){

		}

		function register()
		{

		 if(!empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['nombre'])){

		        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		        $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		        $name=filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
		        $new_user=$this->model->register($email,$password,$name);

		         if ($new_user == TRUE){ 
		               // cap a la pàgina principal
		            header('Location:'.APP_W.'home');
		         }
		         else{
		             // no hi és l'usuari, cal registrar
		               header('Location:'.APP_W.'register');
		             }
		   		}
		}
	}
?>