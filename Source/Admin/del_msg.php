<?php
       include("../connect.php");

            $message_id=$_GET['id'];
            $deletequery="DELETE FROM message WHERE msg_id='$message_id'"; 
            $query = mysqli_query($con,$deletequery);
            header('location:acontact_data.php');
?>
