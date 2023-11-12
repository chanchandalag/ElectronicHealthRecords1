<?php


include "../db_conn.php";

extract($_POST);

$save_query = "INSERT INTO `consult` (`cid`,`csid`, `prescription`) VALUES (NULL, '$csid', '$prescription')";

$process = mysqli_query($conn,$save_query);

if($process){
	header("location: /?page=consultation&status=success");
}else{
	echo 'DB error, fck!';
}

