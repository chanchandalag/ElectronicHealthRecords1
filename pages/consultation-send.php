<?php
//consult-send

include "../db_conn.php";

$sid = $_GET['id'];

$save_query = "INSERT INTO `consult` (`cid`, `csid`) VALUES (NULL, $sid)";

$process = mysqli_query($conn,$save_query);

if($process){
	header("location: /?page=consultation&status=success");
}else{
	echo 'DB error, fck!';
}

