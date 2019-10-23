<div class="col-md-12">

  <div class="upload row upload-btn">
        <a  class="uploadproject" href="<?=base_url('projects/upload') ?>"><strong>Upload Project</strong></a>
      </div>
      <div class="table-section">
      <?php if ($this->session->flashdata('message')): ?>			
      <?php echo '<div class="alert alert-success">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <strong>'.$this->session->flashdata('message').'</strong>
                              </div>'; 
      ?>
      <?php endif; ?>
        

        
        <div class="table-responsive">
            <table class="table table-hover" id="datatable"  data-toggle="table" data-pagination="true" data-page-size="5" data-search="true">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Date</th>
                  <th scope="col">Title</th>
                  <th scope="col">Author</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  $sn = 1;
                  foreach ($projects as $project ) {
                      echo '<tr>
                              <th scope="row">'.$sn.'</th>
                              <td>'.$project->dateandtime.'</td>
                              <td><a href="'.base_url('projects/preview/'.$project->id.'').'">'.$project->title.'</a></td>
                              <td>'.$project->author.'</td>
                          </tr>';
                      $sn++;
                  }
              ?>
                
                <!-- <tr>
                  <th scope="row">2</th>
                  <td>Nov. 2018</td>
                  <td><a href="preview.html">Design and implementation of PDBMS for stat/or</a></td>
                  <td>Tomlivisky Thomas</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Nov. 2017</td>
                  <td><a href="preview.html">Multivariate analysis to teenage pregnancy in the state</a></td>
                  <td>Moses Gelsman</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Nov. 2016</td>
                    <td><a href="preview.html">Multivariate analysis to problems in money making in the state</a></td>
                    <td>Uchenna Ebuka</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Nov. 2016</td>
                    <td><a href="preview.html">Multivariate analysis to problems that invlolves late coming</a></td>
                    <td>Grace Letti</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Nov. 2015</td>
                    <td><a href="preview.html">OR model to problems in marriage and child bearing in the state</a></td>
                    <td>Ijidai Manemin M.</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Nov.1994 </td>
                    <td><a href="preview.html">Simulation Techniques to hunger and poverty eradication</a></td>
                    <td>Zainab Zainab</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Nov. 1990</td>
                    <td><a href="preview.html">Why Nigeria should adopt skills to schools</a></td>
                    <td>No Timer</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Nov. 1992</td>
                    <td><a href="preview.html">Simulation Techniques to hunger and poverty eradication</a></td>
                    <td>Work Tiredr</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>August 2000</td>
                    <td><a href="preview.html">Simulation Techniques to hunger and poverty eradication</a></td>
                    <td>Jerry Weedson</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>August 2005</td>
                    <td><a href="preview.html">Simulation Techniques to hunger and poverty eradication</a></td>
                    <td>Moses Gelsman</td>
                </tr> -->
              </tbody>
              <tfoot>

              </tfoot>
            </table>
        </div>
        

        </div>
</div>

