/*
 * Drug Strength Module Related js
 */
function checkDrugCategoryName(url){
    $("#DrugStrengthUnitName").focusin(function(){
        $("#divDcategoryName").attr('style','display : none');
        $("#saveDstrength").prop("disabled",false);
    });
    $("#DrugStrengthUnitName").focusout(function(){
        var dStrengthName = $(this).val();
        $.ajax({
                url: url+"DrugManagement/checkDrugStrengthName",
                type: "get",
                data: "drugStrengthName="+dStrengthName,
                cache: false,
                success: function(data){
                    if(data == 0){
                        $("#divDcategoryName").attr('style','display : block');
                        $("#saveDstrength").prop("disabled",true);
                    }
                }
            });
    });
}

function editDrugCategory(url){
    $(".editDCategoryData").on('click',function(){
        var dStrengthId = $(this).attr("data-node");
        $("#editDcategoryModuleData").empty();
        $.ajax({
                url: url+"DrugManagement/drugStrengthEdit",
                type: "get",
                data: "dStrengthId="+dStrengthId,
                cache: false,
                success: function(data){
                    $("#editDcategoryModuleData").append(data);
                }
            });
    });
}
