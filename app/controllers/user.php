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

		function anuncios()
		{
			$anuncios=$this->model->anuncios();
		}
	}