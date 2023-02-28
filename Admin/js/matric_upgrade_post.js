$('form').ready(function(){

    $('#myModal').on('hidden.bs.modal',function(){
        $('form')[0].reset();
        if( $('#form').html()=="<h2 class='form-success'>Successful Data Entry</h2>"){
            $('#form').load('upgrade%20registration/matric_upgrade_form.php');
        }
      });

    $("button#saveUpgrade.btn.btn-warning").click(function(event){
            
            console.log("lookmeup!");
            let name = $("#f_name").val();
            let surname = $("#s_name").val();
            let gender = $("input[name='inlineRadioOptions']").val();
            let ID = $("#ID").val();
            let DOB = $("#DateOfBirth").val();
            let contact = $("#contact_num").val();
            let parent_name = $("#p_name").val();
            let parent_surname = $("#p_surname").val();
            let parent_number = $("#p_number").val();
            
            let subjects = [];
            $("#sub_select:checked").each(function(k){
                subjects[k]=$(this).val();
            });
            
            let id_photo=$("input[name='id_photo']").prop('files')[0];
            let previous_results=$("input[name='previous_results']").prop('files')[0];
            let certified_id_copy=$("input[name='certified_id_copy']").prop('files')[0];
            
            let student_check = $("#student_check:checked").length;
            let guardian_check = $("#parent_check:checked").length;

            let form_data= new FormData();
            form_data.append('name',name);
            form_data.append('surname',surname);
            form_data.append('gender',gender);
            form_data.append('ID',ID);
            form_data.append('DOB',DOB);
            form_data.append('contact',contact);
            form_data.append('p_name',parent_name); 
            form_data.append('p_sname',parent_surname); 
            form_data.append('p_num',parent_number);
            form_data.append('sub',subjects);
            form_data.append('s_check',student_check);
            form_data.append('g_check',guardian_check);
            form_data.append('id_photo',id_photo);
            form_data.append('results',previous_results);
            form_data.append('id_copy',certified_id_copy);
            
            $.ajax({
                type:"POST",
                url: "upgrade%20registration/upgrade_registration.php",
                cache:false,
                processData:false,
                contentType:false,
                data:form_data,
                dataType:"json",
                enctype:"multipart/form-data",
                success: function(data){
                
                    //remove error class
                    $("#f_name,#s_name,#ID,#DateOfBirth,#contact_num,#p_name,#p_surname,#p_number,#occ,#student_check,#parent_check,#id_photo,#previous_results,#certified_id_copy,label>input#sub_select").removeClass("input-error");
                    
                    //remove instances of errors
                    $(".form-error").remove();
                   
                    if(!data.nameErr==""){
                        $("#f_name").addClass("input-error").after(data.nameErr);
                    }
                    
                    if(!data.surnameErr==""){
                        $("#s_name").addClass("input-error")
                        .after(data.surnameErr);
                    }
                    
                    if(!data.pnameErr==""){
                        $("#p_name").addClass("input-error")
                        .after(data.pnameErr);
                    }
                    
                    if(!data.psurnameErr==""){
                        $("#p_surname").addClass("input-error")
                        .after(data.psurnameErr);
                    }
                    
                    if(!data.idErr==""){
                        $("#ID").addClass("input-error")
                        .after(data.idErr);
                    }
                    
                    if(!data.dobErr==""){
                        $("#DateOfBirth").addClass("input-error")
                        .after(data.dobErr);
                    }
                    
                    if(!data.phone_noErr==""){
                        $("#contact_num").addClass("input-error")
                        .after(data.phone_noErr);
                    }
                    
                    if(!data.guardian_numErr==""){
                        $("#p_number").addClass("input-error")
                        .after(data.guardian_numErr);
                    }
                    
                    
                    if(!data.s_checkErr==""){
                        $("#student_check").addClass("input-error")
                        .after(data.s_checkErr);
                    }
                    
                    if(!data.g_checkErr==""){
                        $("#parent_check").addClass("input-error")
                        .after(data.g_checkErr);
                    }
                    
                    if(!data.id_photoErr==""){
                    
                    $("#id_photo").addClass("input-error")
                        .after(data.id_photoErr);
                    }
                    
                    if(!data.resultsErr==""){
                    $("#previous_results").addClass("input-error")
                        .after(data.resultsErr);
                    }
                    
                    if(!data.id_copyErr==""){
                        $("#certified_id_copy").addClass("input-error")
                        .after(data.id_copyErr);
                    }
                    
                    if(!data.subjectErr==""){
                        $("label>input#sub_select").addClass("input-error")
                        .after(data.subjectErr);
                    }

                    if(data==null){
                        page='student%20outputs/Registered.php';
                        $('.panel-body').load(page,{request:'mu'});
                        $('#form').load('upgrade%20registration/matric_upgrade_form.php');
                    }
                    
                }
            });
            
    });
    
//end of document	
});