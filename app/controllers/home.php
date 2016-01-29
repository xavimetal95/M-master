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

		function login(){
   if(isset($_POST['email'])){
         $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
         $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
         $user=$this->model->login($email,$password);
         if ($user== TRUE){
               // cap a la pàgina principal
               header('Location:'.APP_W.'/index/index');
         }
         else{
             // no hi és l'usuari, cal registrar
               header('Location:'.APP_W.'/index/register');
             }
   		}
	}

		function home(){
			//Coder::codear($this->conf);
	}
}