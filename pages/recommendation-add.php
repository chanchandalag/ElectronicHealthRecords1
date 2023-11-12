<?php


include "../db_conn.php";

extract($_POST);

$save_query = UPDATE consult SET recommendation = '$recommendation' WHERE csid = $csid;

$process = mysqli_query($conn,$save_query);

if($process){
	header("location: /?page=consultation&status=success");
}else{
	echo 'DB error, fck!';
}

