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
				<th>Sr. No.</th>
				<th>Doctor_Name</th>
				<th>Department</th>
				<th>Delete</th>
			  </tr>
			</thead>
	<?php
			$num=0; 
			while($rows = mysqli_fetch_assoc($stmt))
			{
				$num=$num+1;
				echo"<form action=../manipulation/manipulatedb.php method=POST><tbody>
      					<tr>
							<td>{$num}</td>
							<td>{$rows['doctor_name']}</td>
							<td>{$rows['department_name']}</td>
							<td><input type='hidden' name=id value={$rows['doctor_id']}><input class='btn btn-default' type=submit name=delete value=delete></td>
						 </tr>
						 </tbody></form>
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