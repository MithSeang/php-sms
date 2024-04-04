<?php 
    include('../config/dbconnect.php');

    $id= $_GET['id'];
    if(isset($_GET['update'])){

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $profile = $_POST['profile'];
    $enrolldate = $_POST['$enrolldate'];
    
    $update = "UPDATE students SET firstname = '$fname',lastname='$lname',gender= '$gender',profile= '$profile',enrolldate = '$enrolldate' WHERE id = '$id'";
    $isSuccess=$conn->exec($update);
    if($isSuccess){
        echo "Update Successfully";
        header("Location:./student.php");
        exit();
    }

        
    }
?>