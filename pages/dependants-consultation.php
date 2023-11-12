<div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Consultations</b></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">

                
                 <?php
                  if(isset($_GET['status']) && $_GET['status'] === 'success'){
                      echo '<div class="alert alert-success"><i class="fa fa-check-circle"></i> <b>Success!</b> Data saved!</div>';
                    }else{
                      echo '<div class="alert alert-info"><i class="fa fa-envelope"></i> This screen displays the consultations records</div>';                        
                  }
                ?>


                <table class="table table-hover">
                  
                    <thead>
                      <th><i class="fa fa-user"></i></th>
                      <th>Patient's Name</th>
                      <th>Age</th>
                      <th>Sex</th>
                      <th>Date Added</th>
                      <th>
                      Done
                      </th>
                          
                    </thead>
                  
                  <tbody>
                    <?php

                      $query = "SELECT * FROM `consult` JOIN patient ON patient.id = consult.csid WHERE pt_type = 0";
                      $res = mysqli_query($conn,$query);
                      while($rows = mysqli_fetch_assoc($res)):  
                    ?>
                    <tr>
                      <td><i class="fa fa-user"></i></td>
                      <td><?=$rows['first_name'];?> <?=$rows['middle_name'];?> <?=$rows['last_name'];?> <?=$rows['extension_name'];?></td>
                      <td><?=$rows['age'];?></td>
                      <td><?=$rows['sex'] == 1 ? "Male" : "Female";?></td>
                      <td><?=$rows['date_added'];?></td>
                      
                       <td >
                          <a><i class="fas fa-check"></i>  </a>
                          
                        </td>
                        
                    </tr>
                  <?php endwhile;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer-->
            </div>

