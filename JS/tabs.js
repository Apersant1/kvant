$('.tabs li').click(function() {

    // Content
    $('.content p').hide();
    $('#' + $(this).attr('data-content-id')).show();

    // Tabs
    $('.tabs li').removeClass('active');
    $(this).addClass('active');
});