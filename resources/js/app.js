require('./bootstrap');

window.$ = window.jQuery = require('jquery');

$(function () {
    if($('#user-menu-button').length && $('#user-menu').length) {
        $('#user-menu-button').on('click', function () {
            $('#user-menu').is(':hidden') ? $('#user-menu').fadeIn() : $('#user-menu').fadeOut();
        });
    }

    if($('#mobile-menu-open-button').length && $('#mobile-menu').length) {
        $('#mobile-menu-open-button').on('click', function () {
            $('#mobile-menu').is(':hidden') ? $('#mobile-menu').fadeIn() : $('#mobile-menu').fadeOut();
        });
    }
});