<?php
include_once '../database/database_connection2.php';
	if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($conn,$_POST['id']);
		if(empty($id))
		{
			header("Location: ../dashboard/doctordelete.php?Notselected");
		}
		
		$Query="DELETE FROM doctor where doctor_id = '$id'";
		$stmt=mysqli_query($conn,$Query);
		if($stmt)
		{
			header("Location: ../dashboard/doctordelete.php?SuccessfullyDelete");
		}
		else
		{
			header("Location: ../dashboard/doctordelete.php?Notdelete");
		}
	}
	if(isset($_POST['deletein']))
	{
		$id = mysqli_real_escape_string($conn,$_POST['id']);
		if(empty($id))
		{
			header("Location: ../dashboard/deleteinpatient.php?Notselected");
		}
		
		$Query="DELETE FROM inpatient_detail where patient_id = '$id'";
		$stmt=mysqli_query($conn,$Query);
		if($stmt)
		{
			header("Location: ../dashboard/deleteinpatient.php?SuccessfullyDelete");
		}
		else
		{
			header("Location: ../dashboard/deleteinpatient.php?Notdelete");
		}
	}
	if(isset($_POST['deleteout']))
	{
		$id = mysqli_real_escape_string($conn,$_POST['id']);
		if(empty($id))
		{
			header("Location: ../dashboard/deleteinpatient.php?Notselected");
		}
		
		$Query="DELETE FROM outpatient_detail where patient_id = '$id'";
		$stmt=mysqli_query($conn,$Query);
		if($stmt)
		{
			header("Location: ../dashboard/deleteoutpatient.php?SuccessfullyDelete");
		}
		else
		{
			header("Location: ../dashboard/deleteoutpatient.php?Notdelete");
		}
	}
	if(isset($_POST['deletebill']))
	{
		$id = mysqli_real_escape_string($conn,$_POST['id']);
		if(empty($id))
		{
			header("Location: ../dashboard/deletebill.php?Notselected");
		}
		
		$Query="DELETE FROM billing_detail where bill_number = '$id'";
		$stmt=mysqli_query($conn,$Query);
		if($stmt)
		{
			header("Location: ../dashboard/deletebill.php?SuccessfullyDelete");
		}
		else
		{
			header("Location: ../dashboard/deletebill.php?Notdelete");
		}
	}
    
	if(isset($_POST['select']))
	{
		$option=$_POST['datafield'];
		if($option == 'Doctor')
		{
			header("Location: ../dashboard/doctordelete.php");
		}
		if($option == 'Inpatient')
		{
			header("Location: ../dashboard/deleteinpatient.php");
		}
		if($option == 'Outpatient')
		{
			header("Location: ../dashboard/deleteoutpatient.php");
		}
		if($option == 'Bill')
		{
			header("Location: ../dashboard/deletebill.php");
		}
	}
	else
	{
		Echo"Hello1";
	}
?>