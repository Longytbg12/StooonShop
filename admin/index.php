<?php 
	//start session
	session_start();
	//load file Connection.php
	include "../application/Connection.php";
   	//load file Controller.php
  	include "../application/Controller.php";
  	///-----
  	//load dong MVC dua vaof tham so controller truyen len url
  	$controller = isset($_GET["controller"]) ? $_GET["controller"] : "Home";
  	$action = isset($_GET["action"]) ? $_GET["action"] : "index";
  	//tao duong dan vat ly cua file controler
  	//
  	$controllerFile = "controllers/".ucfirst($controller)."Controller.php";
  	//echo $controllerFile;
  	//
  	if(file_exists($controllerFile)){
  		include $controllerFile;
  		$controllerClass = ucfirst($controller)."Controller";
  		//khoi tao object cua class
  		$obj = new $controllerClass();
  		//goi den action
  		$obj->$action();
  	}else die("File $controllerFile khong ton tai");
  	//ham else die("chuoi") xuat thoong bao chuoi len man hinh
  	///---
 ?>