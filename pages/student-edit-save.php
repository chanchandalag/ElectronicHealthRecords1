<?php
//patient-edit-save

include "../db_conn.php";

extract($_POST);


$save_query = "UPDATE patient SET ID_number='$idnum', first_name='$fname', middle_name='$mname', last_name='$lname', extension_name='$ename', email='$email', current_address='$caddress', permanent_address='$paddress', sex='$sex', course='$course', year='$year', section='$section', brgy='$brgy', municipality='$municipality', province='$province', contact='$contact', civil_status='$cstatus', nationality='$nationality' age='$age', dob='$dob', name='$name', relationship='$relationship', mobile='$mobile', telephone='$telephone', home_address='$haddress', email_add='$eadd', WHERE id = '$userid'";

$process = mysqli_query($conn,$save_query);

if($process){
	header("location: /?page=students-record&status=success");
}else{
	echo 'DB error, fck!';
}

