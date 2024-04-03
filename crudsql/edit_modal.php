<div class="modal fade" id="updateStuModalDialog" tabindex="-1" aria-labelledby="ModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ModalLabel">Update Student</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- form -->
                            <form action="" method="POST" >
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
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close" >Close</button>
                                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            
    
</body>
</html>


