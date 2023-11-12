<?php

function check_sakit($sakit){
  return $sakit = $sakit == 1 ? 'checked' : '';
}
$refid = $_GET['refid'];
$id = $_GET['uid'];
$query = "SELECT * FROM `medicalrecords` INNER JOIN patient ON patient.id = medicalrecords.student_id INNER JOIN consult ON consult.cref_id = medicalrecords.ref_id WHERE id = '$id' AND ref_id = '$refid'";
$res = mysqli_query($conn,$query);
while($rows = mysqli_fetch_assoc($res)):  
?>

<div class="card">
              <div class="card-header">
                <div class="card-title"><h3>Medical Services</h3></div>
                <div class="card-tools">
                  <button class="btn btn-info" id="print_btn" onclick="printna('print_div');"><i class="fa fa-print"></i> Print</button>
                </div>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
<div id="print_div">
              <form method="POST" action="">
                <div class="card-body container">
                <div class=" text-center"><b>MEDICAL EXAMINATION RECORD</b></div>
                <hr class="hr"/>

                  <div class="row gy-6">
                    <div class="form-group col-md-3">
                      <label for="id">Student ID Number</label>
                      <input type="text" class="form-control" id="id" name="id" placeholder="N/A" value="<?=$rows['ID_number'];?>">
                    </div>
                     <div class="form-group col-md-3">
                      <label for="date">Date and Time Recorded</label>
                      <input type="text" class="form-control" id="record_added" name="record_added" placeholder="" value="<?=$rows['record_added'];?>">
                    </div>
                </div>
                  <div class="row gy-6">
                    <div class="form-group col-md-3">
                      <label for="fname">First Name</label>
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="" value="<?=$rows['first_name'];?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="mname">Middle Name</label>
                      <input type="text" class="form-control" id="mname" name="mname" placeholder="N/A" value="<?=$rows['middle_name'];?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="lname">Last Name</label>
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="" value="<?=$rows['last_name'];?>">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="ename">Extension Name</label>
                      <input type="text" class="form-control" id="ename" name="ename" placeholder="N/A" value="<?=$rows['extension_name'];?>">
                    </div>
                  </div>
                  <div class="row gy-6">
                  <div class="form-group col-md-2">
                      <label for="sex">Sex</label>
                      <input type="text" class="form-control" id="sex" name="sex" placeholder="" value="<?=$rows['sex'] == 1 ? "Male" : "Female";?>">
                    </div>
                  <div class="form-group col-md-2">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="" value="<?=$rows['age'];?>">
                  </div>
                    <div class="form-group col-md-2">
                    <label for="cstatus">Civil Status</label>
                    <input type="text" class="form-control" id="cstatus" name="cstatus" placeholder="" value="<?=$rows['civil_status'];?>">
                  </div>
                    <div class="form-group col-md-2">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="" value="<?=$rows['nationality'];?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="N/A" value="<?=$rows['course'];?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="contact">Contact No.</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="" value="<?=$rows['contact'];?>">
                  </div>
                  </div>
                  <hr class="hr"/>
                  <div class="alert alert-info"><b>MEDICAL HISTORY - Has applicant suffered from, or been told he had any of the following</b></div>
                  <hr class="hr"/>
                  
                <div class="card-body container">
                  <div class="row gy-6"> 
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="nose" name="nose" <?=check_sakit($rows['nose']);?>>
                  <label class="form-check-label" for="nose">Nose or throat trouble</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="ear" name="ear" <?=check_sakit($rows['ear']);?>>
                  <label class="form-check-label" for="ear">Ear trouble or deafness</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" id="asthma" name="asthma" <?=check_sakit($rows['asthma']);?>>
                  <label class="form-check-label" for="asthma">Asthma</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="tuberculosis" name="tuberculosis" <?=check_sakit($rows['tubercolosis']);?>>
                  <label class="form-check-label" for="tuberculosis">Tuberculosis</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="highblood" name="highblood" <?=check_sakit($rows['highblood']);?>>
                  <label class="form-check-label" for="highblood">High blood pressure</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="heart" name="heart" <?=check_sakit($rows['heart']);?>>
                  <label class="form-check-label" for="heart">Heart trouble</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" id="cancer" name="cancer" <?=check_sakit($rows['cancer']);?>>
                  <label class="form-check-label" for="cancer">Cancer or tumor</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="disorder" name="disorder" <?=check_sakit($rows['disorder']);?>>
                  <label class="form-check-label" for="disorder">Mental disorders</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="stomach" name="stomach" <?=check_sakit($rows['stomach']);?>>
                  <label class="form-check-label" for="stomach">Stomach pain or ulcer</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="kidney" name="kidney" <?=check_sakit($rows['kidney']);?>>
                  <label class="form-check-label" for="kidney">Kidney or bladder trouble</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="cough" name="cough" <?=check_sakit($rows['cough']);?>>
                  <label class="form-check-label" for="cough">Chronic cough</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="seizures" name="seizures" <?=check_sakit($rows['seizures']);?>>
                  <label class="form-check-label" for="seizures">Seizures</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="headaches" name="headaches" <?=check_sakit($rows['headaches']);?>>
                  <label class="form-check-label" for="headaches">Frequent headaches</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="dizzinies" name="dizzinies" <?=check_sakit($rows['dizziness']);?>>
                  <label class="form-check-label" for="dizzinies">Dizziness</label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox"  id="dysmennorhea" name="dysmennorhea" <?=check_sakit($rows['dysmennorhea']);?>>
                  <label class="form-check-label" for="dysmennorhea">Dysmennorhea</label>
                </div>
              </div>
            </div>
                  <hr class="hr"/>
                  <div class="alert alert-info"><b>PHYSICAL EXAMINATION</b></div>
                  <hr class="hr"/>

           

              <div class="row gy-6">
                    <div class="form-group col-md-2">
                      <label for="height">Height</label>
                      <input type="text" class="form-control" id="height" name="height" placeholder="by inches" value="<?=$rows['height'];?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="weight">Weight</label>
                      <input type="text" class="form-control" id="weight" name="weight" placeholder="by kilo" value="<?=$rows['weight'];?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="bpressure">Blood Pressure</label>
                      <input type="text" class="form-control" id="bpressure" name="bpressure" placeholder="" value="<?=$rows['blood_pressure'];?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="pulse">Pulse Rate/min.</label>
                      <input type="text" class="form-control" id="pulse" name="pulse" placeholder="" value="<?=$rows['pulse_rate'];?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="respiration">Respiration/min</label>
                      <input type="text" class="form-control" id="respiration" name="respiration" placeholder="" value="<?=$rows['respiration'];?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Body Built</label>
                            <select name="bbuilt" id="bbuilt" class="form-control">
                            <option value="<?=$rows['body_built'];?>" selected><?=$rows['body_built'];?></option>                                         
                            </select>
                      </div>
                    <div class="form-group col-md-2">
                      <label for="fvision">Far Vision</label>
                      <input type="text" class="form-control" id="fvision" name="fvision" placeholder="" value="<?=$rows['far_vision'];?>">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="nvision">Near Vision</label>
                      <input type="text" class="form-control" id="nvision" name="nvision" placeholder="" value="<?=$rows['near_vision'];?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Color Test</label>
                            <select name="colortest" id="colortest" class="form-control"> 
                              <option value="<?=$rows['color_test'];?>" selected><?=$rows['color_test'];?></option>                                        
                            </select>
                      </div>
                    <div class="form-group col-md-2">
                        <label>Hearing</label>
                            <select name="hearing" id="hearing" class="form-control"> 
                              <option value="<?=$rows['hearing'];?>" selected><?=$rows['hearing'];?></option>                                        
                            </select>
                      </div>
                    <div class="form-group col-md-2">
                        <label>Audiometry A D</label>
                            <select name="audiometryAD" id="audiometryAD" class="form-control">
                              <option value="<?=$rows['audiometry_ad'];?>" selected><?=$rows['audiometry_ad'];?></option>                                        
                            </select>
                      </div>
                    <div class="form-group col-md-2">
                        <label>Audiometry A S</label>
                            <select name="audiometryAS" id="audiometryAS" class="form-control">
                              <option value="<?=$rows['audiometry_as'];?>" selected><?=$rows['audiometry_as'];?></option>                                        
                            </select>
                      </div>
                     </div>
                     <div class="mt-1">
                      <div class="alert alert-info"><b>DESCRIPTION OF FINDINGS</b></div>
                        </div>
                      <textarea class="form-control" rows="3" ><?=$rows['findings'];?></textarea>

                        <div class="mt-2">
                      <div class="alert alert-info"><b>RECOMMENDATION / SUGGESTIONS</b></div>
                      </div>
                      <textarea class="form-control" rows="3" ><?=$rows['recommendation'];?></textarea>

                        <div class="mt-2">
                      <div class="alert alert-info"><b>PRESCRIBED MEDICINE</b></div>
                      </div>
                      <textarea class="form-control" rows="3" ><?=$rows['prescription'];?></textarea>
                  
                  </div>

                    
                <!-- /.card-body -->

                <div class="card-footer">
                </div>
                <?php endwhile;?>
              </div>
            </form>
          </div>
          </div>

          
            


