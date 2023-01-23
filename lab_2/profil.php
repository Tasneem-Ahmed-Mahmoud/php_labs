<?php
include_once("./general.php");

$file=fopen("file.text","a");
$lins=file("file.text");
$keys=["vist Date :","ip Address :" ,"Email :","Name :"];
foreach($lins as $line){

$line=explode(",",$line);
$user=array_combine($keys,$line);
// print_r($user);
foreach($user as  $key =>$value){
  echo "<h3> $key $value</h3>";
}


echo "<hr>";

}

?>