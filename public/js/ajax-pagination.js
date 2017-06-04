$(function() {
    $('body').on('click', '.pagination a', function(e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];  
        var route = $(this).attr('href');
        $.ajax({
            url : route,
            data: {page: page},
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $('#messages').html(data);  
                location.hash = page;
            }
        });
    });
})