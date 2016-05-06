<?php
	final class Dashboard extends Controller{
		function __construct($params=null){
			parent::__construct($params);
			$this->conf=Registry::getInstance();

			$this->model=new mDashboard;
			$this->view=new vDashboard;
		}
		function home(){
				
		}

		function lista_users()
		{
			$listar_users=$this->model->lista_users();
			$this->json_out($listar_users);
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
		             
		                echo '<script>alert("se ha producido un error!");</script>';
		                header('Location:'.APP_W.'dashboard');
		             }
		   		}else{
		             
		               echo '<script>alert("se ha producido un error!");</script>';
		               header('Location:'.APP_W.'dashboard');
		             }
		}

		function eliminar_user()
		{
			if(!empty($_POST['email'])){

		        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		        $delete_user=$this->model->eliminar_user($email);
		   	}else{
		             
		                echo '<script>alert("se ha producido un error!");</script>';
		               header('Location:'.APP_W.'dashboard');
		             }

		   		if ($delete_user == TRUE){ 
		               
		            header('Location:'.APP_W.'dashboard');
		         }
		         else{
		             
		                 echo '<script>alert("se ha producido un error!");</script>';
		                header('Location:'.APP_W.'dashboard');
		             }
		 
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

		         } else{
		             
		               header('Location:'.APP_W.'dashboard');
		                echo '<script>alert("se ha producido un error!");</script>';
		             }
		        
		   		} else{
		             
		               header('Location:'.APP_W.'dashboard');
		               echo '<script>alert("se ha producido un error!");</script>';
		             }
		}

		function crear_anuncio()
		{
			if(!empty($_POST['titulo']) && !empty($_POST['descripcion'])&& !empty($_POST['imagen'])){

		        $titulo=filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
		        $descripcion=filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
		        $imagen=filter_input(INPUT_POST, 'imagen', FILTER_SANITIZE_STRING);
		        $new_anuncio=$this->model->crear_anuncio($titulo,$descripcion,$imagen);

		         if ($new_anuncio == TRUE){ 
		               
		            header('Location:'.APP_W.'dashboard');
		         }
		         else{
		             
		                echo '<script>alert("se ha producido un error!");</script>';
		                header('Location:'.APP_W.'dashboard');
		             }
		   		}else{
		             
		               echo '<script>alert("se ha producido un error!");</script>';
		               header('Location:'.APP_W.'dashboard');
		             }
		}

		function eliminar_anuncio()
		{
			if(!empty($_POST['id'])){

		        $id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		        $delete_anuncio=$this->model->eliminar_anuncio($id);
		   	}else{
		             
		                echo '<script>alert("se ha producido un error!");</script>';
		               header('Location:'.APP_W.'dashboard');
		             }

		   		if ($delete_anuncio == TRUE){ 
		               
		            header('Location:'.APP_W.'dashboard');
		         }
		         else{
		             
		                 echo '<script>alert("se ha producido un error!");</script>';
		                header('Location:'.APP_W.'dashboard');
		             }
		 
		}

		function modificar_anuncio()
		{
			if(!empty($_POST['titulo']) || !empty($_POST['descripcion']) || !empty($_POST['imagen']) && !empty($_POST['modificar'])){

		        $titulo=filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
		        $descripcion=filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
		        $imagen=filter_input(INPUT_POST, 'imagen', FILTER_SANITIZE_STRING);
		        $modificar=filter_input(INPUT_POST, 'modificar', FILTER_SANITIZE_STRING);
		        $modi_anuncio=$this->model->modificar_anuncio($titulo,$descripcion,$imagen,$modificar);

		         if ($modi_anuncio == TRUE){ 
		               
		            header('Location:'.APP_W.'dashboard');

		         } else{
		             
		               header('Location:'.APP_W.'dashboard');
		                echo '<script>alert("se ha producido un error!");</script>';
		             }
		        
		   		} else{
		             
		               header('Location:'.APP_W.'dashboard');
		               echo '<script>alert("se ha producido un error!");</script>';
		             }
		}
	}