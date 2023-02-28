<?php
$form='';

$form .= '<!-- The Personal Details container -->
							
<div class="personalDet">
<form method="POST" id="personalDet">
    <label for="Personal_Details"><strong>Personal Details:</strong></label>
          <div class="form-group">
            <label class="control-label">Surname: </label>
            <input type="text" class="form-control" id="l_name1" name="lname1" placeholder="e.g: Mashele">
          </div>
          <div class="form-group">
            <label class="control-label">First Name(in full): </label>
            <input type="text" class="form-control" id="f_name1" name="fname1" placeholder="e.g: Musa">
          </div>
          <div class="form-group">
            <label class="control-label">Initials: </label>
            <input type="text" class="form-control" id="init1" name="initials1" placeholder="e.g: M.L">
          </div>
          <div class="form-group">
            <label class="control-label">Title: </label>
            <select id="Title1" name="title1" class="form-control">
                <option disabled>Select Your Title</option>
                <option value="Dr" selected="selected">Dr</option>
                <option value="Mr">Mr</option>
                <option value="Miss">Miss</option>
                <option value="Mrs">Mrs</option>
            </select>
          </div>
          <div class="form-group working">
            <label class="control-label">Working: 
                
                <label class="form-check-label">
                    <input class="form-check-inline" type="radio" id="inlineRadioB1" name="inlineRadioBOptions" value="yes" checked="checked">Yes
                </label>
                <label class="form-check-label">
                    <input class="form-check-inline" type="radio" id="inlineRadioB1" name="inlineRadioBOptions" value="no">No
                </label>
            </label>
          </div>
          <div class="form-group company_name">
            <label class="control-label">If yes, the name of the company: </label>
            <input type="text" class="form-control" id="company_name" name="companyName" placeholder="e.g: Microsoft">
          </div>
          <div class="form-group working_years">
            <label class="control-label">No: of Years working: </label>
            <input type="text" class="form-control" id="working_years" name="workingYears" placeholder="e.g: 2 ">
          </div>
          <div class="form-group occupation">
            <label class="control-label">Occupation: </label>
            <input type="text" class="form-control" id="occ" name="occupation" placeholder="e.g: Nurse">
          </div>
          <div class="form-group">
            <label class="control-label">Highest Grade Passed: </label>
            <input type="text" class="form-control" id="grade_passed" name="gradePassed" placeholder="e.g: 10">
          </div>
          <div class="form-group">  
            <label class="control-label">Current Qualification: </label>
            <select class="form-control"  name="qualification" id="qualif">
                <option disabled>Choose Your Type Qualification</option>
                <option value="General Certificate"  selected="selected">General Certificate</option>
                <option value="Elementary Certificate">Elementary Certificate(Grade 1-7)</option>
                <option value="Intermediate Certificate">Grade 8-9/Intermediate Certificate</option>
                <option value="National(Vocational) Certificate level 3">Grade 10 & National(Vocational) Certificate level 3</option>
                <option value="Matric Certificate (NCS)">Matric Certificate (NSC)</option>
                <option value="Matric Certificate (CAPS)">Matric Certificate (CAPS)</option>
                <option value="Higher Certificate">Higher Certificate(N)</option>
                <option value="National Diploma">National Diploma/Advanced Certificate</option>
                <option value="Bachelor\'s Degree">Bachelor\'s Degree/Advanced Diploma</option>
                <option value="Honours Degree">Honours Degree</option>
                <option value="Master\'s Degree">Master\'s Degree</option>
                <option value="Doctoral Degree/Phd">Doctoral Degree/Phd</option>
            </select>
          </div>
          <div class="form-group">
            <label class="control-label">Identity Number:</label>
            <input type="text" class="form-control" id="Id" name="identityNum" placeholder="e.g: 9405110401039">
          </div>
          <div class="form-group">
            <label class="control-label">Date of Birth: </label>
            <input type="date" class="form-control" id="DOB" name="date">
          </div>
          <div class="form-group">
                <label class="form-control-label">Gender: </label>
                  <div class="form-check form-check-inline">
                       
                        <input class="form-check-inline" type="radio" id="inlineRadio1" name="inlineRadioOptions" value="Male" checked="checked">Male
                        <br>
                        <input  class="form-check-inline" type="radio" id="inlineRadio1" name="inlineRadioOptions" value="Female">Female
                        
                  </div>
          </div>      
          <div class="form-group">
            <label for="formControlSelect1">Marital Status: </label>
            <select class="form-control" name="formControlSelect1" id="marital_select">
                <option disabled>Choose Your Status</option>
                <option value="Married" selected="selected">Married</option>
                <option value="Single">Single</option>
                <option value="Divorced">Divorced</option>
                <option value="Widow/er">Widow/er</option>
            </select>
          </div>
          <div class="form-group">  
              <label class="control-label">Residential Address: </label>
              <input type="text" class="form-control" id="res" name="resident" placeholder="e.g: 817 block L Soshanguve">
          </div>
          <div class="form-group">  
                <label class="control-label">Code: </label>
                <input type="text" class="form-control" id="res_code" name="residentCode" placeholder="e.g: 0152">
          </div>
          <div class="form-group">  
            <label class="control-label">Postal Address: </label>
            <input type="text" class="form-control" id="post_add" name="postAdd" placeholder="e.g: 817 block L Soshanguve">
          </div>
          <div class="form-group">  
            <label class="control-label">Code: </label>
            <input type="text" class="form-control" id="post_code" name="postCode" placeholder="e.g: 0152">
          </div>
          <div class="form-group">
            <label for="formControlSelect1">Please select below where you wish to recieve your correspondence: </label>
            <select class="form-control" name="formControlSelect2" id="correspondence_select">
                <option value="" disabled>Choose Your correspondence</option>
                <option value="residential_address" selected="selected">Residential Address</option>
                <option value="postal_address">Postal Address</option>
                <option value="email">Email</option>
            </select>
          </div>
          <div class="form-group hometel">  
            <label class="control-label">Home Telphone Number : </label>
            <input type="text" class="form-control" id="home_tel_num" name="homeTelNum" placeholder="e.g: 011-555-8673">
          </div>
          <div class="form-group work_tel_num">  
            <label class="control-label">Work Telphone Number: </label>
            <input type="text" class="form-control" id="work_tel_num" name="workTelNum" placeholder="e.g: 012-123-7854 or N/A if not working">
          </div>
         <div class="form-group">  
            <label class="control-label">Phone Number: </label>
            <input type="text" class="form-control" id="phone_num" name="phoneNum" placeholder="e.g: 082-751-7339">
         </div>
         <div class="form-group">  
            <label class="control-label">Fax No: </label>
            <input type="text" class="form-control" id="fax_no" name="residentCode" placeholder="e.g: 010-963-5724 (Optional...) or N/A">
         </div>
         <div class="form-group">  
            <label class="control-label">Email: </label>
            <input type="email" class="form-control" id="email1" name="email1" placeholder="e.g: tivatsoLala@hotmail.com">
         </div>

