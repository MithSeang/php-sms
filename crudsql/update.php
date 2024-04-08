<?php 
    include('../config/dbconnect.php');
    $id=$_GET['id'];

    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $enrolldate = $_POST['enroll'];


        $profile = "";
        if(!empty($_FILES['profile']) && $_FILES['profile']['error'] === 0){
            $tmpFileName = $_FILES['profile']['tmp_name'];
            $fileName = $_FILES['profile']['name'];
            $targetDir = "uploads/";

            $fileExtension = explode('.',$fileName);
            
            $fileActualExtension = strtolower(end($fileExtension));
            $newFileName = $fileName;
            $targetFilePath = $targetDir. $newFileName;

            $allowfileType = array('jpg','png','jpeg');
           
            if(in_array($fileActualExtension,$allowfileType)){
                if(move_uploaded_file($tmpFileName,"../uploads/".$fileName)){
                   
                    $profile= $newFileName;
                    
                }else{

                    echo" error move image";

                }
            }
            else{
                echo "error invalid type";
            }
            

          
        }  
        $sql = "UPDATE students SET firstname='$fname',lastname='$lname',gender='$gender',profile='$profile',enrolldate='$enrolldate' WHERE id= '$id'";
        $isSuccess = $conn->exec($sql);
       
        if($isSuccess){
            header("Location:../student.php");
            exit(); 
        }
        else{
            echo "Error Update:" .$conn->errorInfo()[0];
        }
        
        
    }
    
?>