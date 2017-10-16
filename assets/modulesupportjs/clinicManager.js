/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function checkClinicType(url){
    $("#ClinicType").focusin(function(){
         $("#divClinictypeName").attr('style','display : none');
         $("#saveClinictype").prop("disabled",false);
     });
     console.log("Hello!!");
    $("#ClinicType").focusout(function(){
        var regisId = $(this).val();
        $.ajax({
                url: url+"DocList/checkClinicType",
                type: "get",
                data: "regisId="+regisId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    if(data == 0){
                        $("#divClinictypeName").attr('style','display : block');
                        $("#saveClinictype").prop("disabled",true);
                    }
                }
            });
    });
}


function checkDoctorId(url){
     $("#DoctorRegistrationNo").focusin(function(){
         $("#divDoctorRegistration").attr('style','display : none');
         $("#saveDoctor").prop("disabled",false);
     });
     console.log("Hello!!");
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



function checkClinicEditId(url,prevClinicId){
     $("#ClinicRegistrationNo").focusin(function(){
         $("#divClinicRegistration").attr('style','display : none');
         $("#editClinic").prop("disabled",false);
     });
     console.log("Hello!!" + prevClinicId);
    $("#ClinicRegistrationNo").focusout(function(){
        var regisId = $(this).val();
        console.log(regisId,prevClinicId);
        if(regisId != prevClinicId){
        $.ajax({
                url: url+"DocList/checkClinicReg",
                type: "get",
                data: "regisId="+regisId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    if(data == 0){
                        $("#divClinicRegistration").attr('style','display : block');
                        $("#editClinicType").prop("disabled",true);
                    }
                }
            });
        }
    });
}

function checkClinicTypeEditId(url,prevClinicId){
     $("#ClinicType").focusin(function(){
         $("#divClinictypeName").attr('style','display : none');
         $("#editClinic").prop("disabled",false);
     });
     console.log("kkkk" + prevClinicId);
    $("#ClinicType").focusout(function(){
        var regisId = $(this).val();
        console.log(regisId,prevClinicId);
        if(regisId != prevClinicId){
        $.ajax({
                url: url+"DocList/checkClinicType",
                type: "get",
                data: "regisId="+regisId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    if(data == 0){
                        $("#divClinictypeName").attr('style','display : block');
                        $("#editClinic").prop("disabled",true);
                    }
                }
            });
        }
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

function checkContactNoEditId(url,prevDoctorContactNo){
     $("#DoctorContactNo").focusin(function(){
         $("#divDoctorContactNo").attr('style','display : none');
         $("#editDoctor").prop("disabled",false);
     });
     console.log("Hello");
    $("#DoctorContactNo").focusout(function(){
        var contactNo = $(this).val();
        if(contactNo != prevDoctorContactNo){
        $.ajax({
                url: url+"DocList/checkDoctorContactNo",
                type: "get",
                data: "contactNo="+contactNo,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    if(data == 0){
                        $("#divDoctorContactNo").attr('style','display : block');
                        $("#editDoctor").prop("disabled",true);
                    }
                }
            });
        }
    });
}


function editClinic(url){
    
    $(".btn-info").on('click',function(){
        var clinicId = $(this).attr("data-node");
        console.log("hello"+clinicId);
        $("#editClinicModuleData").empty();
        $.ajax({
                url: url+"DocList/getClinicData2",
                type: "get",
                data: "clinicId="+clinicId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    $("#editClinicModuleData").append(data);
//                    if(data == 0){
//                        $("#divUserId").attr('style','display : block');
//                        $("#saveUser").prop("disabled",true);
//                    }
                }
            });
    });
}

function editClinicType(url){
    
    $(".btn-info").on('click',function(){
        var clinicId = $(this).attr("data-node");
        console.log("hello"+clinicId);
        $("#editClinicTypeModuleData").empty();
        $.ajax({
                url: url+"DocList/getClinicTypeData2",
                type: "get",
                data: "clinicId="+clinicId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    $("#editClinicTypeModuleData").append(data);
//                    if(data == 0){
//                        $("#divUserId").attr('style','display : block');
//                        $("#saveUser").prop("disabled",true);
//                    }
                }
            });
    });
}

function deleteClinic(url){
    
    $(".deleteClinicGetData").on('click',function(){
        var clinicId = $(this).attr("data-node");
        console.log("hello"+clinicId);
        $("#deleteDoctorModuleData").empty();
        $.ajax({
                url: url+"DocList/getClinicDataDelete",
                type: "get",
                data: "clinicId="+clinicId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    $("#deleteClinicModuleData").append(data);
//                    if(data == 0){
//                        $("#divUserId").attr('style','display : block');
//                        $("#saveUser").prop("disabled",true);
//                    }
                }
            });
    });
}