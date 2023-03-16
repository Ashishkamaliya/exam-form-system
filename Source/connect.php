<?php
$hostnm='localhost';
$username='root';
$password='';
$dbname='hvc';

$con=mysqli_connect($hostnm,$username,$password,$dbname);

if($con){
    echo "";
}
else{
    echo'<script>alert("Failed To Connect..");</script>';
}
?>