<?php
	final class User extends Controller{
		function __construct($params=null){
			parent::__construct($params);
			$this->conf=Registry::getInstance();

			$this->model=new mUser;
			$this->view=new vUser;
		}
		function home(){
			
			
		}

		//Se muestran los usuarios del usuario concreto

		function anuncios()
		{
			$anuncios=$this->model->anuncios();
		    if($anuncios!=0)
		    {
		      $this->json($anuncios);
		    }else
		    {
		      return $anuncios;
    		}
		}
	}