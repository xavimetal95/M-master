<?php

	class mUser extends Model{

		function __construct(){
			parent::__construct();
			
		}


		//Muestra todos los anuncios del usuario
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
	}