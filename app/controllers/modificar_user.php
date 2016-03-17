<?php
	
	class Modificar_user extends Controller{
		protected $model;
		protected $view;

		function __construct($params){
			parent::__construct($params);
			$this->model=new mModificar_user();
			$this->view= new vModificar_user();
		}
		
		function home(){

		}

		function modificar_user()
		{
			if(!empty($_POST['email']) || !empty($_POST['password']) || !empty($_POST['nombre']) && !empty($_POST['modificar'])){

		        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		        $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		        $name=filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
		        $modificar=filter_input(INPUT_POST, 'modificar', FILTER_SANITIZE_STRING);
		        $modi_user=$this->model->modificar_user($email,$password,$name,$modificar);

		         if ($modi_user == TRUE){ 
		               
		            header('Location:'.APP_W.'dashboard');
		         }
		         else{
		             
		               header('Location:'.APP_W.'modificar_user');
		             }
		   		}
		}
	}
?>