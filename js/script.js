(function ($, window, document) {
    $(function () {

        // The DOM is ready!
        var $navToggle = $('#nav-toggle');
        var $navMenu = $('#nav-menu');

        $navToggle.click(function () {
            var $this = $(this);
            $this.toggleClass('is-active');
            $navMenu.toggleClass('is-active');
        });

        $('.modal-button').click(function () {
            var $this = $(this);
            var target = $this.data('target');
            $('html').addClass('is-clipped');
            $(target).addClass('is-active');
        });

        $('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button').click(function () {
            var $this = $(this);
            $('html').removeClass('is-clipped');
            $this.closest('.is-active').removeClass('is-active');
        });

        $('.tabs ul li a').click(function () {
            var $this = $(this);
            // remove 'is-active' class from all tabs
            $this.closest('ul').children().removeClass('is-active');
            // add 'is-active' class to clicked tab
            $this.parent().addClass('is-active');
            // remove 'is-active' class from all tabpanes
            $this.closest('div').next().children().removeClass('is-active');
            // add 'is-active' class to nth tabpane
            var index = $this.parent().index();
            $this.closest('div').next().children().eq(index).addClass('is-active');
        });

        $('.video .play').click(function () {
            var $this = $(this),
                videoId = /^https:\/\/www\.youtube\.com\/watch\?v\=([a-zA-Z0-9-]+)$/.exec($this.attr('href'))[1];
            $this.parent().parent().html('<div class="video-embed"><iframe src="https://www.youtube.com/embed/' + videoId + '?autoplay=1&modestbranding=1&rel=0" frameborder="0" allowfullscreen></iframe></div>');
            return false;
        });

        $('#showtoast').click(function() {
            var title = $('#title').val() || '';
            var msg = $('#message').val();
            var toastType = $('#toastTypeGroup').find('input:radio:checked').val();
            var toastPosition = $('#positionGroup').find('input:radio:checked').val();

            if (!$('#notification-container').length) {
                $('body').append($('<div>', {id: 'notification-container'}));
            }

            var notification = $('<div>', {'class': 'notification is-' + toastType + ' ' + toastPosition})
                .append($('<button>', {'class':'delete'}))
                .append(msg)
                .hide()
                .appendTo($('#notification-container'))
                .fadeIn()
                .trigger('toast');
        });

        $('body')
            .on('toast', 'div.notification', function() {
                var $this = $(this);
                window.setTimeout(function() {
                    $this.fadeOut(function() {
                        $this.remove();
                        if (!$('#notification-container').find('> div.notification').length) {
                            $('#notification-container').remove();
                        }
                    });
                }, 5000);
            })
            .on('click', '.notification > .delete', function () {
                var $this = $(this);
                $this.parent().fadeOut(function() {
                    $this.remove();
                });
            });

    });

    // The rest of your code goes here!

}(window.jQuery, window, document));
