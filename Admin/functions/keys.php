<?php
function getAfternoonKeys(){
    $keys=array();
    $i=0;
    /* `tkr_db`.`tkr_afternoon_class` */
    $tkr_afternoon_class =
    array('class_id' => '1','Name' => 'martin','Surname' => 'kay','ID' => '','Country' => 'south africa','Province' => 'gauteng','City' => 'pta','Physical_Address' => 'afboif','Code' => '1234','Email' => 'vaivbisa','Home_Tel_Num' => 'sgubw9ugw','Phone_Number' => 'agwb','Gender' => '','DOB' => '1995-05-01','Age' => '25','Medical_Condition_Status' => 'no','Medical_Condition_description' => '','Parent_Permission' => 'agree','Date_of_Application' => '2020-01-08','Parent_Initials' => 'iyvy','Parent_Name' => 'trxsur','Parent_Surname' => '7tttuytyt','status' => 'registered')
    ;

    foreach ($tkr_afternoon_class as $key => $value) {
        # code...
        $keys[$i]=$key;
        $i++;
    }

    return $keys;
}

function getMatricKeys(){
    $keys=array();
    $i=0;
    $matric_upgrade = 
     array('matric_id' => '3','surname' => 'Cyxkltt','fullnames' => 'Uytclc','DOB' => '2007-12-31','Gender' => 'Male','ID' => '0712311234123','Contact_Number' => '071-123-4589','Guardian_Surname' => 'Rrdodotr','Guardian_Name' => 'Kytxytxrx','Guardian_Contact_Number' => '072-954-8956','Guardian_Relationship' => '','Modules' => 'Accounting,Economics,Mathematics','Student_Declaration' => 'agreed','Parent_Declaration' => 'agreed','id_photo' => 'images/id0712311234123-ID_Photo-home.jpg','previous_result' => 'images/results/0712311234123-Previous_Results-estate.jpg','certified_ID' => 'images/id_copy/0712311234123-ID_Copy-thuto 5.jpg','status' => 'registered')
    ;
    foreach ($matric_upgrade as $key => $value) {
      # code...
      $keys[$i]=$key;
      $i++;
    }
  
    return $keys;
  }

  function getSkillKeys(){
    $keys=array();
    $i=0;
  
    /* `tkr_db`.`skill_application` */
    $skill_application = 
       array('student_id' => '1','Surname' => 'Fuufc','Fullnames' => 'Vyvv','Initials' => 'F.V','Title' => 'Mr','Working' => 'Not working','Company_Working' => 'none','Years_Working' => '0','Company_Occupation' => 'none','Highest_Grade_Passed' => '12','Qualification' => 'Higher Certificate','ID' => '9874561234567','Certified_ID' => NULL,'DOB' => '1995-01-01','Gender' => 'Male','Marital_Status' => 'Single','Residential_Address' => 'xkjtrxtcutk','Res_Code' => '1234','Postal_Address' => 'tdco8','Postal_Code' => '1234','Correspondence_Address' => 'residential_address','Home_Telephone' => '012-458-7459','Work_Telephone' => 'N/A','Phone_Number' => '071-958-7894','Fax_Number' => 'N/A','Email' => 'bingo@love.gother','kin_surname' => 'Hyugu','kin_fullnames' => 'Guig','kin_initials' => 'H.G','relationship' => 'guardian','kin_home_telephone' => 'N/A','kin_phone_number' => '071-958-7894','kin_email' => 'N/A','kin_ID' => '5587948695789','kin_address' => 'kvvtc','Guardian_Surname' => '','Guardian_Name' => '','Guardian_Initials' => '','Guardian_Title' => '','Guardian_Occupation' => '','Guardian_ID' => '','Guardian_Relationship' => '','Guardian_Home_Telephone' => '','Guardian_Work_Telephone' => '','Guardian_Email' => '','Guardian_Cellnumber' => '','declaration' => '','status' => '')
    ;
    foreach ($skill_application as $key => $value) {
      # code...
      $keys[$i]=$key;
      $i++;
    }
  
    return $keys;
  }

?>