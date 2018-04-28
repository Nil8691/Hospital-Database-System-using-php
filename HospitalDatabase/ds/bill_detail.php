<?php
include_once'../dashboard/dashboard.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hospital Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<div style="margin-left:240px;">
		<div class="page-header">
    <h1 style="margin-left:30px;">Bill Entry</h1>      
  </div>
	  <form action="../include/config_hospitaldetail.php" method="POST">
    <div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Patient id</label>
      <input type="Text" class="form-control" id="email" name="patient_name"  placeholder="Enter Patient id">
    </div>
    <div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Doctor Charge</label>
      <input type="Number" class="form-control" id="pwd" name="age"  placeholder="Doctor Charge">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Medical Charge</label>
      <input type="Number" class="form-control" id="pwd" name="number"  placeholder="Medical Charge">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Room Charge</label>
      <input type="Text" class="form-control" id="pwd" name="gender"  placeholder="Room Charge">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Operation Charge</label>
      <input type="Text" class="form-control" id="pwd" name="disease"  placeholder="Operation Charge">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Patient Type</label>
      <input type="Text" class="form-control" id="pwd" name="type"  placeholder="Inpatient/outpatient">
    </div>
	<button type="submit" class="btn btn-default" style="margin-left:2%" name="bill_detail">Submit</button>
  </form>
</div>
</body> 
</html>