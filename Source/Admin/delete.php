<?php
       include("../connect.php");

            $enroll=$_GET['Enroll_no'];
            $deletequery="DELETE FROM exam_form WHERE Enroll_no=$enroll"; 
            $query = mysqli_query($con,$deletequery);
            header('location:astud_data.php');
?>
