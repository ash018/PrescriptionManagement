/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function checkDoctorId(url){
     $("#DoctorRegistrationNo").focusin(function(){
         $("#divDoctorRegistration").attr('style','display : none');
         $("#saveDoctor").prop("disabled",false);
     });
     console.log("Hello");
    $("#DoctorRegistrationNo").focusout(function(){
        var regisId = $(this).val();
        $.ajax({
                url: url+"DocList/checkDoctorName",
                type: "get",
                data: "regisId="+regisId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    if(data == 0){
                        $("#divDoctorRegistration").attr('style','display : block');
                        $("#saveDoctor").prop("disabled",true);
                    }
                }
            });
    });
}

function checkContactNoId(url){
     $("#DoctorContactNo").focusin(function(){
         $("#divDoctorContactNo").attr('style','display : none');
         $("#saveDoctor").prop("disabled",false);
     });
     console.log("Hello");
    $("#DoctorContactNo").focusout(function(){
        var contactNo = $(this).val();
        $.ajax({
                url: url+"DocList/checkDoctorContactNo",
                type: "get",
                data: "contactNo="+contactNo,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    if(data == 0){
                        $("#divDoctorContactNo").attr('style','display : block');
                        $("#saveDoctor").prop("disabled",true);
                    }
                }
            });
    });
}


function editDoctor(url){
    
    $(".btn-info").on('click',function(){
        var doctorId = $(this).attr("data-node");
        console.log("hello"+doctorId);
        $("#editDoctorModuleData").empty();
        $.ajax({
                url: url+"DocList/getDoctorData",
                type: "get",
                data: "doctorId="+doctorId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    $("#editDoctorModuleData").append(data);
//                    if(data == 0){
//                        $("#divUserId").attr('style','display : block');
//                        $("#saveUser").prop("disabled",true);
//                    }
                }
            });
    });
}

function deleteDoctor(url){
    
    $(".deleteDoctorGetData").on('click',function(){
        var doctorId = $(this).attr("data-node");
        console.log("hello"+doctorId);
        $("#deleteDoctorModuleData").empty();
        $.ajax({
                url: url+"DocList/getDoctorDataDelete",
                type: "get",
                data: "doctorId="+doctorId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    $("#deleteDoctorModuleData").append(data);
//                    if(data == 0){
//                        $("#divUserId").attr('style','display : block');
//                        $("#saveUser").prop("disabled",true);
//                    }
                }
            });
    });
}