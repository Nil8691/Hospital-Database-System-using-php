<?php
include_once'../dashboard/dashboard.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Join with us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<div style="margin-left:240px;">
		<div class="page-header">
         <h1 style="margin-left:30px;">Select DataField:</h1>      
        </div>
		<form action="../manipulation/manipulatedb.php" method="POST">
		<select class="form-control" style="width:30%;margin:0px auto;" name="datafield" id="sel1">
                <option>Doctor</option>
				<option>Bill</option>
				<option>Inpatient</option> 
				<option>Outpatient</option>
        </select>
			<input type="Submit" name="select" class="btn btn-default"  style="margin-left:47%;margin-top:20px;">
		</form>
	</div>
</body>
</html>