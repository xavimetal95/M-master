<?php
	
		class mModificar_user extends Model{

		function __construct(){
			parent::__construct();
			
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
}

?>