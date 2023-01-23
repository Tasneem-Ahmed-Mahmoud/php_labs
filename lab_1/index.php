
<?php



ini_set("display_errors","1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL);
session_start();

// echo $s;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="mt-5 ">
    


<div class="container mt-5">


<?php 
if(isset($_SESSION["user"])){
  
  ?>
  <a href="./profil.php">Go To Yur Propile</a>
<h4>thank you for conact us</h4>
<?php 
foreach($_SESSION["user"] as $key => $value){?>


<strong> <?= $key; ?></strong> <span>  :<?= $value;?></span><br><br>

<?php }}
?>

<?php  
// echo $_SESSION["user"]["message"];

// print_r($_SESSION)["user"];

if(isset($_SESSION["error"])){
    foreach($_SESSION["error"] as $value){
    ?>

<div class="alert alert-danger" role="alert">
 <h4><?php  echo $value; ?></h4>
</div>

<?php  } }  
 unset($_SESSION["error"]);

?>
    <form action="validate.php" method="POST">

  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?php  if(isset($_SESSION["users"]["name"])){echo $_SESSION["users"]["name"];}else echo '';?>">
</div>

    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="<?php  if(isset($_SESSION["users"]["email"])){echo $_SESSION["users"]["email"];}else echo '';?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" placeholder="<?php  if(isset($_SESSION["users"]["message"])){echo $_SESSION["users"]["message"];}else echo '';?>" ></textarea>
</div>
<div class="col-auto">
    <input type="submit" value="send....." class="btn btn-info">
  </div>



  
    </form>
</div>
</body>
</html>