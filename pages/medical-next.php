<?php
$process = $_GET['refid'];

$uid = $_GET['uid'];


$sql = "SELECT * FROM patient INNER JOIN medicalrecords ON patient.id=student_id WHERE id=$uid AND ref_id='$process'";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($q);

$data = array();
$sakit = '';

$nose = $row['nose'] == 1 ? array_push($data, 'Nose or throat trouble') : '';
$tb = $row['tubercolosis'] == 1 ? array_push($data, 'Tubercolosis') : '';
$cancer = $row['cancer'] == 1 ? array_push($data, 'Cancer or Tumor') : '';
$kidney = $row['kidney'] == 1 ? array_push($data, 'Kidney or bladder trouble') : '';
$headaches = $row['headaches'] == 1 ? array_push($data, 'Frequent headaches') : '';
$ear = $row['ear'] == 1 ? array_push($data, 'Ear trouble or deafness') : '';
$highblood = $row['highblood'] == 1 ? array_push($data, 'High blood pressure') : '';
$disorder = $row['disorder'] == 1 ? array_push($data, 'Mental disorder') : '';
$cough = $row['cough'] == 1 ? array_push($data, 'Chronic cough') : '';
$dizziness = $row['dizziness'] == 1 ? array_push($data, 'Dizziness') : '';
$asthma = $row['asthma'] == 1 ? array_push($data, 'Asthma') : '';
$heart = $row['heart'] == 1 ? array_push($data, 'Heart trouble') : '';
$stomach = $row['stomach'] == 1 ? array_push($data, 'Stomach pain or ulcer') : '';
$seizures = $row['seizures'] == 1 ? array_push($data, 'Seizures') : '';
$dysmennorhea = $row['dysmennorhea'] == 1 ? array_push($data, 'Dysmennorhea') : '';


$sakit = implode(', '
	, $data);
?>

<div class="col-lg-12">

<div class="card card-primary">
	<div class="card-header">
		<h5 class="card-title text-bold">Consultation</h5>
	</div>
	<div class="card-body">
		
		<form method="POST" action="/pages/findings-add.php">	
		<div class="form-group">
			<div>Patient Name: <span class="text-bold"> <?=$row['first_name'] . ' ' . $row['middle_name'] . ' ' . $row['last_name'] . ' ' . $row['extension_name'];?> </span></div>
		 
			<div class="mb-3"><p class="text-bold">&raquo; &raquo; &raquo; <?=$sakit;
						?></p></div>
		<label>Findings</label>
		<textarea class="form-control" rows="5" placeholder="Input findings" id="findings" name="findings"></textarea>
		<input type="hidden" name="csid" value="<?=$uid;?>" ></input>
		</div>

		<div class="form-group">
		<label>Recommendation</label>
		<textarea class="form-control" rows="5" placeholder="Input recommendation/suggestions" id="recommendation" name="recommendation"></textarea>
		</div>

		<div class="form-group">
		<label>Prescription</label>
		<textarea class="form-control" rows="5" placeholder="Input prescribed medicine" id="prescription" name="prescription"></textarea>
		</div>


<input type="hidden" name="crefid" value="<?=$process;?>">
<input type="hidden" name="pt_type" value="<?=$_GET['type'];?>">
		<button type="submit" class="btn btn-block btn-success btn-lg">Save</button>
		</form>

	</div>
</div>


</div>