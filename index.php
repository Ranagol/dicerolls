<?php

session_start();

$numberOfDices = $_SESSION['numberOfDices'];

if (isset($_POST)) {
	$numberOfDices = implode('', $_POST);
}

require 'dice.php';
require 'index.view.php';
?>