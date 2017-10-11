/*
 * User Module Related js
 */
function checkUserId(url){
     $("#UserId").focusin(function(){
         $("#divUserId").attr('style','display : none');
         $("#saveUser").prop("disabled",false);
     });
    $("#UserId").focusout(function(){
        var userName = $(this).val();
        $.ajax({
                url: url+"UserManager/checkUserName",
                type: "get",
                data: "userName="+userName,
                cache: false,
                success: function(data){
                    console.log('Return Data' + data);
                    if(data == 0){
                        $("#divUserId").attr('style','display : block');
                        $("#saveUser").prop("disabled",true);
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


