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

    $('body').on('click', 'th a', function(e) {
        e.preventDefault();
        var dir = $(this).attr('href').split('dir=')[1];
        var order = $(this).attr('href').slice(16,-8);
        $.ajax({
            url: '/messages' + '?order=' + order + '&dir=' + dir,
            type: 'GET',
            success: function (data) {
                $('#messages').html(data);  
            }
        })
    })
})