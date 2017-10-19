/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function editDoctorEducationInstituteList(url){
    $(".btn-info").on('click',function(){
        var doctorInstituteId = $(this).attr("data-node");
        console.log("hello"+doctorInstituteId);
        $("#editDoctorEducationInstituteListModuleData").empty();
        $.ajax({
                url: url+"DocList/getDoctorInstituteData",
                type: "get",
                data: "doctorInstituteId="+doctorInstituteId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    $("#editDoctorEducationInstituteListModuleData").append(data);
                }
            });
    });
}

function editDoctorEducationGradeList(url){
    $(".btn-info").on('click',function(){
        var doctorGradeId = $(this).attr("data-node");
        console.log("hello"+doctorGradeId);
        $("#editDoctorEducationGradeListModuleData").empty();
        $.ajax({
                url: url+"DocList/getDoctorGradeData",
                type: "get",
                data: "doctorGradeId="+doctorGradeId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    $("#editDoctorEducationGradeListModuleData").append(data);
                }
            });
    });
}



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

function checkDoctorEducationInstituteName(url){
     $("#EducationInstituteName").focusin(function(){
         $("#divDoctorEducationInstitute").attr('style','display : none');
         $("#saveDoctorInstitute").prop("disabled",false);
     });
     //console.log("Hello!!!");
    $("#EducationInstituteName").focusout(function(){
        var regisId = $(this).val();
        console.log(regisId);
        $.ajax({
                url: url+"DocList/checkDoctorInstitute",
                type: "get",
                data: "regisId="+regisId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    if(data == 0){
                        $("#divDoctorEducationInstitute").attr('style','display : block');
                        $("#saveDoctorInstitute").prop("disabled",true);
                    }
                }
            });
    });
}


function checkDoctorEducationInstituteNameEdit(url,prevDoctorInstitute){
     $("#EducationInstituteName").focusin(function(){
         $("#divDoctorEducationInstitute").attr('style','display : none');
         $("#saveDoctorInstitute").prop("disabled",false);
     });
     //console.log("Hello!!!");
    $("#EducationInstituteName").focusout(function(){
        var regisId = $(this).val();
        console.log(regisId);
        if(regisId != prevDoctorInstitute){
        $.ajax({
                url: url+"DocList/checkDoctorInstitute",
                type: "get",
                data: "regisId="+regisId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    if(data == 0){
                        $("#divDoctorEducationInstitute").attr('style','display : block');
                        $("#saveDoctorInstitute").prop("disabled",true);
                    }
                }
            });
        }
    });
}



function checkDoctorEditId(url,prevDoctorId){
     $("#DoctorRegistrationNo").focusin(function(){
         $("#divDoctorRegistration").attr('style','display : none');
         $("#editDoctor").prop("disabled",false);
     });
     console.log("Hello");
    $("#DoctorRegistrationNo").focusout(function(){
        var regisId = $(this).val();
        console.log(regisId,prevDoctorId);
        if(regisId != prevDoctorId){
        $.ajax({
                url: url+"DocList/checkDoctorName",
                type: "get",
                data: "regisId="+regisId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    if(data == 0){
                        $("#divDoctorRegistration").attr('style','display : block');
                        $("#editDoctor").prop("disabled",true);
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


function editDoctor(url){
    
    $(".btn-info").on('click',function(){
        var doctorId = $(this).attr("data-node");
        $("#editDoctorModuleData").empty();
        $.ajax({
                url: url+"DocList/getDoctorData",
                type: "get",
                data: "doctorId="+doctorId,
                cache: false,
                success: function(data){
                   $("#editDoctorModuleData").append(data);
}
            });
    });
}

function editDoctorEducation(url){
    
    $(".btn-info").on('click',function(){
        var doctorId = $(this).attr("data-node");
        console.log("hello"+doctorId);
        $("#editDoctorEducationModuleData").empty();
        $.ajax({
                url: url+"DocList/getDoctorEducationData",
                type: "get",
                data: "doctorId="+doctorId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    $("#editDoctorEducationModuleData").append(data);
                }
            });
    });
}

function educationEntryDoctor(url){
    
    $(".educationDoctorGetData").on('click',function(){
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
                }
            });
    });
}

function detailsEducationDoctor(url){
    $(".detailsDoctorGetData").on('click',function(){
        var doctorId = $(this).attr("data-node");
        console.log("details"+doctorId);
        $("#detailsDoctorModuleData").empty();
        $.ajax({
                url: url+"DocList/getDoctorDataEducation",
                type: "get",
                data: "doctorId="+doctorId,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    $("#detailsDoctorModuleData").append(data);
                }
            });
    });
}