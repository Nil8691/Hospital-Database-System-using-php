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
    <h1 style="margin-left:30px;">Admission Form</h1>      
  </div>
	  <form action="../include/config_hospitaldetail.php" method="POST">
    <div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Patient Name</label>
      <input type="Text" class="form-control" id="email" name="patient_name"  placeholder="Enter Patient Name">
    </div>
    <div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Patient Age</label>
      <input type="Number" class="form-control" id="pwd" name="age"  placeholder="Age">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Patient Phone No.</label>
      <input type="Number" class="form-control" id="pwd" name="number"  placeholder="Patient Phone No.">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Patient Gender</label>
      <input type="Text" class="form-control" id="pwd" name="gender"  placeholder="Patient Gender">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Disease</label>
      <input type="Text" class="form-control" id="pwd" name="disease"  placeholder="Disease">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Doctor id</label>
      <input type="Number" class="form-control" id="pwd" name="doctorid"  placeholder="Doctor id">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Patient Type</label>
      <input type="Text" class="form-control" id="pwd" name="patient_type"  placeholder="Inpatient/outpatient">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Admission Date</label>
      <input type="Text" class="form-control" id="pwd" name="admissiondate"  placeholder="----/--/-- format">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Discharge Date</label>
      <input type="Text" class="form-control" id="pwd" name="dischargedate" placeholder="Discharge date">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Advance Payment</label>
      <input type="Number" class="form-control" id="pwd" name="advancepayment" placeholder="Advance Payment">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Bednumber</label>
      <input type="Number" class="form-control" id="pwd" name="bednumber" placeholder="Bed Number">
    </div>
    <button type="submit" class="btn btn-default" style="margin-left:2%" name="inpatient_detail">Submit</button>
  </form>
</div>
</body> 
</html>