<?php
session_start();
include('db.php');
if(isset($_POST['reg'])){
     $full_name=$_POST['name'];
     $father_name=$_POST['fname'];
     $Phone=$_POST['Phone'];
     $gender=$_POST['gender'];
     $class=$_POST['class'];
     $age=$_POST['age'];
     $cnic=$_POST['cnic'];
     $amount=$_POST['amount'];
     $Roll=$_POST['Roll'];
     $password=md5($_POST['password']);
     $allowTypes = array('jpg','png','jpeg','gif'); 
     $dir = 'uploads/';
 $filename = basename($_FILES['img_name']['name']);
 $rand_name = rand(0,500) * time() - 4000000;
 $rand_name .=$filename;
 $filename = $dir.$rand_name;
  if(move_uploaded_file($_FILES["img_name"]["tmp_name"], $filename)){
     $qry="INSERT INTO `student`(`id`, `full_name`, `father_name`, `phone`, `gender`, `class_name`, `age`, `cnic`, `image`, `amount`, `role_no`, `password`) VALUES ('','$full_name','$father_name','$Phone','$gender','$class','$age','$cnic','$filename','$amount','$Roll','$password')";
     $success=mysqli_query($conn,$qry);
     if($success){
        header("location:reg.php");

     }
  }
}



?>

