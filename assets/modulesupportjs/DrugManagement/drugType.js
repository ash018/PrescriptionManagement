/*
 * Drug Type Module Related js
 */
function checkDrugTypeName(url){
    $("#DrugTypeName").focusin(function(){
        $("#divUserId").attr('style','display : none');
        $("#saveDtype").prop("disabled",false);
    });
    $("#DrugTypeName").focusout(function(){
        var dTypeName = $(this).val();
        $.ajax({
                url: url+"DrugManagement/checkDrugTypeName",
                type: "get",
                data: "drugTypeName="+dTypeName,
                cache: false,
                success: function(data){
                    if(data == 0){
                        $("#divDtypeName").attr('style','display : block');
                        $("#saveDtype").prop("disabled",true);
                    }
                }
            });
    });
}

function editUser(url){
    $(".editUseGetData").on('click',function(){
        var userId = $(this).attr("data-node");
        //console.log(userId);
        $("#editUserModuleData").empty();
        $.ajax({
                url: url+"UserManager/getUserData",
                type: "get",
                data: "userId="+userId,
                cache: false,
                success: function(data){
                    $("#editUserModuleData").append(data);
                }
            });
    });
}



