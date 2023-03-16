<?php
session_start();
error_reporting(0);
extract($_POST);
$enroll_no = $_POST['enroll'];

include('connect.php');

        $q = mysqli_query($con, "SELECT Enroll_no from exam_form where Enroll_no = '$enroll_no'");
        $rw=mysqli_num_rows($q);

if ($rw == true) {
    echo '<script>alert("You have already Filled form..!");</script>';
}
else if(isset($_POST["submit"]))
{
        $course_nm = $_POST['course'];
        $sem_nm = $_POST['semester'];
        $col_nm = $_POST['college_name'];
        $stud_nm = $_POST['name'];
        $stud_cast = $_POST['cast'];
        $gender = $_POST['gender'];
        $addr = $_POST['address'];
        $ans_lang = $_POST['chkl'];
        $mail_id = $_POST['email'];
        $ph_no = $_POST['phno'];

        if(isset($_POST["sub"]))
        {
            // Retrieving each selected option
            foreach ($_POST['sub'] as $subject)
                $sub_nm = $sub_nm.$subject.",";
        }

        $checkbox = $ans_lang[0].",".$ans_lang[1];

                //image
                // $user = $_POST['USN'];
                $filename = $_FILES['Uimage']['name'];
                $tempname = $_FILES['Uimage']['tmp_name'];
                $date = date('y-m-d');

                $query = "INSERT INTO `exam_form`(`Enroll_no`, `exam_nm`, `clg_nm`, `stud_name`, `gen`, `cast`, `address`, `ans_lang`, `mob_no`, `usr_mail`, `subject`, `date`, `Uimage`) VALUES ('$enroll_no','$course_nm','$col_nm','$stud_nm','$gender','$stud_cast','$addr','$checkbox','$ph_no','$mail_id','$sub_nm','$date','$filename')";

                $data = mysqli_query($con, $query);

                //upload image

                //mkdir("./images/" .$stud_nm);
                $folder = "./images/" . $filename;
                move_uploaded_file($tempname, $folder);

                if ($data) {
                    echo '<script>alert("Form Submitted Successfully..");</script>';
                }
                else
                {
                    echo'<script>alert("Failed To Submit..");</script>';
                }
}
else{
    echo '<script>alert("Something Wrong !!!");</script>';
}


   $qry="SELECT id FROM registration ORDER BY id ASC";
   $result=mysqli_query($con,$qry);
?>