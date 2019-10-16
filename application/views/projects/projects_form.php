<div class="header-preview mt-5">
        <img src="images/MAUTECH-Post-UTME-Form-o3schools.jpeg" alt="">
        <h3><strong>submit Project</strong></h3>
</div>
<div class="row">
    <div class="col-md-7">
    <?php if ($this->session->flashdata('message')): ?>			
    <?php echo '<div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>'.$this->session->flashdata('message').'</strong>
                            </div>'; 
    ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error_message')): ?>			
    <?php echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>'.$this->session->flashdata('message').'</strong>
                            </div>'; 
    ?>
    <?php endif; ?>
                        

            <form action="<?=base_url("projects/upload_action") ?>" method="POST" enctype="multipart/form-data" class="mt-5">
                    <div class="form-group">
                        <div class="row">
                        <div class="col-md-6">
                                <label for="exampleInputEmail1"><strong>Project Title</strong></label>
                                <input type="text" name="project_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title" required>
                            </div>
                            <div class="col-md-6">
                            <label for="exampleInputPassword1"><strong>Author</strong></label>
                            <input type="text" name="author" class="form-control" id="exampleInputPassword1" placeholder="Enter Author" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                    <label for="dateandtime"><strong>Date</strong></label>
                                    <input type="date" class="form-control" name="dateandtime" id="dateandtime" required> 
                            </div>

                            <div class="col-md-6">
                                    <label for="file"><strong>Choose File</strong></label>
                                    <input type="file" class="form-control" name="document" id="file" required> 
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                                <div class="form-group">
                                        <label for="exampleTextarea"><strong>Abstract</strong></label>
                                        <textarea class="form-control" id="exampleTextarea" name="abstract" rows="3"></textarea>
                                    </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger submitme" name="submit">Submit</button>

            </form>
            
            <br>
            <br>
    </div>
</div>
                    
  