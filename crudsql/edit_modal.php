<!-- Edit Modal -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<script>
                    function updateImagePreview(input) {
                        console.log("Function called"); // Add this line for debugging
                        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var imagePreview = document.getElementById('selectedImagePreview');
                imagePreview.src = e.target.result;
                console.log("Image preview element:", imagePreview);

                console.log("Image preview src updated:", imagePreview.src);

            }
            reader.readAsDataURL(input.files[0]);
            }else {
                console.error("No file selected or error reading file");
                }   
                    }
                    
            </script>
    
</body>
</html>

<div class="modal fade" id="updateStuModalDialog<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="ModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ModalLabel">Update Student</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- form -->
                            <form action="crudsql/update.php?id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data" >
                                

                                <div class="mb-3">

                                    <label for="#fName">First name</label>
                                    <input type="text" class="form-control" id="fName" name="fname" value="<?php echo $row['firstname'];?>" >
                                </div>
                                <div class="mb-3">
                                    <label for="#lName">Last name</label>
                                    <input type="text" class="form-control" id="lName" name="lname" value="<?php echo $row['lastname']?>" >
                                </div>
                                <div class="mb-3">
                                    <label for="#gender">Gender</label>
                                    <select class="form-select form-select-md mb-3" aria-label="Large select example" name="gender"  >
                                        <option selected disabled  >Select gender</option>
                                        <option value="male"<?php if($row['gender'] == 'male') echo 'selected'?>>male</option>
                                        <option value="female"<?php if($row['gender'] == 'female') echo 'selected' ?>>female</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="#enroll">Enroll Date</label><br>
                                    <input type="date"  id="enroll" name="enroll" value="<?php echo $row['enrolldate']?>">
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <label for="imageSelect" class="d-flex my-3 align-items-center justify-content-center text-center selectedImage" style="width:100px;height:100px;border:1.5px solid gray ; border-radius:10px; ">
                                        <img id="selectedImagePreview" src="<?php echo 'uploads/'.$row['profile'];?>"  style="width:100px;height:100px;border:1.5px solid gray ; border-radius:10px; "  > 
                                       
                                    </label>

                                    <input type="file"  class="form-control-file" id="imageSelect" name="profile" onchange="updateImagePreview(this)" >
                                </div>

                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close" >Close</button>
                                    <button type="submit" class="btn btn-primary" name="update" >Update</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            

            




