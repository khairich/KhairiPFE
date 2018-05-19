$(document).ready(function () {

    var ias = jQuery.ias({
        container: '.box-users',
        item: '.user-item',
        pagination: '.pagination',
        next: '.pagination .next_link',
        triggerPageThreshold: 5
    });

    ias.extension(new IASTriggerExtension({
        text: 'See more people',
        offset: 3
    }));

    ias.extension(new IASSpinnerExtension({
        src:'http://localhost/Khairi_pfe/web/app_dev.php/../assets/images/ajax-loader.gif' // modify outside of app_dev.php
    }));

    ias.extension(new IASNoneLeftExtension({
        text: 'No more people'
    }));

    ias.on('ready', function(event) {
        followButtons();
    });

    ias.on('rendered', function(event) {
        followButtons();
    });

});