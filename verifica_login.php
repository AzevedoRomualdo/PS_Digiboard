<?php
session_start();

if(!isset($_SESSION["Usu_Nome"]) || !isset($_SESSION["Usu_Senha"])){
	header("location:login.php");
	exit;
}