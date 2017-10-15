
/*
 * Drug Category Module Related js
 */
function checkDrugCategoryName(url){
    $("#DrugCategoryName").focusin(function(){
        $("#divDcategoryName").attr('style','display : none');
        $("#saveDcategory").prop("disabled",false);
    });
    $("#DrugCategoryName").focusout(function(){
        var dCategoryName = $(this).val();
        $.ajax({
                url: url+"DrugManagement/checkDrugCategoryName",
                type: "get",
                data: "drugCategoryName="+dCategoryName,
                cache: false,
                success: function(data){
                    if(data == 0){
                        $("#divDcategoryName").attr('style','display : block');
                        $("#saveDcategory").prop("disabled",true);
                    }
                }
            });
    });
}

function editDrugCategory(url){
    $(".editDCategoryData").on('click',function(){
        var dCategoryId = $(this).attr("data-node");
        
        $("#editDcategoryModuleData").empty();
        $.ajax({
                url: url+"DrugManagement/drugCategoryEdit",
                type: "get",
                data: "dCategoryId="+dCategoryId,
                cache: false,
                success: function(data){
                    $("#editDcategoryModuleData").append(data);
                }
            });
    });
}
