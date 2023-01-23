<?php

require_once("./vendor/autoload.php");
require_once("./config.php");

$pages=["all","details"];
$page=(isset($_GET["view"])&&in_array($_GET["view"],$pages))?$_GET["view"]:"allData";

$glass = new Db();

$id= (isset($_GET['id'])&& is_numeric($_GET['id']))?$_GET['id']:17;

$data = $glass->get_record_by_id("items",$id);

$all=$glass->get_all("items");
// print_r( $all);


if ($page=="all"){
    require_once("./views/all.php");

}elseif($page=="details"){
    require_once("./views/details.php");
}else{
    require_once("./views/allData.php");  
}

?>