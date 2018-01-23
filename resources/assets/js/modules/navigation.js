// open small nav
$('.button-nav-small-open').click(function (e) {
    e.preventDefault();
    $('#sidenav-small-preview').addClass('closed');
    $('#sidenav-small').addClass('open');
});

// close small nav
$('.button-nav-small-close').click(function (e) {
    e.preventDefault();
    $('#sidenav-small-preview').removeClass('closed');
    $('#sidenav-small').removeClass('open');
});

// open large nav
$('.button-nav-large-menu-text').click(function (e) {
    e.preventDefault();
    $('#sidenav-large').toggleClass('open');
    if ($('.sidenav-inside').hasClass('open')) {
        $('.sidenav-inside').removeClass('open');

    }

});

$('.button-nav-large-toggle').click(function (e) {
    e.preventDefault();
    $('#sidenav-large').removeClass('open');
    $('.sidenav-inside').removeClass('open');
});

// When a link on the navigation is clicked, close menu first, then change menus.
$('.nav .nav-link').click(function (e) {
    e.preventDefault();

    //$(this).closest('.nav').removeClass('open');

    setTimeout(() => {
        window.location = $(this).attr('href');
    }, 1000);
});

// This prevents the nav from being closed when not intended. See next event listener
$('.nav').click(function (e) {
    e.stopPropagation();
});

// If user clicks anywhere other than the nav menus, the nav menu will be closed
$('body').click(function () {
    $('#sidenav-large, #sidenav-small').removeClass('open');
    $('#sidenav-small-preview').removeClass('closed')
});


//INSIDE NAVIGATION


// open small nav
$('.button-nav-small-open').click(function (e) {
    e.preventDefault();
    $('#sidenav-small-preview').addClass('closed');
    $('#sidenav-small').addClass('open');
});

// close small nav
$('.button-nav-small-close').click(function (e) {
    e.preventDefault();
    $('#sidenav-small-preview').removeClass('closed');
    $('#sidenav-small').removeClass('open');
});

// ALL INSIDE NAV WORK IS RIGHT HERE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$('.button-nav-inside-menu-text').click(function (e) {
    e.preventDefault();
    var id = $(this).attr("id");

    if (event.target.id == 'firstitem') {
        $('.sidenav-inside').removeClass('open');
        $('#sidenav-large').removeClass('open');
    }

    if (event.target.id == 'firstandhalfitem') {
        $('.sidenav-inside').removeClass('open');
        $('#sidenav-large').removeClass('open');
    }

    if (event.target.id == 'seconditem') {
        $('.sidenav-inside').removeClass('open');
        $('#sidenav-large').removeClass('open');
    }

    if (event.target.id == 'thirditem') {
        $('.sidenav-inside').removeClass('open');
        $('#sidenav-large').removeClass('open');
    }

    if (event.target.id == 'fourthitem') {
        $('.sidenav-inside').removeClass('open');
        $('#sidenav-large').removeClass('open');
    }

    if (event.target.id == 'fifthitem') {
        $('.sidenav-inside').removeClass('open');
        $('#sidenav-large').removeClass('open');
    }

    if (event.target.id == 'sixthitem') {
        $('.sidenav-inside').removeClass('open');
        $('#sidenav-large').removeClass('open');
    }

    if (event.target.id == 'seventhitem') {
        $('.sidenav-inside').removeClass('open');
        setTimeout(() => {
            $('#inside-seven').addClass('open');
        }, 400);
    }

    if (event.target.id == 'eighthitem') {
        $('.sidenav-inside').removeClass('open');
        $('#sidenav-large').removeClass('open');
    }

    if (event.target.id == 'ninthitem') {
        $('.sidenav-inside').removeClass('open');
        $('#sidenav-large').removeClass('open');
        // setTimeout(() => {
        //     $('#inside-nine').addClass('open');
        // }, 400);
    }

    if (event.target.id == 'tenthitem') {
        $('.sidenav-inside').removeClass('open');
        $('#sidenav-large').removeClass('open');
    }


});


$('.button-nav-inside-toggle').click(function (e) {
    e.preventDefault();
    $('.sidenav-inside').removeClass('open');
});

$('.button-nav-inside-menu-text').click(function (e) {
    e.preventDefault();
    $('.sidenav-inside').removeClass('open');
});

// When a link on the navigation is clicked, close menu first, then change menus.
//MAKE THESE .insidenav and .insidenav-link AND THEN TOGGLE OPEN
$('.nav .nav-link').click(function (e) {
    e.preventDefault();

    // $(this).closest('.nav').removeClass('open');

    setTimeout(() => {
        window.location = $(this).attr('href');
    }, 1000);
});

// This prevents the nav from being closed when not intended. See next event listener
$('.nav').click(function (e) {
    e.stopPropagation();
});

// If user clicks anywhere other than the nav menus, the nav menu will be closed
$('body').click(function () {
    $('.sidenav-inside, #sidenav-small').removeClass('open');
    $('#sidenav-small-preview').removeClass('closed')
});


//Scrolls to specific section on page based on url pathname
$(document).ready(function(){

   // document.getElementById("demo").innerHTML = "Read Less";
    var param = document.location.pathname;
    if(window.location.href.indexOf("#") > -1){

        $('.showmorecontent').addClass('showing');
    }
    $('html, body').animate({
        scrollTop: $(param.substr(1)).offset().top
    }, 2500);
    return false;
});

$(function(){

   // document.getElementById("demo").innerHTML = "Read Less";
    var param = document.location.pathname;
    if(window.location.href.indexOf("#") > -1){

        $('.showmorecontent').addClass('showing');
    }
    $('html, body').animate({
        scrollTop: $(param.substr(1)).offset().top
    }, 2500);
    return false;
});