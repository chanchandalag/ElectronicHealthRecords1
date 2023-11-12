<?php


include "../db_conn.php";

extract($_POST);

$nose = isset($nose) ? 1 : 0;
$tubercolosis =  isset($tubercolosis) ? 1 : 0;
$cancer = isset($cancer) ? 1 : 0;
$kidney = isset($kidney) ? 1 : 0;
$headaches = isset($headaches) ? 1 : 0;

$ear = isset($ear) ? 1 : 0;
$highblood = isset($highblood) ? 1 : 0;
$disorder = isset($disorder) ? 1 : 0; 
$cough = isset($cough) ? 1 : 0;
$dizziness = isset($dizziness) ? 1 : 0;

$asthma = isset($asthma) ? 1 : 0;
$heart = isset($heart) ? 1 : 0;
$stomach = isset($stomach) ? 1 : 0;
$seizures = isset($seizures) ? 1 : 0;
$dysmennorhea = isset($dysmennorhea) ? 1 : 0;



$sql = "INSERT INTO `medicalrecords` (`mrid`, `student_id`,`ref_id`, `height`, `weight`, `blood_pressure`, `pulse_rate`, `respiration`, `body_built`, `far_vision`, `near_vision`, `color_test`, `hearing`, `audiometry_ad`, `audiometry_as`, `nose`, `tubercolosis`, `cancer`, `kidney`, `headaches`, `ear`, `highblood`, `disorder`, `cough`, `dizziness`, `asthma`, `heart`, `stomach`, `seizures`, `dysmennorhea` ) VALUES (NULL, '$userid', '$refid', '$height', '$weight', '$bpressure', '$pulse', '$respiration', '$bbuilt', '$fvision', '$nvision', '$colortest', '$hearing', '$audiometryAD', '$audiometryAS', '$nose', '$tubercolosis', '$cancer', '$kidney', '$headaches', '$ear', '$highblood', '$disorder', '$cough', '$dizziness', '$asthma', '$heart', '$stomach', '$seizures', '$dysmennorhea' )";

$process = mysqli_query($conn,$sql);

if($process){
	if($pt_type == 1){
		header("location: /?page=medical-next&refid=$refid&uid=$userid&type=1");	
	}else{
		header("location: /?page=medical-next&refid=$refid&uid=$userid&type=0");
	}
	
}else{
	echo 'DB error, fck!';
}


