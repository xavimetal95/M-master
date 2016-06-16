<?php

	class mDashboard extends Model{

		function __construct(){
			parent::__construct();
			
		}

		//Muestra todos los usuarios
		
		function lista_users()
		{
			try
			{
			    $sql="SELECT * FROM usuarios";
			    $this->query($sql);
			    $this->execute();
			    $result=$this->resultSet();
			    return $result;
			    
      		}catch(PDOException $e){
        		 echo "Error:".$e->getMessage();
     		}
			
		}

		//Elimina el usuario si existe
		function eliminar_user($email)
		{
		 	try
		 	{
		      	$sql="SELECT * FROM usuarios WHERE email=:email";
		       	$this->query($sql);
		       	$this->bind(':email',$email);
		       	$this->execute();
      
	       if($this->rowCount()==1)
	       {
	       	 	$sql="DELETE FROM usuarios WHERE email=:email";
			    $this->query($sql);
			    $this->bind(':email',$email);
			    $this->execute();
	            return TRUE;
	       }
	       else
	       {
	          return FALSE;
	       } 
      }catch(PDOException $e)
      {
        echo "Error:".$e->getMessage();
      }	
	}

		//Modifica el usuario concreto si no hay error

		function modificar_user($email,$password,$name,$modificar)
		{
		 	try
		 	{
		       if($email!=null)
		       {
		       	 	$sql="UPDATE usuarios set email=:email where email=:modificar";
				    $this->query($sql);
				    $this->bind(':modificar',$modificar);
				    $this->bind(':email',$email);
				    $this->execute();
		            return TRUE;
		       }

		       if($name!=null)
		       {
		       	 	$sql="UPDATE usuarios set nombre=:nombre where email=:modificar";
				    $this->query($sql);
				    $this->bind(':modificar',$modificar);
				    $this->bind(':nombre',$name);
				    $this->execute();
		            return TRUE;
		       }

		       if($password!=null)
		       {
		       	 	$sql="UPDATE usuarios set pass=:pass where email=:modificar";
				    $this->query($sql);
				    $this->bind(':modificar',$modificar);
				    $this->bind(':pass',$password);
				    $this->execute();
		            return TRUE;
		       }
		       
      }catch(PDOException $e)
      {
        echo "Error:".$e->getMessage();
      }
	}

	//Crea un usuario

	function crear_user($email, $password, $name, $rol)
		{
		 	try
		 	{
		      	$sql="SELECT * FROM usuarios WHERE email=:email AND pass=:password";
		       	$this->query($sql);
		       	$this->bind(':email',$email);
		       	$this->bind(':password',$password);
		       	$this->execute();
      
	       if($this->rowCount()==0)
	       {
	       	 	$sql="CALL create_user(:nombre,:email,:password,:rol)";
			    $this->query($sql);
			    $this->bind(':email',$email);
			    $this->bind(':password',$password);
			    $this->bind(':nombre',$name);
			    $this->bind(':rol',$rol);
			    $this->execute();
	            return TRUE;
	       }
	       else
	       {
	          return FALSE;
	       } 
      }catch(PDOException $e)
      {
        echo "Error:".$e->getMessage();
      }
		}

		//Muestra todos los anuncios de un usuario concreto

	function lista_anuncios()
	{
		try
		{
			$id = $_SESSION['id_usr'];
			$sql="SELECT * FROM anuncio where Usuarios_id_user1=:id";
		    $this->query($sql); 
		    $this->bind(':id',$id);
		    $this->execute();
		    $result=$this->resultSet();
		    if(($this->rowCount())==0)
		    {
	          $result=0;
	        }
			return $result;

		}catch(PDOException $e)
      	{
        	echo "Error:".$e->getMessage();
      	}
	}

	//Crea un anuncio
	function crear_anuncio($titulo, $descripcion, $imagen)
	{
		try
		{
		 	$id = $_SESSION['id_usr'];
	       	$sql="INSERT into anuncio(titulo,descripcion,imagen,Usuarios_iduser1) values(:titulo, :descripcion, :imagen, :id_user";
			$this->query($sql);
			$this->bind(':titulo',$titulo);
			$this->bind(':descripcion',$descripcion);
			$this->bind(':imagen',$imagen);
			$this->bind(':id_user',$id);
			$this->execute();
	        return TRUE;
	       
		}catch(PDOException $e)
		{
		    echo "Error:".$e->getMessage();
		}
	}

	//Elimina un anuncio concreto

	function eliminar_anuncio($id)
		{
		 	try
		 	{
		      	$sql="SELECT * FROM anuncio WHERE id_anuncio=:id";
		       	$this->query($sql);
		       	$this->bind(':id',$id);
		       	$this->execute();
      
	       if($this->rowCount()==1)
	       {
	       	 	$sql="DELETE FROM anuncio WHERE id_anuncio=:id";
			    $this->query($sql);
			    $this->bind(':id',$id);
			    $this->execute();
	            return TRUE;
	       }
	       else
	       {
	          return FALSE;
	       } 
      }catch(PDOException $e)
      {
        echo "Error:".$e->getMessage();
      }	
	}

	//Modifica un anuncio concreto

	function modificar_anuncio($titulo,$descripcion,$imagen,$modificar)
		{
		 	try
		 	{
		       if($titulo!=null)
		       {
		       	 	$sql="UPDATE anuncio set titulo=:titulo where id_anuncio=:modificar";
				    $this->query($sql);
				    $this->bind(':modificar',$modificar);
				    $this->bind(':titulo',$titulo);
				    $this->execute();
		            return TRUE;
		       }

		       if($descripcion!=null)
		       {
		       	 	$sql="UPDATE anuncio set descripcion=:descripcion where id_anuncio=:modificar";
				    $this->query($sql);
				    $this->bind(':modificar',$modificar);
				    $this->bind(':descripcion',$descripcion);
				    $this->execute();
		            return TRUE;
		       }

		       if($imagen!=null)
		       {
		       	 	$sql="UPDATE anuncio set imagen=:imagen where id_anuncio=:modificar";
				    $this->query($sql);
				    $this->bind(':modificar',$modificar);
				    $this->bind(':imagen',$imagen);
				    $this->execute();
		            return TRUE;
		       }
		       
      }catch(PDOException $e)
      {
        echo "Error:".$e->getMessage();
      }
	}

	}