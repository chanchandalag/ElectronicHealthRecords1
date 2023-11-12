  <div class="row gy-2">
    <div class="col-md-4">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h2><?=$data['male'];?></h2>
                <p><b>Male Patient</b></p>
              </div>
              <div class="icon">
                <i class="fas fa-male"></i>
              </div>
              <a href="/?page=allpatient&view=1" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h2><?=$data['female'];?></h2>
                <p><b>Female Patient</b></p>
              </div>
              <div class="icon">
                <i class="fas fa-female"></i>
              </div>
              <a href="/?page=allpatient&view=0" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <!-- small card -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h2><?=$data['total'];?></h2>
                <p><b>Total Patient</b></p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="/?page=allpatient" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>

    <div class="row">
     <div class="col-md-9">
 
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                 <!-- <i class="far fa-chart-bar"></i>
                  Bar Chart-->
                </h3>

                <!--<div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>-->
              </div>
              <div class="card-body">
               
                <canvas id="barchart"></canvas>


              </div>
              <!-- /.card-body-->
            </div>
      </div>


  



  
               <div class="col-lg-3">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <div class="card-title">Recently Added</div>
              </div>
              <div class="card-body">
                
                  <table class="tables">
                      <thead>
                          <th>Name</th>
                          <th>date</th>
                      </thead>
                      <tbody>
                        <?php
                        /*--- RECENT ---*/
                        $ab = "SELECT * FROM patient ORDER BY id DESC LIMIT 9";
                        $cd = mysqli_query($conn,$ab);

                         while($r = mysqli_fetch_assoc($cd)):?>
                          <tr>
                            <td><?=$r['last_name'];?>, <?=$r['first_name'];?></td>
                            <td><?=$r['added_date'];?></td>
                      </tr>
                    <?php endwhile;?>
                      </tbody>
                  </table>

              </div>
              </div>                          
            </div>
         </div>
