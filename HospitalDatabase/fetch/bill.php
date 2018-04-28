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
<div class="container" style="margin-left:240px;">
	<div class="page-header">
    <h1 style="margin-left:30px;">Bill List</h1>      
  </div>
	<?php
		include_once'../database/database_connection2.php'; 
		$Query = "Select d.bill_number,d.patient_id,d.doctor_charge,d.medical_charge,d.operation_charge,d.room_charge,d.patient_type from billing_detail d";
		$stmt = mysqli_query($conn,$Query);
		$result = mysqli_num_rows($stmt);
		if($result > 0)
		{
	?>
		<table class="table table-hover">
			<thead>
			  <tr>
				<th>Bill Number</th> 
				<th>Patient Id</th>
				<th>Doctor Charge</th>
				<th>Medical Charge</th>
				<th>Operation Charge</th>
				<th>Room Charge</th>
				<th>Patient_type</th>
			  </tr>
			</thead>
	<?php
			while($rows = mysqli_fetch_assoc($stmt))
			{
				echo"<tbody>
      					<tr>
							<td>{$rows['bill_number']}</td>
							<td>{$rows['patient_id']}</td>
							<td>{$rows['doctor_charge']}</td>
							<td>{$rows['medical_charge']}</td>
							<td>{$rows['operation_charge']}</td>
							<td>{$rows['room_charge']}</td>
							<td>{$rows['patient_type']}</td>
						 </tr>
						 </tbody>
            			 ";
			}
		}
		else
		{
			echo"<div class='container'><h4>No Data Available</h4>";
		}
	?>
</table>
</div>
</body> 
</html>