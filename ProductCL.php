<?php

/**
 * 
 */
require "DbModel.php";

class ProductCL  
{
	private $db;
	function __construct()
	{
		$this->db = new DbModel();
	}



function index()
	{
		$sql = "SELECT * FROM products WHERE feature =? ";
		$param[] = 1;
	
	 $rs['product_feature'] = 	$this ->db->exuteQuery($sql,$param);

	 	$sql = "SELECT * FROM products ORDER BY id DESC  ";
	 	 $rs['product_new'] = 	$this ->db->exuteQuery($sql);	 

	 	$sql = "SELECT * FROM `product-type` ";
	 	 $rs['product_type'] = 	$this ->db->exuteQuery($sql);	 

	 require "view_products.php";
		
	}


		function type($id)
	{
		$sql = "SELECT * FROM `product-type` ";
	 	 $rs['product_type'] = 	$this ->db->exuteQuery($sql);	 
	 	 $name_type = "";
	 	 foreach ( $rs['product_type'] as $research) {
	 	 	if ($research['type_id'] == $id) {
	 	 	$name_type	= $research['type_name'] ;
	 	 	}
	 	 }
		$sql = "SELECT * FROM `products` WHERE type_id=? ";
	 	$param[] = $id;
	 		 $rs['product_typeRS'] = 	$this ->db->exuteQuery($sql,$param);	 
	 		 require "type.php";
	}


		function detail($id)
	{
		$sql = "SELECT * FROM `product-type` ";
	 	 $rs['product_type'] = 	$this ->db->exuteQuery($sql);	 

		$sql = "SELECT * FROM products WHERE id=?";
		$param[] = $id ;
	 	 $rs['detail_view'] = 	$this ->db->exuteQuery($sql,$param);	
	 	 if (isset($rs['detail_view'])&&count($rs['detail_view'])>0) {
			if ($rs['detail_view'][0]['xem']==null) {
				$rs['detail_view'][0]['xem']=1;
			}
			else
			{
				$rs['detail_view'][0]['xem']++;
			}
			$sql = "UPDATE products SET xem=? WHERE id=?";
			$paracetamon[] = $rs['detail_view'][0]['xem'];
			$paracetamon[] = $id;
				$this ->db->excuteNonQuery($sql, $paracetamon);
	 	  } 
	 	  require "detail.php";
	}


	function cart($id)
	{
		$sql = "SELECT * FROM `product-type` ";
	 	 $rs['product_type'] = 	$this ->db->exuteQuery($sql);	 
	 	 $name_type = "";
	 	 foreach ( $rs['product_type'] as $research) {
	 	 	if ($research['type_id'] == $id) {
	 	 	$name_type	= $research['type_name'] ;
	 	 	}
	 	 }
		$sql = "SELECT * FROM `products` WHERE type_id=? ";
	 	$param[] = $id;
	 		 $rs['product_typeRS'] = 	$this ->db->exuteQuery($sql,$param);	 
	 		 require "cart.php";
	}
}