</form>
</div>';


$form .= '<!-- Next Of Kin Container-->

<div class="nextOfKinDet">
<form method="POST" id="nextOfKinDet">
    <label for="Next_Of_Details"><strong>Next of Kin Details:</strong></label>
        <div class="form-group">
            <label class="control-label">Surname: </label>
            <input type="text" class="form-control" id="k_lname" name="kLname" placeholder="e.g: Mabala">
        </div>
        <div class="form-group">
            <label class="control-label">Name: </label>
            <input type="text" class="form-control" id="k_fname" name="kfname" placeholder="e.g: Mbali">
        </div>
        <div>
            <label class="control-label">Initials: </label>
            <input type="text" class="form-control" id="k_init" name="kInitials" placeholder="e.g: M.M">
        </div>
        <div>
            <label class="control-label">Relationship: </label>
            <input type="text" class="form-control" id="k_relate" name="kRelation" placeholder="e.g: Father">
        </div>
        <div class="form-group">
            <label class="control-label">Home Tel Number: </label>
            <input type="text" class="form-control" id="k_Tel" name="kHomeTel" placeholder="e.g: 012 999 3634 (Optional...) or N/A">
        </div>
        <div class="group">
            <label class="form-control-label">Phone Number: </label>
            <input type="text" class="form-control" id="k_phoneNum" name="kPhone" placeholder="e.g: 079 586 4726">
        </div>
        <div class="form-group">
            <label class="control-label">Email: </label>
            <input type="text" class="form-control" id="k_mail" name="kEmail" placeholder="e.g: mabala.nduma@gmail.com (Optional...) or N/A">
        </div>
        <div class="group">
            <label class="form-control-label">Identity Number: </label>
            <input type="text" class="form-control" id="k_ID" name="Kidentity" placeholder="e.g: 0101011234123">
        </div>
        <div class="form-group">
            <label class="control-label">Address: </label>
            <input type="text" class="form-control" id="k_address" name="kAddress" placeholder="e.g: 1527 Block H Soshanguve 0152">
        </div>

