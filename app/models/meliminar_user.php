<?php
	
		class mEliminar_user extends Model{

		function __construct(){
			parent::__construct();
			
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
}

?>