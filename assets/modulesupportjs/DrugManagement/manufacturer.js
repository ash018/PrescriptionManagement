/*
 * Drug Sub Category Module Related js
 */
function checkDrugCategoryName(url){
    $("#ManufacturerName").focusin(function(){
        $("#divDtypeName").attr('style','display : none');
        $("#saveDtype").prop("disabled",false);
    });
    $("#ManufacturerName").focusout(function(){
        var manufacturerName = $(this).val();
        $.ajax({
                url: url+"DrugManagement/checkManufacturerName",
                type: "get",
                data: "manufacturerName="+manufacturerName,
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

function editDrugCategory(url){
    $(".editDTypeData").on('click',function(){
        var manufacturerId = $(this).attr("data-node");
        $("#editDtypeModuleData").empty();
        $.ajax({
                url: url+"DrugManagement/manufacturerEdit",
                type: "get",
                data: "manufacturerId="+manufacturerId,
                cache: false,
                success: function(data){
                    $("#editDtypeModuleData").append(data);
                }
            });
    });
}


