<?php
//dental-delete

include "../db_conn.php";
$id = $_POST['did'];


$query = "DELETE FROM dental WHERE d_id='$id'";
$process = mysqli_query($conn,$query);


if($process){
	echo 1;
}else{
	echo 'DB Error, Fck!';
}

