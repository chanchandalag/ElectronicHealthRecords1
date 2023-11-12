<?php
include "../db_conn.php";
$id = $_GET['uid'];


$query = "SELECT * FROM consult INNER JOIN medicalrecords ON consult.csid = medicalrecords.student_id WHERE csid='$id'";
$res = mysqli_query($conn,$query);



while($row = mysqli_fetch_assoc($res)):

var_dump($row);

?>

<div>
	<h5>Findings</h5>
	<p><?=$row['findings'];?></p>
</div>


<hr class="hr"/>

<div>
	<h5>Recommendation</h5>
</div>
<hr class="hr"/>

<div>
	<h5>Prescription</h5>
</div>
<hr class="hr"/>

<?php endwhile;?>