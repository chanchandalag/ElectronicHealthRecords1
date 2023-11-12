<?php


include "../db_conn.php";

extract($_POST);

$save_query = "INSERT INTO `consult` (`cid`,`csid`, `cref_id`, `findings`, `recommendation`, `prescription` ) VALUES (NULL, '$csid', '$crefid', '$findings', '$recommendation', '$prescription')";

$process = mysqli_query($conn,$save_query);

if($process){
	if($pt_type == 1){
		header("location: /?page=consultation&status=success");
	}else{
		header("location: /?page=dependants-consultation&status=success");
	}
}else{
	echo 'DB error, fck!';
}

