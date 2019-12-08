$(document).ready(function(){

    // console.log('cookieoptin');

    cookieGroupArray = [];

    $('.bs-checkbox').click(function(){
        if (!$(this).hasClass('ronly')) {
            $(this).toggleClass('checked');
            cookieGroupIdentifier = $(this).attr('data-cookiegroupid');
            if ($(this).hasClass('checked')) {
                cookieGroupArray.push(cookieGroupIdentifier);
            } else {
                cookieGroupArray.splice($.inArray(cookieGroupIdentifier, cookieGroupArray), 1);
            }
            $('#cookieGroupArray').val(cookieGroupArray);
        }
    });
    $('.cookiegroup-toggle').click(function(){
        $('.cookiegroup-toggle').parent().parent().parent().find('.cookies').slideUp();
        $(this).parent().parent().parent().find('.cookies').slideToggle();
    });

});