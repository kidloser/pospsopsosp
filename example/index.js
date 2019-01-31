$(document).ready(function() {
    // // $("#btnClick").click(function(){
    // //     var dataPost = {
    // //         a:"Saab",
    // //         b:"Volvo",
    // //         c:"BMW"
    // //     };
    // //     $.ajax({
    // //         type: "POST",
    // //         url: "./api/",
    // //         data : {'dataPost': JSON.stringify(dataPost)},
    // //         success: function (response)
    // //         {
    // //             var data = JSON.parse(response);
    // //             //data = JSON.stringify(data);
    // //             $("#txtResult").html(data['a']);
    // //         },
    // //         error: function(error) {
    // //             alert("Something Wrong...");
    // //         }
    // //     });
    // // }); 
    // $("#btnGet").click(function() { 
    //     $.ajax({
    //         type: "GET",
    //         url: "./api/todo.php",
    //         headers: {
    //             'Content-Type': 'application/x-www-form-urlencoded'
    //         },
    //         success: function (response)
    //         {
    //             var data = JSON.parse(response);
    //             $("#contentGet").html(data);
    //         },
    //         error: function(error) {
    //             alert("Something Wrong...");
    //         }
    //     });
        
    // });
    // $("#btnGetID").click(function () {
    //     var id = $("#txtInput").val();
    //     $.ajax({
    //         type: "GET",
    //         url: "./page/"+ id,
    //         headers: {
    //             'Content-Type': 'application/x-www-form-urlencoded'
    //         },
    //         success: function (response) {
    //             $("#contentGet").html(response);
    //         },
    //         error: function (error) {
    //             alert("Something Wrong...");
    //         }
    //     });
    // });
    $("#btnGetData").click(function () {
        $.ajax({
            type: "GET",
            url: "./api/index",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            success: function (response) {
                var arrayData = JSON.parse(response);
                $.each(arrayData, function (i, valueOfElement) { 
                    var data = arrayData[i];
                    var content = "<tr><td> " + data.id + ".</td><td>" + data.name + "</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-danger' style='width: 55%'></div></div></td><td><span class='badge bg-red'>55%</span></td></tr>";
                    $("#table-data").append(content);
                });
            },
            error: function (error) {
                alert("Something Wrong...");
            }
        });
    });
});