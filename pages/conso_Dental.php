<?php
include "../db_conn.php";
//$process = $_GET['refid'];

$uid = $_GET['uid'];


$sql = "SELECT * FROM patient INNER JOIN medicalrecords ON patient.id=student_id WHERE id=$uid";
$q = mysqli_query($conn,$sql);

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