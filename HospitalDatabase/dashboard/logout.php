<?php
       session_start();
	   $_SESSION['user']="false";
       session_unset();
       session_destroy();
       header('Location: ../login.php?login=Successfullylogout');
       exit();
?>