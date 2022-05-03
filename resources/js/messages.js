$(function ($) {
    function myStopFunction() {
        clearTimeout(errorMessages);
    }
});

const errorMessages = setTimeout(function () {
        $(".error-message").css("display", "none");
}, 5000);
