<?php

session_start();




if (isset($_POST)) {
	$numberOfDices = implode('', $_POST);
} else {
	if (isset($_SESSION['numberOfDices'])) {
		$numberOfDices = $_SESSION['numberOfDices'];
	} 
} 


require 'dice.php';
require 'index.view.php';
?>