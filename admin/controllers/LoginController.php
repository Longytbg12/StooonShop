<?php 
	//loaad file LoginModel.php
	include "models/LoginModel.php";
	class LoginController extends Controller{
		//ke thua class LoginModel
		use LoginModel;
		public function index(){
			//load view
			$this->loadView("LoginView.php");
		}
		public function login(){
			//goi ham modelLogin trong class LoginModel
			$this->modelLogin();
		}
		//dang xuat
		public function logout(){
			//huy bien session
			unset($_SESSION['email']);
			//di chuyen den 1 url khac
			header("location:index.php");
		}
	}
 ?>