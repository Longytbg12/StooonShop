<?php 
	class HomeController extends Controller{
		//ham tao la ham mac dinh goi dau tien
		public function __construct(){
			//ktra trang dnhap
			$this->authentication();
		}
		public function index(){
			//goi view
			$this->loadView("HomeView.php");
		}
	}
 ?>