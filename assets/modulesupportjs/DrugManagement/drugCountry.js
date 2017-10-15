
/*
 * Drug Strength Module Related js
 */
function checkDrugCategoryName(url){
    $("#DrugFormName").focusin(function(){
        $("#divDcategoryName").attr('style','display : none');
        $("#saveDstrength").prop("disabled",false);
    });
    $("#DrugFormName").focusout(function(){
        var dCountry = $(this).val();
        $.ajax({
                url: url+"DrugManagement/drugFromCheck",
                type: "get",
                data: "dCountryName="+dCountry,
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
                url: url+"DrugManagement/drugFromEdit",
                type: "get",
                data: "dCountryId="+dStrengthId,
                cache: false,
                success: function(data){
                    $("#editDcategoryModuleData").append(data);
                }
            });
    });
}
