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
    <h1 style="margin-left:30px;">All Doctor List</h1>      
  </div>
	<?php
		include_once'../database/database_connection2.php'; 
		$Query = "Select d.doctor_id,d.doctor_name,d1.department_name,d.gender from doctor d
		left outer join department d1 
		on d.department_id=d1.department_id";
		$stmt = mysqli_query($conn,$Query);
		$result = mysqli_num_rows($stmt);
		if($result > 0)
		{
	?>
		<table class="table table-hover">
			<thead>
			  <tr>
				<th>Doctor_id</th>
				<th>Doctor_Name</th>
				<th>Department</th>
				<th>Gender</th>
			  </tr>
			</thead>
	<?php
			$row=0;
			while($rows = mysqli_fetch_assoc($stmt))
			{
				$row=$row+1;
				echo"<tbody>
      					<tr>
							<td>{$row}</td>
							<td>{$rows['doctor_name']}</td>
							<td>{$rows['department_name']}</td>
							<td>{$rows['gender']}</td>
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