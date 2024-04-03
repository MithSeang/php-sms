<?php
    include ('config/dbconnect.php');
    $result = $conn->prepare("SELECT * FROM students");
    $result->execute(); 
    try {
        // echo "Read Success";
    } catch (PDOException $th) {
       echo "Error:" .$th->getMessage();
    }
?>