</form>
</div>';


$form .= '<!--Parent/ Guardian Information container-->

<div class="parentGuardianDet">
<form method="POST" id="parentGuardianDet">
    <label for="Parent_Guardian_Details"><strong>Parent/ Guardian Information:</strong></label>
        <div class="form-group">
            <label class="control-label">Surname: </label>
            <input type="text" class="form-control" id="lname2" name="l_name2" placeholder="e.g: Chauke">
        </div>
        <div class="form-group">
            <label class="control-label">Fisrt Name(in full): </label>
            <input type="text" class="form-control" id="Fname2" name="f_name2" placeholder="e.g: Dudu Tshepiso">
        </div>
        <div class="form-group">
            <label class="control-label">Title: </label>
            <select id="Title2" name="title2" class="form-control">
                <option disabled>Choose the Guardian/Parent Title</option>
                <option value="Dr" selected="selected">Dr</option>
                <option value="Mr">Mr</option>
                <option value="Miss">Miss</option>
                <option value="Mrs">Mrs</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label">Occupation: </label>
            <input type="text" class="form-control" id="occ1" name="occupation1" placeholder="e.g: Nurse">
        </div>
        <div class="form-group">
            <label class="form-control-label">Identity Number: </label>
            <input type="text" class="form-control" id="ID1" name="identity1" placeholder="e.g: 9308010299089">
        </div>
        <div class="form-group">  
            <label class="control-label">Relationship: </label>
            <select class="form-control" id="relate2" name="relation2">
                <option disabled>Choose the Relationship</option>
                <option value="Mother" selected="selected">Mother</option>
                <option value="Father">Father</option>
                <option value="Brother">Brother</option>
                <option value="Sister">Sister</option>
                <option value="Uncle">Uncle</option>
                <option value="Aunt">Aunt</option>
                <option value="Grand-Mother">Grand-Mother</option>
                <option value="Grand-Father">Grand-Father</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label">Home Telphone Number: </label>
            <input type="text" class="form-control" id="home_tel_num2" name="homeTel" placeholder="e.g: 012-999-3634 (Optional...) or N/A">
        </div>
        <div class="form-group">
            <label class="control-label">Work Telphone Number: </label>
            <input type="text" class="form-control" id="work_num2" name="workNum" placeholder="e.g: 011-864-7551">
        </div>
        <div class="form-group">
            <label class="control-label">Email: </label>
            <input type="text" class="form-control" id="email2" name="email2" placeholder="e.g: mabala.nduma@gmail.com (Optional...) or N/A ">
        </div>
        <div class="form-group">
            <label class="form-control-label">Cell Number: </label>
            <input type="text" class="form-control" id="cell_phone2" name="cellP" placeholder="e.g: 079-586-4726">
        </div>
</form>
</div>';



$form .= '<!--Declaration Container-->

<div class="declaration">
<form method="POST" id="declaration">
    <label for="Declaration"><strong>Declaration: </strong></label><br>
        <div class="form-check form-check-inline">
                <input class="form-check-inline" type="checkbox" id="inlineCheckBox" name="inlineCheckBox" value="option1">
        </div>
        <div class="a_list">
            <ol>
                <li> I declare that, the content of this form is true, correct and complete;</li>
                <li>Payment will be done by me in three installments;</li>
                <li>I understand that once am registered, no refund will be given to me if i decide to discontinue.</li>
            </ol>
        </div>
</form>
</div>';

print($form);
?>