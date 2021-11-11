function buttonAddClick(productId) {
    $.ajax({
        url: "/cart/add/"+productId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            alert("Added successfully");
        },

        error: function (msg) {
            alert("Add to cart error: "+msg.responseJSON.message);
        }
    });
}
