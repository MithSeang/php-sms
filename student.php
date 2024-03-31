<?php include('includes/header.php'); ?>
 <style>
    <?php
        include('style.css');
    ?>
</style> 
<!-- sidebar -->
<?php include('includes/sidebar.php'); ?>
<!-- end sidebar -->
<div class="container-fluid content">
    <?php include('includes/top_header.php'); ?>

    <!-- student content -->
    <div class="container-fluid py-3 d-flex justify-content-between ">
        <form class="d-flex " role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="d-flex justify-content-end">
            <div class="btn btn-success mx-4" data-bs-toggle="modal" data-bs-target="#addStuModalDialog"> <i
                    class="bi bi-plus-lg me-1"></i>Add Student </div>
            <!-- add student modal dialog -->

            <div class="modal fade" id="addStuModalDialog" tabindex="-1" aria-labelledby="studentModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="studentModalLabel">Add Student</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- form -->
                            <form action="crudsql/create.php" method="post" enctype="multipart/form-data" >
                                <div class="mb-3">
                                    <label for="#fName">First name</label>
                                    <input type="text" class="form-control" id="fName" name="fname">
                                </div>
                                <div class="mb-3">
                                    <label for="#lName">Last name</label>
                                    <input type="text" class="form-control" id="lName" name="lname" >
                                </div>
                                <div class="mb-3">
                                    <label for="#gender">Gender</label>
                                    <select class="form-select form-select-md mb-3" aria-label="Large select example" name="gender" >
                                        <option selected disabled >Select gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <!-- <label class="form-label" for="imageSelect">Select image to upload Image</label> -->
                                    <input type="file" class="form-control" id="imageSelect" name="profile" />

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close" >Close</button>
                                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- end modal dialog -->
            <div class="btn  btn-outline-primary">Generate Report</div>
        </div>
    </div>

    <table class="table table-striped text-center ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Profile</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>Enroll date</th>
                <th>Action</th>
                <!-- <th>Action</th> -->
            </tr>

        </thead>
        <tbody  >

           <?php
          
           include ('crudsql/create.php');
           include ('crudsql/read.php');
           
           if($result->rowCount()>0){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
              
                echo "<tr  >";
                    echo "<td class='align-data-center'>".$row['id'] ."</td>";
                    echo "<td  >";
                    echo "<div class='rounded-circle bg-secondary profile-img'  >"
                    .$row['profile'];
                    "</div>";
                    echo "</td>";
                    echo "<td class='align-data-center'>".$row['firstname']."</td>";
                    echo "<td class='align-data-center'>".$row['lastname']."</td>";
                    echo "<td class='align-data-center'>".$row['gender']."</td>";
                    echo "<td class='align-data-center'>".$row['enrolldate']."</td>";
                    echo "<td class='align-data-center'>" ;
                        echo "<div class='drop down '>
                        <button class='btn  ' type='button' id='action-dropdown' data-bs-toggle='dropdown'>
                            <!--  three dot vertical -->
                            <i class='bi bi-three-dots-vertical'></i>

                        </button>
                        <ul class='dropdown-menu' aria-labelledby='action-dropdown'>
                            <li>
                                <a class='dropdown-item d-flex justify-content-center' data-bs-toggle='modal' href=''  >
                                    Edit
                                    <i class='bi bi-pencil ms-3'></i>
                                </a>
                                <?php include('crudsql/update.php');?>
                            </li>
                            <li>
                                <a class='dropdown-item d-flex justify-content-center' href='delete.php?id={$row['id']}'>
                                    Delete
                                    <i class='bi bi-trash ms-3'></i>
                                </a>
                            </li>

                        </ul>
                    </div>";
                    echo "</td>";
                echo "<tr>";
            }
           }    
           ?>


            


<?php include('includes/footer.php'); ?>