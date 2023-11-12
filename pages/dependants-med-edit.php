<?php
$pid = $_GET['id'];
$sql = "SELECT * FROM patient WHERE id=$pid";
$q = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($q);
?>

<div class="card">
              <div class="card-header">
                <h5 class="text-center"><b>MEDICAL SERVICES</b></h5>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="/pages/medicalrecords-edit.php">
                <div class="card-body container">
                <div class="alert alert-dark text-center"><b>MEDICAL EXAMINATION RECORDS</b></div>
                <hr class="hr"/>

                <div class="mb-3">New Record: <span class="text-bold"><?=$row['first_name'] . ' ' . $row['middle_name'] . ' ' . $row['last_name'] . ' ' . $row['extension_name'];?></span></div>

                  
                <h6>NOTE: check the box below if you have the following:</h6>

                <div class="card-body container">
                  <div class="row gy-6"> 
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="nose" name="nose">
                  <label class="form-check-label" for="nose">Nose or throat trouble</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="ear" name="ear">
                  <label class="form-check-label" for="ear">Ear trouble or deafness</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="asthma" name="asthma">
                  <label class="form-check-label" for="asthma">Asthma</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="tubercolosis" name="tubercolosis">
                  <label class="form-check-label" for="tubercolosis">Tuberculosis</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="highblood" name="highblood">
                  <label class="form-check-label" for="highblood">High blood pressure</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="heart" name="heart">
                  <label class="form-check-label" for="heart">Heart trouble</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="cancer" name="cancer">
                  <label class="form-check-label" for="cancer">Cancer or tumor</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="disorder" name="disorder">
                  <label class="form-check-label" for="disorder">Mental disorders</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="stomach" name="stomach">
                  <label class="form-check-label" for="stomach">Stomach pain or ulcer</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="kidney" name="kidney">
                  <label class="form-check-label" for="kidney">Kidney or bladder trouble</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="cough" name="cough">
                  <label class="form-check-label" for="cough">Chronic cough</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="seizures" name="seizures">
                  <label class="form-check-label" for="seizures">Seizures</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="headaches" name="headaches">
                  <label class="form-check-label" for="headaches">Frequent headaches</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="dizzinies" name="dizzinies">
                  <label class="form-check-label" for="dizzinies">Dizziness</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" value="0" id="dysmennorhea" name="dysmennorhea">
                  <label class="form-check-label" for="dysmennorhea">Dysmennorhea</label>
                </div>
              </div>
            </div>
            <hr class="hr"/>

           

              <div class="row gy-6">
                    <div class="form-group col-md-2">
                      <label for="height">Height</label>
                      <input type="text" class="form-control" id="height" name="height" placeholder="by inches" value="">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="weight">Weight</label>
                      <input type="text" class="form-control" id="weight" name="weight" placeholder="by kilo" value="">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="bpressure">Blood Pessure</label>
                      <input type="text" class="form-control" id="bpressure" name="bpressure" placeholder="" value="">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="pulse">Pulse Rate/min.</label>
                      <input type="text" class="form-control" id="pulse" name="pulse" placeholder="" value="">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="respiration">Respiration/min</label>
                      <input type="text" class="form-control" id="respiration" name="respiration" placeholder="" value="">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Body Built</label>
                            <select name="bbuilt" id="bbuilt" class="form-control"> 
                              <option value = "slender">Slender</option>
                              <option value = "meduim">Meduim</option>
                              <option value = "heavy">Heavy</option>
                              <option value = "obese">Obese</option>                                        
                            </select>
                      </div>
                    <div class="form-group col-md-2">
                      <label for="fvision">Far Vision</label>
                      <input type="text" class="form-control" id="fvision" name="fvision" placeholder="" value="">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="nvision">Near Vision</label>
                      <input type="text" class="form-control" id="nvision" name="nvision" placeholder="" value="">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Color Perception Test</label>
                            <select name="colortest" id="colortest" class="form-control"> 
                              <option value = "Adequate">Adequate</option>
                              <option value = "Defective">Defective</option>                                        
                            </select>
                      </div>
                    <div class="form-group col-md-2">
                        <label>Hearing</label>
                            <select name="hearing" id="hearing" class="form-control"> 
                              <option value = "Adequate">Adequate</option>
                              <option value = "Defective">Defective</option>                                        
                            </select>
                      </div>
                    <div class="form-group col-md-2">
                        <label>Audiometry A D</label>
                            <select name="audiometryAD" id="audiometryAD" class="form-control">
                              <option value = ""> </option> 
                              <option value = "Adequate">Adequate</option>
                              <option value = "Defective">Defective</option>                                        
                            </select>
                      </div>
                    <div class="form-group col-md-2">
                        <label>Audiometry A S</label>
                            <select name="audiometryAS" id="audiometryAS" class="form-control">
                              <option value = ""> </option> 
                              <option value = "Adequate">Adequate</option>
                              <option value = "Defective">Defective</option>                                        
                            </select>
                      </div>
                    <input type="hidden" name="userid" value="<?=$_GET['id'];?>"></input>
                    <input type="hidden" name="refid" value="<?=$_GET['process'];?>"></input>
                    
                  </div>

                  

                    
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save"  class="btn btn-block btn-warning btn-lg">Next <i class="fa fa-arrow-right"></i></button>
                </div>
              
              </div>
            </form>
            </div>
                        


