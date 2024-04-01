<?php
    include ('../config/dbconnect.php');
    
   
            
    
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_FILES['profile']) && isset($_POST['save'])){
        if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['gender'] )){
            // echo "Please fill out all required fields.";
            // echo "<script language='javascript'>";
            // echo "alert('Please fill out all required fields')";
            // echo "</script>";
            header("Location:student.php");
        }   
       else{
        echo "<pre>";
        print_r($_FILES["profile"]);
        echo"</pre>";
      
        $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
        $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

        if(!empty($_FILES['profile'])){
            $tmpFileName = $_FILES['profile']['tmp_name'];
            $fileName = $_FILES['profile']['name'];
            $targetDir = "uploads/";

            $fileExtension = explode('.',$fileName);
            
            $fileActualExtension = strtolower(end($fileExtension));
            $newFileName = uniqid('',true).".". $fileActualExtension;
            $targetFilePath = $targetDir. $newFileName;
          

           

            $allowfileType = array('jpg','png','jpeg');
           
            if(in_array($fileActualExtension,$allowfileType)){
                if(move_uploaded_file($tmpFileName,"../uploads/".$fileName)){
                    date_default_timezone_set('Asia/Phnom_Penh');
                    $enrolldate = date("Y-m-d");
                    echo $enrolldate;
                    $sql = "INSERT INTO students (firstname,lastname,gender,profile,enrolldate) VALUES ('$fname','$lname','$gender','$newFileName','$enrolldate')";
                    try {
                       $conn->exec($sql);
                        echo "Insert Into database succesfully";
                    } catch (\PDOException $th) {  
                        echo "Error Insert to Database:" . $th->getMessage();
                    }
                    
                }else{

                    echo" error move image";

                }
            }
            else{
                echo "error invalid type";
            }
            


        }
    }
        
       
}
?>
