<?php
	final class Dashboard extends Controller{
		function __construct($params=null){
			parent::__construct($params);
			$this->conf=Registry::getInstance();

			$this->model=new mDashboard;
			$this->view=new vDashboard;
		}
		function home(){
			
			
		}
	}