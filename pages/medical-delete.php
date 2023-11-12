<?php
//medical-delete

include "../db_conn.php";
$id = $_POST['did'];


$query = "DELETE FROM medical WHERE mid='$id'";
$process = mysqli_query($conn,$query);


if($process){
	echo 1;
}else{
	echo 'DB Error, Fck!';
}

