<?php

if(isset($_POST['adddoctor']))
{
	include_once '../database/database_connection2.php'; 
	
	$doctorname = mysqli_real_escape_string($conn,$_POST['doctorname']);
	$departmentid = mysqli_real_escape_string($conn,$_POST['departmentid']);
	$gender = mysqli_real_escape_string($conn,$_POST['gender']);
	
	if(empty($doctorname) || empty($departmentid) || empty($gender))
	{
		header("Location: ../ds/adddoctor.php?detail=empty");
		exit();
	}
	else
	{
			$query = "SELECT * FROM doctor"; 
		    $stmt = mysqli_query($conn,$query);
			$result = mysqli_num_rows($stmt);
			$result = $result+1;
			$query1 = "INSERT INTO doctor values ('$result','$doctorname','$departmentid','$gender')";
			$stmt1 = mysqli_query($conn,$query1);
			if(!$stmt1)
			{
				header("Location: ../ds/adddoctor.php?detail=notregister");
			}
			else
			{
				header("Location: ../ds/adddoctor.php?detail=successfullyregister");
			}
	}
}

if(isset($_POST['patient_detail']))
{
	include_once '../database/database_connection2.php';
	
	$patientname = mysqli_real_escape_string($conn,$_POST['patient_name']);
	$patient_type = mysqli_real_escape_string($conn,$_POST['patient_type']);
	$patient_phone = mysqli_real_escape_string($conn,$_POST['number']);
	$patient_disease = mysqli_real_escape_string($conn,$_POST['disease']);
	$patient_appointmenttime = mysqli_real_escape_string($conn,$_POST['apdate']);
	$patient_opd = mysqli_real_escape_string($conn,$_POST['OPD']);
	$doctor_id = mysqli_real_escape_string($conn,$_POST['doctorid']);
	$patient_age = mysqli_real_escape_string($conn,$_POST['age']);
	$patient_gender = mysqli_real_escape_string($conn,$_POST['gender']);
	
	if(empty($patientname) || empty($patient_type) || empty($patient_phone) || empty($patient_disease) || empty($patient_appointmenttime) || empty($patient_opd) || empty($doctor_id) || empty($patient_age) || empty($patient_gender))
	{
		header("Location: ../ds/outpatient_detail.php?detail=empty");
		exit();
	}
	else
	{
		    $query = "SELECT * FROM outpatient_detail";
		    $stmt = mysqli_query($conn,$query);
			$result = mysqli_num_rows($stmt);
			$result = $result+1;
			$query1 = "INSERT INTO outpatient_detail values ('$result','$patientname','$patient_age','$patient_phone','$patient_disease','$doctor_id','$patient_appointmenttime','$patient_opd','$patient_gender','$patient_type')";
			$stmt1 = mysqli_query($conn,$query1);
			if(!$stmt1)
			{
				header("Location: ../ds/outpatient_detail.php?detail=Notadded");
		        exit();
			}
			else
			{
				header("Location: ../ds/outpatient_detail.php?detail=successfullyregister");
			}
	}
}

if(isset($_POST['inpatient_detail']))
{
	include_once '../database/database_connection2.php';
	
	$patientname = mysqli_real_escape_string($conn,$_POST['patient_name']);
	$patient_type = mysqli_real_escape_string($conn,$_POST['patient_type']);
	$patient_phone = mysqli_real_escape_string($conn,$_POST['number']);
	$patient_disease = mysqli_real_escape_string($conn,$_POST['disease']);
	$admindate = mysqli_real_escape_string($conn,$_POST['admissiondate']);
	$dischargedate = mysqli_real_escape_string($conn,$_POST['dischargedate']);
	$doctor_id = mysqli_real_escape_string($conn,$_POST['doctorid']);
	$patient_age = mysqli_real_escape_string($conn,$_POST['age']);
	$patient_gender = mysqli_real_escape_string($conn,$_POST['gender']);
	$advancepayment = mysqli_real_escape_string($conn,$_POST['advancepayment']);
	$bednumber = mysqli_real_escape_string($conn,$_POST['bednumber']);
	
	if(empty($patientname) || empty($patient_type) || empty($patient_phone) || empty($patient_disease) || empty($admindate) || empty($dischargedate) || empty($doctor_id) || empty($patient_age) || empty($patient_gender) || empty($bednumber))
	{
		header("Location: ../ds/inpatient_detail.php?detail=empty");
		exit();
	}
	else
	{
		    $query = "SELECT * FROM inpatient_detail";
		    $stmt = mysqli_query($conn,$query);
			$result = mysqli_num_rows($stmt);
			$result = $result+1;
			$query1 = "INSERT INTO inpatient_detail values ('$result','$patientname','$patient_age','$patient_gender','$patient_phone','$patient_disease','$doctor_id','$admindate',
			'$dischargedate','$advancepayment','$bednumber','$patient_type')";
			$stmt1 = mysqli_query($conn,$query1);
			if(!$stmt1)
			{
				header("Location: ../ds/inpatient_detail.php?detail=Notadded");
		        exit();
			}
			else
			{
				header("Location: ../ds/inpatient_detail.php?detail=successfullyregister");
			}
	}
}

if(isset($_POST['bill_detail']))
{
	include_once '../database/database_connection2.php';
	
	$patient_id = mysqli_real_escape_string($conn,$_POST['patient_name']);
	$doctor_charge = mysqli_real_escape_string($conn,$_POST['age']);
	$medical_charge = mysqli_real_escape_string($conn,$_POST['number']);
	$opration_charge = mysqli_real_escape_string($conn,$_POST['gender']);
	$room_charge = mysqli_real_escape_string($conn,$_POST['disease']);
	$patient_type = mysqli_real_escape_string($conn,$_POST['type']);
	
	if(empty($patient_id) || empty($doctor_charge) || empty($medical_charge) || empty($opration_charge) || empty($room_charge) || empty($patient_type))
	{
		header("Location: ../ds/bill_detail.php?detail=empty");
		exit();
	}
	else
	{
		    $query = "SELECT * FROM billing_detail";
		    $stmt = mysqli_query($conn,$query);
			$result = mysqli_num_rows($stmt);
			$result = $result+1;
			$query1 = "INSERT INTO billing_detail values ('$result','$patient_id','$doctor_charge','$medical_charge','$room_charge','$opration_charge','$patient_type')";
			$stmt1 = mysqli_query($conn,$query1);
			if(!$stmt1)
			{
				header("Location: ../ds/bill_detail.php?detail=Notadded");
		        exit();
			}
			else
			{
				header("Location: ../ds/bill_detail.php?detail=successfullyregister");
			}
	}
}
?>