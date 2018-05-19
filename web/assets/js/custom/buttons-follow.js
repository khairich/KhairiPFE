function followButtons() {
    $(".btn-follow").unbind("click").click(function () {
        $(this).addClass("hidden");
        $(this).parent().find(".btn-unfollow").removeClass("hidden");

        $.ajax({
            url:'http://localhost/Khairi_pfe/web/app_dev.php/follow',
            type: 'POST',
            data: {followed: $(this).attr("data-followed")},
            success: function (response) {
                console.log(response);
            }
        });
    });

    $(".btn-unfollow").unbind("click").click(function () {
        $(this).addClass("hidden");
        $(this).parent().find(".btn-follow").removeClass("hidden");

        $.ajax({
            url:'http://localhost/Khairi_pfe/web/app_dev.php/unfollow',
            type: 'POST',
            data: {followed: $(this).attr("data-followed")},
            success: function (response) {
                console.log(response);
            }
        });
    });

}
