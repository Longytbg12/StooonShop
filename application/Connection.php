<?php 
	//ket noi csdl
	class Connection{
		//ham ket noi csdl, ket qua tra ve mot bien -> kieu bien nay la bien object
		public static function getInstance(){
			$db = new PDO("mysql:host=localhost;dbname=php57_th","root","");
			//$db = new PDO("mysql:host=sql112.byethost18.com;dbname=b18_30414110_php57_th","b18_30414110","LONGYTBG12");
			//lay du lieu theo kieu unicode
			$db->exec("set names utf8");
			//lay ket qua tra ve theo kieu object
			$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			return $db;
		}
	}
 ?>