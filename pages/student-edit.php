<?php
$id = $_GET['id'];
$query = "SELECT * FROM patient WHERE id='$id'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($res);

?>

<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Edit Patient</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/pages/student-edit-save.php">
               <div class="card-body container">
                  <?php
                    echo '<div class="alert alert-info"><i class="fa fa-envelope"></i><b> PERSONAL INFORMATION</b></div>';
                  ?>
                  <div class="row gy-6">
                  <div class="form-group col-md-6">
                    <label for="idnum">ID No.</label>
                    <input type="text" class="form-control" id="idnum" name="idnum" placeholder="Enter ID No."  value="<?=$row['ID_number'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="course" name="course" placeholder="Enter Course"  value="<?=$row['course'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" value="<?=$row['first_name'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Year</label>
                    <select name="year" id="year" class="form-control"> 
                      <option value = "I">I</option>
                      <option value = "II">II</option>
                      <option value = "III">III</option>
                      <option value = "IV">IV</option>                                  
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mname">Middle Name OR LEAVE IT BLANK</label>
                    <input type="text" class="form-control" id="mname" name="mname" placeholder="N/A" value="<?=$row['middle_name'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="section">Section</label>
                    <input type="text" class="form-control" id="section" name="section" placeholder="Enter Section" value="<?=$row['section'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" value="<?=$row['last_name'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="brgy">Barangay</label>
                    <input type="text" class="form-control" id="brgy" name="brgy" placeholder="Enter Barangay" value="<?=$row['brgy'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="ename">Extension Name OR LEAVE IT BLANK</label>
                    <input type="text" class="form-control" id="ename" name="ename" placeholder="N/A" value="<?=$row['extension_name'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="municipality">Municipality</label>
                    <input type="text" class="form-control" id="municipality" name="municipality" placeholder="Enter Municipality" value="<?=$row['municipality'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email"> Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?=$row['email'];?>">
                  </div> 
                  <div class="form-group col-md-6">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" id="province" name="province" placeholder="Enter Province" value="<?=$row['province'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="caddress">Current Address</label>
                    <input type="text" class="form-control" id="caddress" name="caddress" placeholder="Enter Current Address" value="<?=$row['current_address'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="contact">Contact No.</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact No" value="<?=$row['contact'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="paddress">Permanent Address</label>
                    <input type="text" class="form-control" id="paddress" name="paddress" placeholder="Enter Permanent Address" value="<?=$row['permanent_address'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="cstatus">Civil Status</label>
                    <input type="text" class="form-control" id="cstatus" name="cstatus" placeholder="Enter Civil Status" value="<?=$row['civil_status'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Sex</label>
                    <select name="sex" id="sex" class="form-control"> 
                      <?php
                      if($row['sex'] == 1){ 
                          echo '<option value = "1" selected>Male</option> <option value = "0">Female</option>';
                        }else{ 
                          echo '<option value = "1">Male</option> <option value = "0" selected>Female</option>';
                        }

                      ?>                                       
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter Nationality" value="<?=$row['nationality'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter Age" value="<?=$row['age'];?>">
                  </div>
                  
                
                  <div class="form-group col-md-6" >
                    <label class="input-group-addon"> Date of Birth </label> 
                    <input type="date" placeholder="Payment Log date" name="dob" class="form-control" value="<?=$row['dob'];?>">
                  </div>
                </div>

                <?php
                  echo '<div class="alert alert-info"><i class="fa fa-exclamation-triangle"></i><b> EMERGENCY CONTACT INFORMATION</b></div>';
                ?>
                  <div class="row gy-6">
                  <div class="form-group col-md-6">
                    <label for="name"> Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Complete Name" value="<?=$row['name'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="relationship"> Relationship</label>
                    <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Relationship" value="<?=$row['relationship'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mobile"> Mobile No.</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile no." value="<?=$row['mobile'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="telephone"> Telephone No.</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Enter telephone no." value="<?=$row['telephone'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="haddress"> Home Address</label>
                    <input type="text" class="form-control" id="haddress" name="haddress" placeholder="Enter Home Address" value="<?=$row['home_address'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="eadd"> Email Address</label>
                    <input type="text" class="form-control" id="eadd" name="eadd" placeholder="Enter Email Address" value="<?=$row['email_add'];?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="hidden" name="userid" value="<?=$id;?>">
                  <button type="submit" name="save"  class="btn btn-block btn-success btn-lg">Save Changes</button>
                </div>
              </form>
            </div>