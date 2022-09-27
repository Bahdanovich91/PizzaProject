<?php
require_once './DB/MysqlConnection.php';
require_once './Models/Pizza.php';
require_once './Models//Sauce.php';
require_once './Models//Size.php';




$dbconnection = new MysqlConnection();
$dbconnect = $dbconnection->getConnection();

$pizzaObject = new Pizza($dbconnect);
$pizzas = $pizzaObject->getAll();

$sauceObject = new Sauce($dbconnect);
$sauces = $sauceObject->getAll();

$sizeObject = new Size($dbconnect);
$sizes = $sizeObject->getAll();

