<?php
//medical-send

include "../db_conn.php";

$sid = $_GET['id'];

$save_query = "INSERT INTO `dental` (`d_id`, `s_id`) VALUES (NULL, $sid)";

$process = mysqli_query($conn,$save_query);

if($process){
  header("location: /?page=dental-records&status=success");
}else{
  echo 'DB error, fck!';
}

