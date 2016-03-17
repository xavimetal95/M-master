<?php
	
		class mCrear_user extends Model{

		function __construct(){
			parent::__construct();
			
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
}

?>