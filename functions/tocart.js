
var addtocart = function(id) {
    
    $.ajax({
        url: 'addToCart.php',
        type: 'POST',
        dataType : 'json',
        data: {id:id},
        success: function(data) {
            alert(data); // Inspect this in your console
        }
    });
};
