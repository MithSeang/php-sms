<!-- Delete Modal -->

<div class="modal fade" id="deleteStuModalDialog<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="ModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ModalLabel">Delete Student</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- form -->
                            <form action="crudsql/delete.php?id=<?php echo $row['id']?>" method="POST" >
                             Are you sure you want to delete this record?                      
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close" >Close</button>
                                    <button type="submit" class="btn btn-primary" name="delete" >Delete</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            




