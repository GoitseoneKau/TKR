$('form').ready(function(){
             
    $("#applic-l_name").change(()=>{
      $("#applic-init").val( `${$("#applic-l_name").val().substr(0,1)}.${$("#applic-f_name").val().substr(0,1)}`)
      console.log($("#applic-init").val() )
    });

    $('#myModal').on('hidden.bs.modal',function(){
      $('form.form-horizontal.form-center')[0].reset();
      if( $('#form').html()=="<h2 class='form-success'>Successful Data Entry</h2>"){
        $('#form').load('afternoon%20class%20registration/class_registration_form.php');
      }
    });

     $("button#saveClass.btn.btn-warning").click(function(event){
       
       let name = $("#applic-f_name").val();
       let surname = $("#applic-l_name").val();
       let country = $("#applic-country").val();
       let province = $("#applic-prov").val();
       let city = $("#applic-cit").val();
       let gender = $("#inlineRadio1:checked").val();
       let physicalAddress = $("#applic-pAdd").val();
       let code = $("#applic-cod").val();
       let age = $("#some_select").val();
       let email = $("#applic-mail").val();
       let telephoneN = $("#applic-Tel").val();
       let phoneN = $("#applic-phone_num").val();
       let dateOfBirth = $("#applic-DOB").val();
       let id = $("#ID").val();
       let medCheck = $("#inlineRadioB1:checked").val();
       let medCondition = $("#applic-medCon").val();
       let pname = $("#pname").val();
       let psurname = $("#psurname").val();
       let ptitle = $("#ptitle").val();
       let initials = $("#applic-init").val();
       let check = $("#inlineCheckBox:checked").val();

       $.post("afternoon%20class%20registration/register.php", {
         name : name,
         surname : surname,
         country : country,
         province : province,
         city : city,
         gender : gender,
         physicalAddress : physicalAddress,
         code : code,
         age : age,
         email : email,
         telephoneN : telephoneN,
         phoneN : phoneN,
         dateOfBirth : dateOfBirth,
         id : id,
         medCheck : medCheck,
         medCondition : medCondition,
         parent_name : pname,
         parent_surname : psurname,
         parent_title : ptitle,
         check : check,
         initials : initials
       },function(data){
         
           $("#applic-f_name, #applic-l_name, #applic-country, #applic-prov, #applic-cit, #applic-pAdd,#applic-cod, #some_select, #applic-mail, #applic-Tel, #applic-phone_num, #applic-DOB, #applic-medCon, #pname, #psurname, #applic-init ,#inlineCheckBox")
           .removeClass("input-error");

           //remove instances of errors
           $(".form-error").remove();


           if(!data.nameErr =="") {
             $("#applic-f_name").addClass("input-error")
             .after(data.nameErr);
           }

           if(!data.surnameErr == "") {
             $("#applic-l_name").addClass("input-error")
             .after(data.surnameErr);
           }

           if(!data.countryErr == "") {
             $("#applic-country").addClass("input-error")
             .after(data.countryErr);
           }
           
           if(!data.provinceErr=="") {
             $("#applic-prov").addClass("input-error")
             .after(data.provinceErr);
           }
           
           if(!data.cityErr == "") {
             $("#applic-cit").addClass("input-error")
             .after(data.cityErr);
           }
           
           if(!data.physicalAddErr == "") {
             $("#applic-pAdd").addClass("input-error")
             .after(data.physicalAddErr);
           }
           
           if(!data.codeErr == "") {
             $("#applic-cod").addClass("input-error")
             .after(data.codeErr);
           }

           if(!data.ageErr == "") {
             $("#some_select").addClass("input-error")
             .after(data.ageErr);
           }
           
           if(!data.emailErr==""){
             $("#applic-mail").addClass("input-error")
             .after(data.emailErr);
           }

           if(!data.telephoneErr == "") {
             $("#applic-Tel").addClass("input-error")
             .after(data.telephoneErr);
           }
           
           if(!data.phoneErr == "") {
             $("#applic-phone_num").addClass("input-error")
             .after(data.phoneErr);
           }

           if(!data.dobErr==""){
             $("#applic-DOB").addClass("input-error")
             .after(data.dobErr);
           }

           if(!data.idErr==""){
             $("#ID").addClass("input-error")
             .after(data.idErr);
           }
           
           if(!data.parent_nameErr == "") {
             $("#pname").addClass("input-error")
             .after(data.parent_nameErr);
           }
           
           if(!data.parent_surnameErr == "") {
             $("#psurname").addClass("input-error")
             .after(data.parent_surnameErr);
           }

           if(!data.initialsErr == "") {
             $("#applic-init").addClass("input-error")
             .after(data.initialsErr);
           }

           if(!data.checkErr == "") {
             $("#inlineCheckBox").addClass("input-error")
             .after(data.checkErr);
           }

           if(!data.medConErr == "") {
             $("#applic-medCon").addClass("input-error")
             .after(data.medConErr);
           }

           if(!data.home==""){
              setTimeout(()=>{
                $(".declaration").hide() 
                $('#form').html("<h2 class='form-success'>Successful Data Entry</h2>")
                page="student%20outputs/Registered.php"
                category ="ac"
                $('.panel-body').load(page,{request:'ac'})
              },1000);
              
            
           }
           
       
       },"json");

     });

     

  });  