 <?php

	class mHome extends Model{

		function __construct(){
			parent::__construct();
			
		}

		//Comprueba de entre todos los usuarios si el que tiene el email y password que introducen existe y, si es así, crea varias Session
		function login($email,$password){
   	 try{
      
       $sql="SELECT * FROM usuarios WHERE email=:email AND pass=:password";
       $this->query($sql);
       $this->bind(':email',$email);
       $this->bind(':password',$password);
       $this->execute();

       
       if($this->rowCount()==1)
       {
             $array_bd = $this->single();
             Session::set('rol_usr', $array_bd[0]['rol']);
             Session::set('nombre_usr', $array_bd[1]['nombre']);
             Session::set('id_usr', $array_bd[2]['id_user']);
             Session::set('islogged',TRUE);
             return TRUE;
       }
       else{
           Session::set('islogged',FALSE);
            return FALSE;
          } 
      }catch(PDOException $e){
         echo "Error:".$e->getMessage();
     }
    }

    //Pone a false la Session islogged
    function logout()
    {
      Session::set('islogged',FALSE);
    }



 }