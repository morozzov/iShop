function buttonAddClick(productId) {
    $.ajax({
        url: "/cart/add/" + productId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            getCountItemsByUserId();
            alert("Added successfully");
        },

        error: function (msg) {
            alert("Add to cart error: " + msg.responseJSON.message);
        }
    });
}

function buttonDeleteClick(id) {
    $.ajax({
        url: "/cart/delete/" + id,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            let cartId = "#cart_" + id;
            $(cartId)[0].remove();

            getPriceItemsByUserId()
            getCountItemsByUserId();

            alert("Deleted successfully");
        },

        error: function (msg) {
            alert("Delete from cart error: " + msg.responseJSON.message);
        }
    });
}

function buttonPurchaseClick() {
    $.ajax({
        url: "/purchases/make",
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            $("#container")[0].innerHTML = ' <h3>Cart is empty</h3>';

            alert("Thank you for purchase");
        },

        error: function (msg) {
            alert("Get cart count error: " + msg.responseJSON.message);
        }
    });
}

function getCountItemsByUserId() {
    $.ajax({
        url: "/cart/getCountItems",
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

function getPriceItemsByUserId() {
    $.ajax({
        url: "/cart/getPriceItems",
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
