<div class="content container">
            <div class="header-preview mt-5">
                    <img src="images/MAUTECH-Post-UTME-Form-o3schools.jpeg" alt="">
                    <h3><strong>Preview project</strong></h3>
            </div>
            <div class="preview-list">
                <ul>
                    <li class="preview-item">
                        <div class="title">
                            <p><strong>Title:</strong></p> 
                        </div>
                        <div class="title-content">
                            <p><?=$row->title; ?></p>
                        </div>
                    </li>

                    <li class="preview-item">
                        <div class="title">
                            <p><strong>Author:</strong></p> 
                        </div>
                        <div class="title-content">
                            <p><?=$row->author; ?></p>
                        </div>
                    </li>
                    <li class="preview-item">
                        <div class="title">
                            <p><strong>Submitted:</strong></p>
                        </div>
                        <div class="title-content">
                            <p><?=$row->dateandtime; ?></p>
                        </div>
                    </li>
                
                    <li  class="preview-item">
                        <div class="title">
                            <p><strong>Abstract:</strong></p>
                        </div> <br>
                        <div class="title-content">
                            <p><?=$row->abstract; ?></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="alert alert-primary preview-footer" role="alert">
              <div class="row">
                <div class="col-md-10">
                    <p><?=$row->title; ?></p>
                </div>
                <div class="col-md-2">
                    <a href="<?=base_url($row->file); ?>" class="btn btn-outline-light mr-5">Download/View</a>
                </div>
              </div>
            </div>
        </div>