<?php

	class mDashboard extends Model{

		function __construct(){
			parent::__construct();
			
		}
		
		function lista_users()
		{
			try
			{
			    $sql="SELECT email, nombre, pass, rol FROM usuarios";
			    $this->query($sql);
			    $this->execute();
			    $result=$this->resultSet();
			    return $result;
      		}catch(PDOException $e){
        		 echo "Error:".$e->getMessage();
     		}
			
		}

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

	function crear_anuncio($titulo, $descripcion, $imagen)
		{
		 	try
		 	{
		      	$sql="SELECT * FROM anuncio WHERE titulo=:titulo AND descripcion=:descripcion";
		       	$this->query($sql);
		       	$this->bind(':titulo',$titulo);
		       	$this->bind(':descripcion',$descripcion);
		       	$this->execute();
      
	       if($this->rowCount()==0)
	       {
	       	 	$sql="INSERT into anuncio values(:titulo, :descripcion, :imagen";
			    $this->query($sql);
			    $this->bind(':titulo',$titulo);
			    $this->bind(':descripcion',$descripcion);
			    $this->bind(':imagen',$imagen);
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