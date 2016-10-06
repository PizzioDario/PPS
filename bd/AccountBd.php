<?php

include "C:/xampp/htdocs/www/PPS/doctrine_config/doctrine-cfg.php";
include "C:/xampp/htdocs/www/PPS/entities/Address.php";
include "C:/xampp/htdocs/www/PPS/entities/User.php";
include "C:/xampp/htdocs/www/PPS/entities/Province.php";
include "C:/xampp/htdocs/www/PPS/entities/City.php";
include "C:/xampp/htdocs/www/PPS/entities/UserType.php";

$dataPost = file_get_contents("php://input");
$request = json_decode($dataPost);


switch($request->data->action){

	//Address
	case 'getAllAddresses':
		$addresses =  $entityManager->getRepository("Address")->findAll();
		//var_dump($addresses);

		echo(json_encode($addresses));
		break;
}		