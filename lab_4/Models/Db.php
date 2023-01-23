<?php


interface DbHandler{
  public function connect();
    public function get_record_by_id($table,$id);

    public function get_all($table);
}


class Db implements DbHandler{
private $conn;

public function connect()
{
    $this->conn = mysqli_connect(DB_HOST ,DB_USER ,DB_PASSWORD , DB_NAME);
    if($this->conn){
        return true;
    }
    else {
        return false;
    }
}



public function get_record_by_id($table,$id){
    $this->connect();
   $q="SELECT * FROM  $table WHERE id=$id";
   $res=mysqli_query($this->conn,$q);

    return mysqli_fetch_assoc($res);
}

public function get_all($table){
    $this->connect();
    $q="SELECT * FROM  $table ";
    $res=mysqli_query($this->conn,$q);
 $all=[];
while($row =mysqli_fetch_assoc($res) ){
$all[]=$row;
}

     return  $all;
}




function   get_selected_records($start){
    $this->connect();
$q="SELECT * FROM items  limit $start," .LENGTH;
$res=mysqli_query($this->conn,$q);
$all=[];
while($row =mysqli_fetch_assoc($res) ){
$all[]=$row;
}

    return  $all;

}









}

