$(document).ready(function () {

    var ias = jQuery.ias({
        container: '#notifications .box-content',
        item: '.notification-item',
        pagination: '#notifications .pagination',
        next: '#notifications .pagination .next_link',
        triggerPageThreshold: 5
    });

    ias.extension(new IASTriggerExtension({
        text: 'See more notifications',
        offset: 3
    }));

    ias.extension(new IASSpinnerExtension({
        src:'http://localhost/Khairi_pfe/web/app_dev.php/../assets/images/ajax-loader.gif' // modify outside of app_dev.php
    }));

    ias.extension(new IASNoneLeftExtension({
        text: 'No more notifications'
    }));

    ias.on('ready', function (event) {

    });

    ias.on('rendered', function (event) {

    });

});
