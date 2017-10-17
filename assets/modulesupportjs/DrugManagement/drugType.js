/*
 * Drug Type Module Related js
 */
function checkDrugTypeName(url){
    $("#DrugTypeName").focusin(function(){
        $("#divDtypeName").attr('style','display : none');
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

function editDrugType(url){
    $(".editDTypeData").on('click',function(){
        var dTypeId = $(this).attr("data-node");
        $("#editDtypeModuleData").empty();
        $.ajax({
                url: url+"DrugManagement/drugTypeEdit",
                type: "get",
                data: "dTypeId="+dTypeId,
                cache: false,
                success: function(data){
                    $("#editDtypeModuleData").append(data);
                }
            });
    });
}
