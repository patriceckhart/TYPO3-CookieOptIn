$(document).ready(function(){
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
    cookiec = 0;
    $('.cookiegroup-toggle').click(function(){
        attr = $(this).attr('data-cookiec');
        if(attr==1) {
            $(this).parent().parent().parent().find('.cookies').slideToggle();
        } else {
            $('.cookiegroup-toggle').parent().parent().parent().find('.cookies').slideUp();
            $(this).parent().parent().parent().find('.cookies').slideToggle();
            $('.cookiegroup-toggle').attr('data-cookiec',0);
            $(this).attr('data-cookiec',1);
        }
    });
});