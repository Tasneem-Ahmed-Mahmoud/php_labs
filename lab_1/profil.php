<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL);
session_start();

?>


<?php 
if(isset($_SESSION["user"])){
  
  ?>
 
<h4>welcom in your profile</h4>
<?php 
foreach($_SESSION["user"] as $key => $value){?>


<strong> <?= $key; ?></strong> <span> : <?= $value;?></span><br><br>

<?php }}
?>