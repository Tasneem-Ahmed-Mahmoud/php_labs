<?php


$message_max_len=255;
$name_max_len=100;
$file_path="file.text";
$message="THANKS FOR ALL";
$id=$_SERVER['REMOTE_ADDR'];
$visited_date_time=str_replace(",","",date("F j, Y, g:i a"));
echo $visited_date_time;
echo $id;


