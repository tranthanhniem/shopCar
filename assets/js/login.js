
$(document).ready(function () {
    $('#eye').click(function () {
        $(this).toggleClass('openEye');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if ($(this).hasClass('openEye')) {
            $(this).prev().attr('type', 'text');
        } else {
            $(this).prev().attr('type', 'password');
        }
    });
});