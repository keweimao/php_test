$(document).ready(function(){
    $("#addRecord").click(function(){
        // 1. get values from inputs
        var pname = $("#productName").val(); 
        var cid = $("#catId").val(); 
        var price = $("#listPrice").val(); 

        // 2. send GET request to addProduct API
        var serverURL = "addProduct.php?name=" + pname
                        + "&cat_id=" + cid
                        + "&price=" + price; 

        // 3. get data through the callback function
        $.get(serverURL, function(data, status){
            console.log("data and status:", data, status); 
            $("#status").text(data + ", " + status); 
        });
    });

    $("#btnReload").click(function(){
        $.get("getAllProducts.php", function(data, status){
            console.log(data); 
            $.each(data, function(index, record){
                var name = record["productName"]; 
                var catid = record["catId"]; 
                var price = record["listPrice"]; 
                $("#list").append("<li>" + name + ", " + price + "</li>"); 
            }); 

        }); 
    }); 
});