<?php
include('connection.php');

   $id = $_GET['i'];
    $query = "delete  from garbageinfo WHERE Id = '$id'" ;

    $data = mysqli_query($con,$query);
    
    if($data) {

      header('Location: http://localhost/Waste_Website/waste-management-system/adminlogin/index.php');
      exit;
    }
    else {
        echo "<font color='red'>Failed to delete!";
    }

?>