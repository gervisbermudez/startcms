import M from "materialize-css";

require("./bootstrap");
require("alpinejs");



var jQuery = require("jquery");

//Main pages

jQuery(function($) {
    M.AutoInit();

    /* $("a.sidenav-trigger-lg").click(function(e) {
        $("body").toggleClass("sidenav-open");
        $("#slide-out").removeAttr("style");
    });

    $(".sidenav").niceScroll();

    $("#darkmode-switch").change(function(e) {
        e.preventDefault();
        $("html").toggleClass("dark-mode");
        if ($(this).is(":checked")) {
            localStorage.setItem("dark-mode", "dark-mode");
        } else {
            localStorage.removeItem("dark-mode", "dark-mode");
        }
    });

    $("#darkmode-switch").prop("checked", false);

    if (localStorage.getItem("dark-mode")) {
        $("html").toggleClass("dark-mode");
        $("#darkmode-switch").prop("checked", true);
    } */
});
