/*
 * Drug Type Module Related js
 */
function checkDrugTypeName(url){
    $("#DrugApplicationMethodName").focusin(function(){
        $("#divDtypeName").attr('style','display : none');
        $("#saveDtype").prop("disabled",false);
    });
    $("#DrugApplicationMethodName").focusout(function(){
        var dTypeName = $(this).val();
        $.ajax({
                url: url+"DrugManagement/checkdrugAppMethodName",
                type: "get",
                data: "drugAppMethod="+dTypeName,
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
                url: url+"DrugManagement/drugAppMethodEdit",
                type: "get",
                data: "dAppMethodId="+dTypeId,
                cache: false,
                success: function(data){
                    $("#editDtypeModuleData").append(data);
                }
            });
    });
}