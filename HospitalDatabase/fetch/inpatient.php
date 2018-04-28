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
    <h1 style="margin-left:30px;">Admitted Patient List</h1>      
  </div>
	<?php
		include_once'../database/database_connection2.php'; 
		$Query = "Select d.patient_id,d.patient_name,d.patient_age,d.patient_gender,d.patient_phone,d.disease,d1.doctor_name,d.date_of_adm,d.date_of_dis,d.advance_payment,d.bednumber from inpatient_detail d
		left outer join doctor d1 
		on d.doctor_id=d1.doctor_id";
		$stmt = mysqli_query($conn,$Query);
		$result = mysqli_num_rows($stmt);
		if($result > 0)
		{
	?>
		<table class="table table-hover">
			<thead>
			  <tr>
				<th>Id</th>
				<th>Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Contact No.</th>
				<th>Disease</th>
				<th>Consultant Doctor</th>
				<th>Admission Date</th>
				<th>Discharge Date</th>
				<th>Advance Payment</th>
				<th>Bed Number</th>
			  </tr>
			</thead>
	<?php
			$rom=0;
			while($rows = mysqli_fetch_assoc($stmt))
			{
				$rom=$rom+1;
				echo"<tbody>
      					<tr>
							<td>{$rom}</td>
							<td>{$rows['patient_name']}</td>
							<td>{$rows['patient_age']}</td>
							<td>{$rows['patient_gender']}</td>
							<td>{$rows['patient_phone']}</td>
							<td>{$rows['disease']}</td>
							<td>{$rows['doctor_name']}</td>
							<td>{$rows['date_of_adm']}</td>
							<td>{$rows['date_of_dis']}</td>
							<td>{$rows['advance_payment']}</td>
							<td>{$rows['bednumber']}</td>
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