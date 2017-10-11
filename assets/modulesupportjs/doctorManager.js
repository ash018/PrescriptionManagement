/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


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