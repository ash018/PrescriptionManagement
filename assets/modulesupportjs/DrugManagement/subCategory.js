/*
 * Drug Sub Category Module Related js
 */
function checkDrugCategoryName(url){
    $("#DrugCategoryId").focusin(function(){
        $("#divDcategoryName").attr('style','display : none');
        $("#saveDcategory").prop("disabled",false);
    });
    $("#DrugCategoryId").focusout(function(){
        var dCategoryId = $(this).select().val();//$('#selectorId option:selected').val()
        var dSuvCategory = $("#DrugSubcategoryName").val();
        
        $.ajax({
                url: url+"DrugManagement/checkdrugSubCategoryName?",
                type: "get",
                data: "subCategoryName="+dSuvCategory+"&categoryId="+dCategoryId,
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
                url: url+"DrugManagement/drugSubCategoryEdit",
                type: "get",
                data: "dSubCatId="+dCategoryId,
                cache: false,
                success: function(data){
                    $("#editDcategoryModuleData").append(data);
                }
            });
    });
}

function checkDrugSubCategory(url, subCategoryName, categoryId){
    $("#DrugCategoryId").focusin(function(){
        $("#divDcategoryName").attr('style','display : none');
        $("#saveDcategory").prop("disabled",false);
    });
    $("#DrugCategoryId").focusout(function(){
        var dCategoryId = $(this).select().val();//$('#selectorId option:selected').val()
        var dSuvCategory = $("#DrugSubcategoryName").val();
        if(subCategoryName != dSuvCategory && dCategoryId  != categoryId){
           $.ajax({
                url: url+"DrugManagement/checkdrugSubCategoryName?",
                type: "get",
                data: "subCategoryName="+dSuvCategory+"&categoryId="+dCategoryId,
                cache: false,
                success: function(data){
                    if(data == 0){
                        $("#divDcategoryName").attr('style','display : block');
                        $("#saveDcategory").prop("disabled",true);
                    }
                }
            }); 
        }
        
    });
}
