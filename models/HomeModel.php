<?php 
	trait HomeModel{
		//san pham noi bat(6sp)
		public function modelHotProduct(){
			$db = Connection::getInstance();
			$query = $db->query("select * from products order by id desc limit 0,6");
			return $query->fetchAll();
		}
		//lay cac danh muc co chua san pham ben trong
		public function modelCategories(){
			$db = Connection::getInstance();
			$query = $db->query("select * from categories where id in (select category_id from products)");
			return $query->fetchAll();
		}
		//lay cac san pham thuoc danh muc
		public function modelProducts($category_id){
			$db = Connection::getInstance();
			$query = $db->query("select * from products where category_id = $category_id order by id desc");
			return $query->fetchAll();
		}
		//san 10 tin noi bat de hien thi ow trang chu
		public function modelHotNews(){
			$db = Connection::getInstance();
			$query = $db->query("select * from news order by id desc limit 0,10");
			return $query->fetchAll();
		}
	}
 ?>