<?php
include "../db_conn.php";
//$process = $_GET['refid'];

$uid = $_GET['uid'];


$sql = "SELECT * FROM patient INNER JOIN medicalrecords ON patient.id=student_id WHERE id=$uid";
$q = mysqli_query($conn,$sql);


/*
$data = array();
$sakit = '';

$nose = $row['nose'] == 1 ? array_push($data, 'Nose or throat trouble') : '';
$tb = $row['tubercolosis'] == 1 ? array_push($data, 'Tubercolosis') : '';
$cancer = $row['cancer'] == 1 ? array_push($data, 'Cancer or Tumor') : '';
$kidney = $row['kidney'] == 1 ? array_push($data, 'Kidney or bladder trouble') : '';
$headaches = $row['headaches'] == 1 ? array_push($data, 'Frequent headaches') : '';
$ear = $row['ear'] == 1 ? array_push($data, 'Ear trouble or deafness') : '';
$highblood = $row['highblood'] == 1 ? array_push($data, 'High blood pressure') : '';
$disorder = $row['disorder'] == 1 ? array_push($data, 'Meantal disorder') : '';
$cough = $row['cough'] == 1 ? array_push($data, 'Chronic cough') : '';
$dizziness = $row['dizziness'] == 1 ? array_push($data, 'Dizziness') : '';
$asthma = $row['asthma'] == 1 ? array_push($data, 'Asthma') : '';
$heart = $row['heart'] == 1 ? array_push($data, 'Heart trouble') : '';
$stomach = $row['stomach'] == 1 ? array_push($data, 'Stomach pain or ulcer') : '';
$seizures = $row['seizures'] == 1 ? array_push($data, 'Seizures') : '';
$dysmennorhea = $row['dysmennorhea'] == 1 ? array_push($data, 'Dysmennorhea') : '';


$sakit = implode(', ', $data);
*/
?>

		<table class="table table-stripped">
	<thead>
		<th>Date of Consultation</th>
		<th>Action</th>		
	</thead>
	<tbody>
		<?php while($row = mysqli_fetch_assoc($q)):?>
		<tr>
			<td><?=$row['record_added'];?></td>
			<td><a class="btn btn-info" href="/?page=medical-view&uid=<?=$uid;?>&refid=<?=$row['ref_id'];?>">View</a></td>
		</tr>
	<?php endwhile;?>

	</tbody>
</table>