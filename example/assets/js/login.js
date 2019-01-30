$(document).ready(function () {
    $("#btnLogin").click(function(){
        var username = $("#txtUsername").val();
        var password = $("#txtPassword").val();
        var dataPost = {
            username: username,
            password: password
        };
        $.ajax({
            type: "POST",
            url: "./api/login",
            data : {'dataPost': JSON.stringify(dataPost)},
            success: function (response)
            {
                if(response == "1"){
                    window.location.replace("./");
                }
                else{
                    alert("Invalid username or password");
                }
            },
            error: function(error) {
                alert("Something Wrong...");
            }
        });
    }); 
});