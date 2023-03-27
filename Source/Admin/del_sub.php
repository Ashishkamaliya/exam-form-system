<?php
       include("../connect.php");

            $sub_code=$_GET['subject'];
            $deletequery="DELETE FROM subjects WHERE Sub_id='$sub_code'"; 
            $query = mysqli_query($con,$deletequery);
            header('location:view_sub.php');
?>
