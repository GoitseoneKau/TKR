<?php
$output ='';

$output.='<h2>Matric /Matric Upgrade Application</h2>
<form id="matric"  method="POST" class="form-horizontal form-center">
    <div class="form-group">
        <label>Surname: </label>
        <input type="text" class="form-control" id="s_name" name="surname" placeholder="e.g: Maluleke">
    </div>
    <div class="form-group">
        <label class="control-label">Firstname: </label>
        <input type="text" class="form-control" id="f_name" name="fname" placeholder="e.g: Jane">
    </div>
    <div class="form-group">
        <label class="control-label">Date Of Birth: </label>
        <input type="date" class="form-control" id="DateOfBirth" name="dob">
    </div>
    <div class="form-group">
        <label class="form-control-label">Gender: </label>
            
                <label class="form-check-label">
                     <input class="form-check-inline" type="radio" id="inlineRadio1" checked="checked" name="inlineRadioOptions" value="Male">Male
                </label>
                <label class="form-check-label">
                     <input  class="form-check-inline" type="radio" id="inlineRadio1" name="inlineRadioOptions" value="Female">Female
                </label>
    </div>
    <div class="form-group">
        <label class="control-label">ID Number: </label>
        <input type="text" class="form-control" id="ID" name="IDn" placeholder="e.g: 9416450499089">
    </div>
    <div class="form-group">
        <label class="form-control-label">Contact Number: </label>
        <input type="text" class="form-control" id="contact_num" name="contNumber" placeholder="e.g: 079-586-4726">
    </div>
    <!-- THE UPLOAD DOCUMENT SECTION WILL BE INSERTED HERE BEFORE PARENT INFORMATION -->

    <div class="form-group">
        <label class="control-label">Parent/Guardian surname: </label>
        <input type="text" class="form-control" id="p_surname" name="parentGuardianSurname" placeholder="e.g: Maluleke">
    </div>
    <div class="form-group">
        <label class="control-label">Parent/Guardian first name: </label>
        <input type="text" class="form-control" id="p_name" name="ParentGuardianFname" placeholder="e.g: Selina\'">
    </div>
    <div class="form-group">
        <label class="control-label">Parent/Guardian Contact Number: </label>
        <input type="text" class="form-control" id="p_number" name="ParentGuardianPhone" placeholder="e.g: 079-999-3634">
    </div>
    <div class="">
        <label for="formControlSelect1">Modules/Subjects to Upgrade: </label>
                
                <!--first row-->
                <div class="row">
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Accounting"> Accounting </label>
                    </div></div>
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Afrikaans"> Afrikaans </label>
                    </div></div>
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Agricultural Sciences"> Agricultural Sciences </label>
                    </div></div>
                </div>
                <!--first row end-->
                
                <!--second row-->
                <div class="row">
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Business Studies"> Business Studies </label>
                    </div></div>
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Economics"> Economics </label>
                    </div></div>
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="English First Additional Language"> English First Additional Language</label>
                    </div></div>
                </div>
                <!--second row end-->
                
                <!--third row-->
                <div class="row">
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="English Home Language">English Home Language</label>
                        
                    </div></div>
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Geography">Geography</label>
                    </div></div>
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="History">History</label>
                    </div></div>
                </div>
                <!--third row end-->
                
                <!--fourth row-->
                <div class="row">
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Life Science">Life Science</label>
                    </div></div>
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Mathematics">Mathematics</label>
                    </div></div>
                    <div class=" col-sm-10 col-md-12 col-lg-12"><div class="form-group">
                        <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Mathematical Literacy">Mathematical Literacy</label>
                    </div></div>
                </div>
                <!--fourth row end-->
                
                <!--fifth row-->
                <div class="row">
                    <div class=" col-sm-10 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Physical Science">Physical Science</label>
                        </div>
                    </div>
                    <div class=" col-sm-10 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Setswana">Setswana</label>
                        </div>
                    </div>
                    <div class=" col-sm-10 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Technical Mathematics">Technical Mathematics</label>
                        </div>
                    </div>
                    <div class=" col-sm-10 col-md-12 col-lg-12">
                        <div class="form-group">
                                <label class="control-label"><input  type="checkbox" class="form-check-input" id="sub_select" name="subject[]" value="Technical Sciences">Technical Science</label>
                        </div>
                    </div>
                </div>
                <!--fifth row end-->	
    </div>
    
    <div class="form-group">
        <label class="control-label">Upload your ID photo: </label>
        <input type="file" class="form-control-file" id="id_photo" name="id_photo" placeholder=".jpeg,.jpg,.png" multiple>
    </div>
    
    <div class="form-group">
        <label class="control-label">Upload your Previous Results(If Upgrading): </label>
        <input type="file" class="form-control-file" id="previous_results" name="previous_results" placeholder=".jpeg,.jpg,.png" multiple>
    </div>
    
    <div class="form-group">
        <label class="control-label">Upload your Certified ID copy: </label>
        <input type="file" class="form-control-file" id="certified_id_copy" name="certified_id_copy" placeholder=".jpeg,.jpg,.png" multiple>
    </div>
    
    <div class="form-group">
        <label><strong>DECLARATION BY STUDENT</strong></label>
        <div class="form-check">
            <label class="form-check-label"><p>
                <input class="form-check-inline" type="checkbox" id="student_check" name="inlineCheckBox" value="Agreed">
                I the above Applicant here by promise to abide by the conditions set by TKR & HCS and agree to attend 
                all classes and do class tasks given to me, i confirm my registration 
                details and desist from any conduct that may spoil the good name of TKR & HCS
            </p></label>
        </div>
    </div>

    <div class="form-group">
        <label><strong>DECLARATION BY PARENT/LEGAL GUARDIAN</strong></label>
        <div class="form-check ">
            <label class="form-check-label"><p>
                <input class="form-check-inline" type="checkbox" id="parent_check" name="inlineCheckBox" value="Agreed">
                I the parent/guardian of the above applicant hereby give him/her authority to attend TKR & HCS classes
                and undertake to pay all registration fee before he/she can be accepted and further guarentee that 
                i will pay amount payable per subject atleast a month in advance. I understand and agree that my 
                child/ward will not be allowed into a class, given time table for exam or allowed to seat for 
                exams if fees are not up-to-date. I am aware that interest will be added to outstanding fees at 10% per 
                month. I further give TKR & HCS permission to take legal steps recover any money that may be unpaid 
                three months after due date
            </p></label>
        </div>
    </div>    
    </form>';


    print($output);

?>