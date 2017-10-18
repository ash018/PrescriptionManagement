/*
 * Drug Module Related js
 */
function checkDrugCategoryName(url) {
    $("#selectItemCategory , DrugSubcategoryId").focusin(function () {
        $("#divDcategoryName").attr('style', 'display : none');
        $("#saveDcategory").prop("disabled", false);

    });
    $("#selectItemCategory , DrugSubcategoryId").focusout(function () {
        var dSubCategoryId = $("#DrugSubcategoryId").select().val();
        var drugName = $("#DrugName").val();

        $.ajax({
            url: url + "DrugManagement/checkDrugName?",
            type: "get",
            data: "drugName=" + drugName + "&subCategoryId=" + dSubCategoryId,
            cache: false,
            success: function (data) {
                if (data == 0) {
                    $("#divDcategoryName").attr('style', 'display : block');
                    $("#saveDcategory").prop("disabled", true);
                }
            }
        });
    });
}
function checkDrugName(baseUrl, drugName, dSubCategoryId) {
    $("#selectItemCategory , DrugSubcategoryId").focusin(function () {
        $("#divDcategoryName").attr('style', 'display : none');
        $("#saveDcategory").prop("disabled", false);

    });
    $("#selectItemCategory , DrugSubcategoryId").focusout(function () {
        var dSubCatId = $("#DrugSubcategoryId").select().val();
        var dName = $("#DrugName").val();

        if (drugName != dName && dSubCategoryId != dSubCatId) {
            console.log(dName + "--" + dSubCatId);
            $.ajax({
                url: baseUrl + "DrugManagement/checkDrugName?",
                type: "get",
                data: "drugName=" + dName + "&subCategoryId=" + dSubCatId,
                cache: false,
                success: function (data) {
                    if (data == 0) {
                        $("#divDcategoryName").attr('style', 'display : block');
                        $("#saveDcategory").prop("disabled", true);
                    }
                }
            });
        }

    });

}
function subCategoryAccordingtoCategory(url) {
    $("#DrugCategoryId").change(function () {
        var categoryId = $(this).select().val();
        $("#selectItemCategory").empty();
        $.ajax({
            url: url + "DrugManagement/subCategoryAccordingToCategory",
            type: "get",
            data: "categoryId=" + categoryId,
            cache: false,
            success: function (data) {

                $("#selectItemCategory").append(data);
            }
        });
    });
}

function editDrug(url) {
    $(".editDrug").on('click', function () {
        //$("#modalTitleControll").empty();
        $("#editDcategoryModuleData").empty();
        $("#modalTitleControll").text("Edit Drug");
        var drugId = $(this).attr("data-node");
        $("#editDcategoryModuleData").empty();
        $.ajax({
            url: url + "DrugManagement/drugEdit",
            type: "get",
            data: "drugId=" + drugId,
            cache: false,
            success: function (data) {
                $("#editDcategoryModuleData").append(data);
            }
        });
    });
}

function checkDrugSubCategory(url, subCategoryName, categoryId) {
    $("#DrugCategoryId").focusin(function () {
        $("#divDcategoryName").attr('style', 'display : none');
        $("#saveDcategory").prop("disabled", false);
    });
    $("#DrugCategoryId").focusout(function () {
        var dCategoryId = $(this).select().val();//$('#selectorId option:selected').val()
        var dSuvCategory = $("#DrugSubcategoryName").val();
        if (subCategoryName != dSuvCategory && dCategoryId != categoryId) {
            $.ajax({
                url: url + "DrugManagement/checkdrugSubCategoryName?",
                type: "get",
                data: "subCategoryName=" + dSuvCategory + "&categoryId=" + dCategoryId,
                cache: false,
                success: function (data) {
                    if (data == 0) {
                        $("#divDcategoryName").attr('style', 'display : block');
                        $("#saveDcategory").prop("disabled", true);
                    }
                }
            });
        }

    });
}

function editDrugManufacturer(url){
    $(".editDrug").click(function(){
        $("#editDcategoryModuleData").empty();
        var drugManuId = $(this).attr('data-node');
        $.ajax({
            url: url + "DrugManagement/editDrugManufecturer",
            type: "get",
            data: "drugManuId=" + drugManuId,
            cache: false,
            success: function (data) {
                $("#editDcategoryModuleData").append(data);
            }
        });
    });
}
