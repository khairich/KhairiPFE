$(document).ready(function () {

    // when the focus of the input is removed, the event is executed
    $(".nick-input").blur(function () {
       var nick = this.value;

        $.ajax({
            url:'http://localhost/Khairi_pfe/web/app_dev.php/nick-test',
            data: {nick: nick},
            type: 'POST',
            success: function (response) {
                if (response == "used") {
                    $(".nick-input").css("border", "1px solid red");
                } else {
                    $(".nick-input").css("border", "1px solid green");
                }
            }

        });

    });


});