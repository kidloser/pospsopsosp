$(document).ready(function () {
    $("#btnRegister").click(function () {
        var username = $("#txtUsername").val();
        var password = $("#txtPassword").val();
        var rePassword = $("#txtRePassword").val();
        if (password === rePassword){
            var dataPost = {
                username: username,
                password: password
            };
            $.ajax({
                type: "POST",
                url: "./api/register",
                data: { 'dataPost': JSON.stringify(dataPost) },
                success: function (response) {
                    window.location.replace("./login");
                },
                error: function (error) {
                    alert("Something Wrong...");
                }
            });
        }
        else{
            alert("Pass deo trung nhau");
        }
        
    });
});