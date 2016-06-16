<?php
	
	class Home extends Controller{
		protected $model;
		protected $view;
		
		function __construct($params){
			parent::__construct($params);
			$this->model=new mHome();
			$this->view= new vHome();
			
			//echo 'Hello controller!';
		}
		function home(){

		}

		//Validacion de usuario y redireccion segun si es administrador o usuario normal
		
		function login(){
		
		   if(!empty($_POST['email']) && !empty($_POST['password'])){

		        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		        $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		        $user=$this->model->login($email,$password);
		       

		         if ($user == TRUE){
             		Session::set('id_user',$id);
             		Session::set('pass',$password);
             		Session::set('rol',$rol);

		               // cap a la pàgina principal
             		if($_SESSION['rol_usr'] != "admin")
             		{
             			header('Location:'.APP_W.'user');
             		}
             		else
             		{
             			header('Location:'.APP_W.'dashboard');
             		}
		            
		         }
		         else{
		             
		               echo '<script>alert("se ha producido un error!");</script>';
		             }
		   		}
		   		else
		   		{
		   			echo '<script>alert("se ha producido un error!");</script>';
		   		}
			}

			//Funcion que cambia la session a false
			function logout()
			{
				$user=$this->model->logout();
				header('Location:'.APP_W);
			}

			//Redirecciona a dashboard o user (depende del rol) al clicar en el icono del usuario

			function user_icon()
			{
				if($_SESSION['rol_usr'] != "admin")
             	{
             		header('Location:'.APP_W.'user');
             	}
             	else
             	{
             		header('Location:'.APP_W.'dashboard');
             	}
			}
		
}