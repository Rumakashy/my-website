var $ = require('jquery');
require('bootstrap');
require('jquery');
$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});

$(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });
});