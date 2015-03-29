// loading state on a button for save buttons
$('#save').on('click', function () {
    var $btn = $(this).button('loading')
})

$(function () {
    $('[data-toggle="popover"]').popover()
})