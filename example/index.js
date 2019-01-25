$(document).ready(function() {
    $("#btnClick").click(function(){
        var dataPost = {
            a:"Saab",
            b:"Volvo",
            c:"BMW"
        };
        $.ajax({
            type: "POST",
            url: "./api/index.php",
            data : {'dataPost': JSON.stringify(dataPost)},
            success: function (response)
            {
                var data = JSON.parse(response);
                //data = JSON.stringify(data);
                $("#txtResult").html(data['a']);
            },
            error: function(error) {
                alert("Something Wrong...");
            }
        });
    }); 
});
// $.ajax({
//     type: "GET",
//     url: "./api/index.php",
//     headers: {
//         'Content-Type': 'application/x-www-form-urlencoded'
//     },
//     success: function (response)
//     {
//         //var data = JSON.parse(response);
//     },
//     error: function(error) {
//         alert("Something Wrong...");
//     }
// });