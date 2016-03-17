<?php
	
	class Home extends Controller{
		protected $model;
		protected $view;
		
		function __construct($params){
			parent::__construct($params);
			$this->model=new mHome();
			$this->view= new vHome();
			
			//echo 'Hello controller!';
		}
		function home(){

		}
		
		function login(){
		
		   if(!empty($_POST['email']) && !empty($_POST['password'])){

		        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		        $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		        $user=$this->model->login($email,$password);
		       

		         if ($user == TRUE){
             		Session::set('email',$email);
             		Session::set('pass',$password);
             		Session::set('rol',$rol);
             		$_SESSION['nombre_usr'] = $nombre['nombre'];

             		if ($_SESSION['islogged'] == TRUE) 
             		{
             			echo '<div id="session_on"><br> Hola '.$nombre.' | <a href="javascript:void(0);" id="sessionKiller">Logout</a>.</div>';
             		}else
             		{
             			echo '<form class="login" method="post" action="M-master/home/login" >
							<label>Email</label><input type="text" name="email" id="login_username">
							<br>
							<label>Password</label><input type="password" name="password" id="login_userpass">
							<br>
							<div class="botones">
								<input type="submit" value="Login" class="boton" id="login_userbttn">
							</div>
						</form>
						
						<form class="regis" method="post">
							<a class="boton" href="M-master/register">Registrate</a>
						</form>';
             		}
             		
		               // cap a la pàgina principal
             		if($_SESSION['rol_usr'] != "admin")
             		{
             			header('Location:'.APP_W.'user');
             		}
             		else
             		{
             			header('Location:'.APP_W.'dashboard');
             		}
		            
		         }
		         else{
		             
		               header('Location:'.APP_W.'error');
		             }
		   		}
		   		else
		   		{
		   			header('Location:'.APP_W.'error');
		   		}
			}

		
}