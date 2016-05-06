<?php

require 'vendor/autoload.php';
require 'db.php';

\Slim\Slim::registerAutoloader();
$app=new \Slim\Slim();

//definir rutas
$app->get('/','list_users');
$app->post('/','insert_users');
$app->run();

function list_users()
{
	try
	{
		$sql="SELECT * FROM usuarios";
		$dbh=getDB();
		$stmt=$dbh->prepare($sql);
		$stmt->execute();
		$result=$stmt->fetchAll();

	}catch(PDOException $e)
    {
       echo "Error:".$e->getMessage();
    }

    echo json_encode($result);

}

function insert_users()
{
	try
	{
		$sql="INSERT INTO usuarios(email, nombre, pass, rol) VALUES(:email, :nombre, :pass, :rol)";
		$request=\Slim\Slim::getInstance()->request();
		$user=$request->params();
		$email=$user["email"];
		$nombre=$user["nombre"];
		$pass=$user["pass"];
		$rol=$user["rol"];

		$dbh=getDB();
		$stmt=$dbh->prepare($sql);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':nombre',$nombre);
		$stmt->bindParam(':pass',$pass);
		$stmt->bindParam(':rol',$rol);
		$stmt->execute();
		
    }catch(PDOException $e)
    {
       echo "Error:".$e->getMessage();
    }
}
