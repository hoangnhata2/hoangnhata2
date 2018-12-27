
<?php
if (!isset($_GET['action'])) {
	$action = "index";
}
else
{
	$action = $_GET['action'];
}
require "ProductCL.php";
$temple = explode("$", $action);
$action = $temple[0];
$Products = new  ProductCL();
 if (count($temple)>1) {
 	$Products -> $action($temple[1]);
 }
else
{
	$Products -> $action();
}
