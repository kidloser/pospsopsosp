$(document).ready(function () {
    // $("#btnClick").click(function(){
    //     var dataPost = {
    //         a:"Saab",
    //         b:"Volvo",
    //         c:"BMW"
    //     };
    //     $.ajax({
    //         type: "POST",
    //         url: "./api/",
    //         data : {'dataPost': JSON.stringify(dataPost)},
    //         success: function (response)
    //         {
    //             var data = JSON.parse(response);
    //             //data = JSON.stringify(data);
    //             $("#txtResult").html(data['a']);
    //         },
    //         error: function(error) {
    //             alert("Something Wrong...");
    //         }
    //     });
    // }); 
    $("#btnGet").click(function () {
        $.ajax({
            type: "GET",
            url: "./api/todo.php",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            success: function (response) {
                var data = JSON.parse(response);
                $("#contentGet").html(data);
            },
            error: function (error) {
                alert("Something Wrong...");
            }
        });

    });
    $("#btnGetID").click(function () {
        var id = $("#txtInput").val();
        $.ajax({
            type: "GET",
            url: "./page/" + id,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            success: function (response) {
                $("#contentGet").html(response);
            },
            error: function (error) {
                alert("Something Wrong...");
            }
        });
    });
});