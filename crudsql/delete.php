<?php 
    include('../config/dbconnect.php');
    $uid = $_GET['id'];
    if(isset($_POST['delete'])){
        
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