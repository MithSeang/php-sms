<?php 
    include('../config/dbconnect.php');

    if(isset($_GET['id'])){
        $uid = $_GET['id'];
        $sql = "DELETE FROM students WHERE id = '$uid'";
        $isSuccess = $conn->exec($sql);
        if($isSuccess){
            header("Location:../student.php");
            exit();
        }
        else{
            echo "Error with Delete record";
        }
    }
    $conn=null;
?>