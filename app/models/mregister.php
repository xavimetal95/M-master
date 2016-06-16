<?php
	
		class mRegister extends Model{

		function __construct(){
			parent::__construct();
			
		}
		
		//Comprueba que el usuario no exista y, si es así, lo inserta
		function register($email, $password, $name)
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
	       	 	$sql="CALL insert_user(:nombre,:email,:password)";
			    $this->query($sql);
			    $this->bind(':email',$email);
			    $this->bind(':password',$password);
			    $this->bind(':nombre',$name);
			    $this->execute();
	            return TRUE;
	       }
	       else
	       {
	          Session::set('isregistred',FALSE);
	          return FALSE;
	       } 
      }catch(PDOException $e)
      {
        echo "Error:".$e->getMessage();
      }
	}
}

?>