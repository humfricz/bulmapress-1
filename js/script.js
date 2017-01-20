(function($, window, document){
    $(function() {

        // The DOM is ready!
        var $toggle = $('#nav-toggle');
        var $menu = $('#nav-menu');

        $toggle.click(function () {
            $(this).toggleClass('is-active');
            $menu.toggleClass('is-active');
        });

        $('.modal-button').click(function() {
            var target = $(this).data('target');
            $('html').addClass('is-clipped');
            $(target).addClass('is-active');
        });

        $('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button').click(function() {
            $('html').removeClass('is-clipped');
            $(this).closest('.is-active').removeClass('is-active');
        });

        $('.tabs ul li a').click(function () {
            // remove 'is-active' class from all tabs
            $(this).closest('ul').children().removeClass('is-active');
            // add 'is-active' class to clicked tab
            $(this).parent().addClass('is-active');
            // remove 'is-active' class from all tabpanes
            $(this).closest('div').next().children().removeClass('is-active');
            // add 'is-active' class to nth tabpane
            var index = $(this).parent().index();
            $(this).closest('div').next().children().eq(index).addClass('is-active');
        });

        $('.video .play').click(function() {
            var $this = $(this),
                videoId = /^https:\/\/www\.youtube\.com\/watch\?v\=([a-zA-Z0-9-]+)$/.exec($this.attr('href'))[1];
            $this.parent().parent().html('<div class="video-embed"><iframe src="https://www.youtube.com/embed/' + videoId + '?autoplay=1&modestbranding=1&rel=0" frameborder="0" allowfullscreen></iframe></div>');
            return false;
        });

    });

    // The rest of your code goes here!

}(window.jQuery, window, document));
