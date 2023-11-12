<?php

//chart.php
include_once "db_conn.php";
$sql = "SELECT 
COUNT(CASE WHEN nose = 1 THEN 0 END) AS 'Nose Trouble',
COUNT(CASE WHEN tubercolosis = 1 THEN 0 END) AS 'Tuberculosis',
COUNT(CASE WHEN cancer = 1 THEN 0 END) AS 'Cancer or Tumor',
COUNT(CASE WHEN kidney = 1 THEN 0 END) AS 'Kidney Trouble',
COUNT(CASE WHEN headaches = 1 THEN 0 END) AS 'Frequent Headaches',
COUNT(CASE WHEN ear = 1 THEN 0 END) AS 'Ear Trouble or Deafness',
COUNT(CASE WHEN highblood = 1 THEN 0 END) AS 'High Blood Pressure',
COUNT(CASE WHEN disorder = 1 THEN 0 END) AS 'Mental Disorder',
COUNT(CASE WHEN cough = 1 THEN 0 END) AS 'Chronic Cough',
COUNT(CASE WHEN dizziness = 1 THEN 0 END) AS 'Dizziness',
COUNT(CASE WHEN asthma = 1 THEN 0 END) AS 'Asthma',
COUNT(CASE WHEN heart = 1 THEN 0 END) AS 'Heart Trouble',
COUNT(CASE WHEN stomach = 1 THEN 0 END) AS 'Stomach Pain or Ulcer',
COUNT(CASE WHEN seizures = 1 THEN 0 END) AS 'Seizures',
COUNT(CASE WHEN dysmennorhea = 1 THEN 0 END) AS 'Dysmennorhea'
FROM `medicalrecords`;";

$query = mysqli_query($conn,$sql);
$sakit = array();
$data = mysqli_fetch_assoc($query);

echo json_encode($data);

