                <?php
                foreach ($students as $student): ?>
                <tr>
                    <td>
                        <?= $student ?>
                    </td>
                    <!-- problem here make it position centered -->
                    <td>
                        <div class="rounded-circle bg-secondary " style="width: 30px; height: 30px; ">
                        </div>
                    </td>
                    <td>Sok</td>
                    <td>Sakda</td>
                    <td>Male</td>
                    <td>03-05-4023 </td>
                    <td>
                        <div class="dropdown ">
                            <button class="btn  " type="button" id="action-dropdown" data-bs-toggle="dropdown">
                                <!--  three dot vertical -->
                                <i class="bi bi-three-dots-vertical"></i>

                            </button>
                            <ul class="dropdown-menu" aria-labelledby="action-dropdown">
                                <li>
                                    <a class="dropdown-item d-flex justify-content-center" href="#">
                                        Edit
                                        <i class="bi bi-pencil ms-3"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex justify-content-center" href="#">
                                        Delete
                                        <i class="bi bi-trash ms-3"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </td>


                </tr>
                    
                  
        // if(isset($_FILES["customFile"])){
        //     $fileType = array("jpeg"=>"image/jpeg","png"=>"image/png","jpg"=>"image/jpg");
        //     $imgName = $_FILES["customFile"]["name"];
        //     $imgType = $_FILES["customFile"]["type"];
        //     $imgSize = $_FILES["customFile"]["size"];

        //     $extension = pathinfo($imgName,PATHINFO_EXTENSION);
        //     if(!array_key_exists($extension,$fileType)){
        //         echo "File isn't invalid";
        //     }
            
        //     if(in_array($imgType,$fileType)){
        //         if(file_exists("upload/".$imgName)){
        //             echo $imgName. "Already exist";
        //         }
        //         else{
        //             move_uploaded_file($_FILES["customFile"]["tmp_name"], "upload/".$imgName);
        //             echo "Added Successfully";
        //         }
        //     }
        // }
        // $imgName = $_FILES["profile"]["name"];
        // $imgTmp = $_FILES["profile"]["tmp_name"];
        // $imgSize = $_FILES["profile"]["size"];
        // $imgError = $_FILES["profile"]["error"];

        // if($imgError == 0){
        //     if($imgSize>125000){
        //         $em= "Sorry, your file is too large";
        //         header("Location:student.php");
        //     }else{
        //         $imgExtension = pathinfo($imgName,PATHINFO_EXTENSION);
        //         $imglowercase= strtolower($imgExtension);
        //         echo $imglowercase;
        //     }
        //     $allowFile = array("jpg","png","jpeg");
        //     if(in_array($imglowercase,$allowFile)){
        //         $new_imgName= uniqid("IMG-",true).'.'. $imglowercase;
        //         $img_uploadPath = 'uploads/'. $new_imgName;
        //         if(move_uploaded_file($_FILES["profile"]["tmp_name"],$img_uploadPath)){
        //             echo "Upload successfully";
        //         }
        //         else{
        //             echo "error upload";
        //             var_dump($_FILES["profile"]["error"]);
        //         }
        //     }
        //     else{
        //         $em= "File is not allowed to upload";
        //         // header("Location:student.php");
        //     }
        // }


        // if($gender != 'Select gender' ){
        //     $enrolldate = date("Y-m-d");
        //     //  $profile = isset($_POST['profile'])? $_File['customFile']["name"] : null;
        //     // $profile = $_POST["customFile"]["name"];
            
        //     $sql = "INSERT INTO students (firstname,lastname,gender,profile,enrolldate) VALUES (?,?,?,?,?)";
        //     $isSuccess = $conn->prepare($sql);
        //     $isSuccess->execute([$fname,$lname,$gender,$profile,$enrolldate]);
            
        //     if($isSuccess){
        //         echo "Added Succesfully";
        //     }
        //     else{
        //         echo "Error:" . $conn->errorCode();
        //     }
        //     $conn = null;
        // }

            <?php endforeach; ?>
