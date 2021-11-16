function buttonAddClick(productId, userId) {
    $.ajax({
        url: "/cart/add/" + productId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            getCountItemsByUserId(userId);
            alert("Added successfully");
        },

        error: function (msg) {
            alert("Add to cart error: " + msg.responseJSON.message);
        }
    });
}

function buttonDeleteClick(id, userId) {
    $.ajax({
        url: "/cart/delete/" + id,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            let cartId = "#cart_" + id;
            $(cartId)[0].remove();
            getCountItemsByUserId(userId);
            alert("Deleted successfully");

            getPriceItemsByUserId(userId)
            getCountItemsByUserId(userId);
        },

        error: function (msg) {
            alert("Delete from cart error: " + msg.responseJSON.message);
        }
    });
}

function getCountItemsByUserId(userId) {
    $.ajax({
        url: "/cart/getCountItems/" + userId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            $("#cartCountItems")[0].innerHTML = data;
        },

        error: function (msg) {
            alert("Get cart count error: " + msg.responseJSON.message);
        }
    });
}

function getPriceItemsByUserId(userId) {
    $.ajax({
        url: "/cart/getPriceItems/" + userId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            $("#cartPrice")[0].innerHTML = "$" + data;
        },

        error: function (msg) {
            alert("Get cart price error: " + msg.responseJSON.message);
        }
    });
}
