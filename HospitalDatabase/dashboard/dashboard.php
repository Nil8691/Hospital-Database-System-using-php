<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family:Helvetica sans-serif;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn
{
	cursor:pointer;
}

.dropdown-content {
    display: none;
    
}

.dropdown-content a {
    color: black;
    padding: 2px 0px;
    text-decoration: none;
    display: block;
	margin-left:20px;
}

.show {display:block;}
	
.sidenav {
    height: 100%;
    width: 240px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow:scroll;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 14px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 25px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a><img src="../img/MCH-logo.png" height=100px></a>
  <?php session_start(); if(!isset($_SESSION['username'])){ ?>
	<a >You must login first. <a href="../login.php">click here</a></a>
  <?php } else { $user=$_SESSION['username'];  ?>
  <a>Hi, <?php echo $user; ?></a>
  <a href="../dashboard/dashboardhome.php">Introduction</a>
  <a href="../ds/adddoctor.php">New Doctor Register</a>
  <a href="../ds/inpatient_detail.php">Admit Patient</a>
  <a href="../ds/outpatient_detail.php">Out Patient</a>
  <a href="../ds/bill_detail.php">Payment Form</a>
  <a href="../fetch/Doctorlist.php">Doctor List</a>
  <a href="../fetch/inpatient.php">Admit Patient Detail</a>
  <a href="../fetch/outpatient.php">Out Patient Detail</a>
  <a href="../fetch/bill.php">Payment Detail</a>
  <a onclick="myFunction()" class="dropbtn">Manipulation</a>
		  <div id="myDropdown" class="dropdown-content">
			<a href="../dashboard/checkbox.php">Delete</a>
			<a href="#contact">Search</a>
		  </div>
  <a href="../dashboard/logout.php" style="position:fixed">Logout</a>
	<?php } ?>
</div>
	
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
     
</body>
</html> 