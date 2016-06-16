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

		//Muestra todos los usuarios
		function lista_users()
		{
			$listar_users=$this->model->lista_users();
			$this->json_out($listar_users);
		}

		//Crea un usuario
		function crear_user()
		{
			if(!empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['nombre'])&& !empty($_POST['rol'])){

		        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		        $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		        $name=filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
		        $rol=filter_input(INPUT_POST, 'rol', FILTER_SANITIZE_STRING);
		        $new_user2=$this->model->crear_user($email,$password,$name,$rol);
 
		   		}else{
		               echo '<script>alert("se ha producido un error!");</script>';
		             }
		}

		//Elimina el usuario indicado
		function eliminar_user()
		{
			if(!empty($_POST['email'])){

		        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		        $delete_user=$this->model->eliminar_user($email);
		   	}else{
		             
		                echo '<script>alert("se ha producido un error!");</script>';
		               
		             }

		 
		}

		//Modifica el email, password o nombre del usuario indicado

		function modificar_user()
		{
			if(!empty($_POST['email']) || !empty($_POST['password']) || !empty($_POST['nombre']) && !empty($_POST['modificar'])){

		        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		        $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		        $name=filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
		        $modificar=filter_input(INPUT_POST, 'modificar', FILTER_SANITIZE_STRING);
		        $modi_user=$this->model->modificar_user($email,$password,$name,$modificar);
		        
		   		} else{
		               echo '<script>alert("se ha producido un error!");</script>';
		             }
		}

		//Lista todos los anuncios
		function lista_anuncios()
		{
			$listar_anuncios=$this->model->lista_anuncios();
			if($listar_anuncios>0)
			{
				$this->json_out($listar_anuncios);
			}else
			{
				return $listar_anuncios;
			}
			
		}

		//Creación de anuncio

		function crear_anuncio()
		{
			if(!empty($_POST['titulo']) && !empty($_POST['descripcion'])&& !empty($_POST['imagen'])){

		        $titulo=filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
		        $descripcion=filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
		        $imagen=filter_input(INPUT_POST, 'imagen', FILTER_SANITIZE_STRING);
		        $new_anuncio=$this->model->crear_anuncio($titulo,$descripcion,$imagen);

		   		}else{
		             
		               echo '<script>alert("se ha producido un error!");</script>';
		             }
		}

		//Elimina un anuncio concreto

		function eliminar_anuncio()
		{
			if(!empty($_POST['id'])){

		        $id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		        $delete_anuncio=$this->model->eliminar_anuncio($id);
		   	}else{
		             
		                echo '<script>alert("se ha producido un error!");</script>';
		          
		             } 
		}

		//Modifica el anuncio indicado

		function modificar_anuncio()
		{
			if(!empty($_POST['titulo']) || !empty($_POST['descripcion']) || !empty($_POST['imagen']) && !empty($_POST['modificar'])){

		        $titulo=filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
		        $descripcion=filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
		        $imagen=filter_input(INPUT_POST, 'imagen', FILTER_SANITIZE_STRING);
		        $modificar=filter_input(INPUT_POST, 'modificar', FILTER_SANITIZE_STRING);
		        $modi_anuncio=$this->model->modificar_anuncio($titulo,$descripcion,$imagen,$modificar);

		        
		   		} else{
		             
		               echo '<script>alert("se ha producido un error!");</script>';
		             }
		}
	}