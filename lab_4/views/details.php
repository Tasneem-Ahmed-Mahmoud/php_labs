<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body class="mt-5">


<div class="container mt-5  ">
    <div class="row   ">

    <?php
if(!empty($data)){
?>
    <div class="col-4">
    <div class="card" style="width: 18rem;">
  <img src="images/<?php echo $data['Photo'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data['product_name'];?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="index.php?view=dall" class="btn btn-primary">SEE ALL</a>
  </div>
</div>
    </div>
    <?php
}
?>
    </div>
</div>




</body>
</html>