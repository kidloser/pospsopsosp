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
            url: "./api/login.php",
            data : {'dataPost': JSON.stringify(dataPost)},
            success: function (response)
            {
                // var data = JSON.parse(response);
                // //data = JSON.stringify(data);
                // $("#txtResult").html(data['a']);]\
                alert(response);
            },
            error: function(error) {
                alert("Something Wrong...");
            }
        });
    }); 
});