$(function() {
	var currentPage = 1;
    $('#slider .buttons span').live('click', function() {
        var timeout = setTimeout(function() {$("img").trigger("slidermove")}, 300);
        var fragments_count = $(this).parents('#slider:eq(0)').find('.fragment').length;
        var fragmet_width = $(this).parents('#slider:eq(0)').find('.fragment').width();
        var perPage = 5;
        var numPages = Math.ceil(fragments_count/perPage);
        var stepMove = fragmet_width*perPage;
        var container = $(this).parents('#slider:eq(0)').find('.content');
        var firstPosition = 0;
        var lastPosition = -((numPages-1)*stepMove);
        
        if ($(this).hasClass('next')) {
            currentPage ++;
            if (currentPage > numPages) {
                currentPage = 1;
                container.animate({'left': firstPosition});
                return;
            };
            container.animate({'left': -((currentPage - 1)*stepMove)});
        };
        if ($(this).hasClass('prev')) {
            currentPage --;
            if (currentPage < 1) {
                currentPage = numPages;
                container.animate({'left': lastPosition});
                return;
            };
            container.animate({'left': -((currentPage-1)*stepMove)});
        };
    });
});