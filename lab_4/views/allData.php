


<?php
// print_r($allData);

$start=(isset($_GET["start"])&& is_numeric($_GET["start"])&& $_GET["start"]>0)?$_GET["start"]:0;
    $allData=$glass->get_selected_records($start);

    
$commen="index.php?view=allData&start=";
$prev= (isset($_GET["start"]) && $_GET["start"]>0 )?$_GET["start"]-5:0;
$next=$start+5;
$prev=$commen.$prev;
$next=$commen.$next;



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

  




    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">imge</th>
      <th scope="col">code</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
if(!empty($allData)){
foreach($allData as $data){  
?>
 <tr>
      <td><?= $data["product_name"]?></td>
      <td>  <img src="images/<?php echo str_replace(".","tz.",$data["Photo"]);?>" alt="" srcset="" > </td>
      <td><?= $data["PRODUCT_code"]?></td>
      <td>  <a href="index.php?id=<?=$data['id'];?>&view=details">see more</a></td>
    </tr>
   <?php  }}?>
  </tbody>
</table>
<div class="d-flex  " >
<a href="<?php echo $prev?>"   class="btn btn-info">prev</a> 
<a href="<?php echo $next?>" class="btn btn-info">next</a>
</div>
    </div>
</div>
</body>
</html>