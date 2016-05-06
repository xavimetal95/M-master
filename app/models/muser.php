<?php

	class mUser extends Model{

		function __construct(){
			parent::__construct();
			
		}

		function anuncios()
		{
			try
		 	{
		      	$sql="SELECT * FROM anuncios";
		       	$this->query($sql);
		       	$this->execute();
		       	$result=$this->fetchAll();

		       	return json_encode($result);

      		}catch(PDOException $e)
      		{
       			echo "Error:".$e->getMessage();
      		}
		}
	}