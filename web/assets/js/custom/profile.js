$(document).ready(function () {

    var ias = jQuery.ias({
        container: '.profile-box #user-publications',
        item: '.publication-item',
        pagination: '.profile-box .pagination',
        next: '.profile-box .pagination .next_link',
        triggerPageThreshold: 5
    });

    ias.extension(new IASTriggerExtension({
        text: 'See more publications',
        offset: 3
    }));

    ias.extension(new IASSpinnerExtension({
        src:'http://localhost/Khairi_pfe/web/app_dev.php/../assets/images/ajax-loader.gif' // modify outside of app_dev.php
    }));

    ias.extension(new IASNoneLeftExtension({
        text: 'No more publications'
    }));

    ias.on('ready', function(event) {
        buttons();
        followButtons();
    });

    ias.on('rendered', function(event) {
        buttons();
    });

});

function buttons() {
    // tooltip button I like it
    $('[data-toggle="tooltip"]').tooltip();


    $(".btn-img").unbind("click").click(function () {
       $(this).parent().find('.pub-image').fadeToggle();
    });

    $(".btn-delete-pub").unbind("click").click(function () {
       $(this).parent().parent().addClass('hidden');

        $.ajax({
            url:'http://localhost/Khairi_pfe/web/app_dev.php/publication/remove/'+$(this).attr("data-id"),
            type: 'GET',
            success: function (response) {
                console.log(response);
                $("#ajax-notifications").removeClass('hidden').html(response);
            }
        });
    });

    $(".btn-like").unbind("click").click(function () {
        $(this).addClass('hidden');
        $(this).parent().find('.btn-dislike').removeClass('hidden');

        $.ajax({
            url:'http://localhost/Khairi_pfe/web/app_dev.php/like/'+$(this).attr("data-id"),
            type: 'GET',
            success: function (response) {
                console.log(response);
            }
        });
    });

    $(".btn-dislike").unbind("click").click(function () {
        $(this).addClass('hidden');
        $(this).parent().find('.btn-like').removeClass('hidden');

        $.ajax({
            url:'http://localhost/Khairi_pfe/web/app_dev.php/dislike/'+$(this).attr("data-id"),
            type: 'GET',
            success: function (response) {
                console.log(response);
            }
        });
    });

}