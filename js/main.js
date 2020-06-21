$("#sendButton").on("click", function () {

    let username = $("#username").val().trim(),
        email = $("#email").val().trim(),
        phone = $("#phone").val().trim(),
        message = $("#message").val().trim();

    $.ajax({
        url: 'ajax/save_data.php',
        type: 'POST',
        cache: false,
        data: {
            'username': username,
            'email': email,
            'phone': phone,
            'message': message
        },
        dataType: 'html',
        success: function(data) {
            if (data) {
                alert(data);
            }
            else {
                $("#sendForm").trigger("reset");
            }
        }
    });
});
