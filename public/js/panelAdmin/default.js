$("body").removeClass("bg-dark");

$(document).ready(function () {
    $('[data-toggle="offcanvas"]').click(function () {
        $('#side-menu').toggleClass('d-block');
    })
})