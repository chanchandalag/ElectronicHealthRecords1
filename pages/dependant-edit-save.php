<?php
//dependant-edit-save

include "../db_conn.php";

extract($_POST);


$save_query = "UPDATE visitor SET  f_name='$fname', m_name='$mname', l_name='$lname', e_name='$ename', d_sex='$sex', d_home_address='$haddress', d_age='$age', d_dob='$dob', d_name='$name', d_relationship='$relationship', d_mobile='$mnum', d_telephone='$tnum', d_h_address='$home', d_email='$emailadd', WHERE id = '$id'";

$process = mysqli_query($conn,$save_query);

if($process){
	header("location: /?page=dependants-record&status=success");
}else{
	echo 'DB error, fck!';
}

