

$(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 50) {
            $(".webHeader").addClass("activeHedaer");
        } else {
            $(".webHeader").removeClass("activeHedaer");
        }
    });
});


$(".menuBar").click(function () {
    $(".webHeader").toggleClass("mobileHeader");
    $(".leftBar").toggleClass("mobileSidebar");
});


$(".MainMenuBar").click(function () {
    $(".mainHeader").toggleClass("extendmainHeader");
    $(".mainLeftBar").toggleClass("extendmainLeftBar");
    $(".dashboardMainPage").toggleClass("extenddashboardMainPage");
});

$(".mainContainer").click(function () {
    $(".webHeader").removeClass("mobileHeader");
    $(".leftBar").removeClass("mobileSidebar");
});


$(document).ready(function () {

    // Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
            $('.top').fadeIn();
        } else {
            $('.top').fadeOut();
        }
    });

    // Click event to scroll to top
    $('.top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

});


// add scoll in header
$(document).ready(function () {
    $(".add-scroll").click(function () {
        $("header").css({ "overflow-y": "scroll" });
    });
});


var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})