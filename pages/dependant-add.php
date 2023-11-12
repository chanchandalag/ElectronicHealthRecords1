<?php
//visitor-add

include "../db_conn.php";

extract($_POST);

$sql = "INSERT INTO `visitor` (`v_id`, `f_name`, `m_name`, `l_name`, `e_name`, `d_sex`, `d_home_address`, `d_age`, `d_dob`, `d_name`, `d_relationship`, `d_mobile`, `d_telephone`, `d_h_address`, `d_email`) VALUES (NULL, '$fname', '$mname', '$lname', '$ename', '$sex', '$haddress', '$age', '$dob', '$name', '$relationship', '$mnum', '$tnum', '$home', '$emailadd')";

$process = mysqli_query($conn,$sql);

if($process){
	header("location: /?page=dependants-record&status=success");
}else{
	echo 'DB error, fck!';
}


//var_dump($_POST);

