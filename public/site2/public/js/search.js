(function ($) {
    "use strict"; // Start of use strict

    $('.search-btn').click(function () {
        // $.ajax({
        //     type: 'GET',
        //     url: '/search',
        //     data: 'search='+$('.search').val(),
        //     dataType: 'json',
        //     success: function(data) {
        //         console.log(data);
        //         if (data && data.search) {
        //             console.log("foi");
        //         }
        //     },
        //     error: function(){
        //     }
        // });

        var link = '/search?search='+$('.search').val();
        window.location.replace(link);
    });

})(jQuery); // End of use strict
