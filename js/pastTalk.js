var RSCG = RSCG || {};

RSCG.pastTalk = (function ($) {

    var isPastTalkPage = function() {
            return $('.past-talks-page').length;
        },
        isMobile = function() {
            return ($(window).width() < 767);
        },
        desktopOrSmaller = function() {
            return ($(window).width() < 991);
        },
        setMainVideo = function(videoMeta) {
            var $mainVid = $('.top-video');

            $mainVid.find('.video-title').html(videoMeta.title);
            $mainVid.find('.moderator').html(videoMeta.moderator).addClass(videoMeta.isSpeaker);
            $mainVid.find('.panelists').html(videoMeta.panelists);
            $mainVid.find('.thumbplayer-container').attr('data-id', videoMeta.videoURL);

        },
        getVideoMeta = function(rowClass) {

            var $row = $(rowClass);

            if ($row.length) {

                return {
                    title       : $row.find('.video-title').html(),
                    moderator   : $row.find('.moderator').html() ? $row.find('.moderator').html() : '',
                    panelists   : $row.find('.panelists').html() ? $row.find('.panelists').html() : '',
                    videoURL    : $row.find('.thumbplayer-container').attr('data-id'),
                    isSpeaker   : $row.find('.moderator .aoc-label').text() ? $row.find('.moderator .aoc-label').text() : ''
                    }
            }
        },
        resizeVar,
        initialPageLoad = true,
        removeDropdown = function() {
          var $dropdowns        = $('.dropdown', '.video-view'),
              $dropdownMenus    = $('.dropdown-menu', '.video-view');

            //console.log('removing dropdowns');

            if ($dropdowns.length && $dropdownMenus.length) {
                // add placeholder classes
                $dropdowns.addClass('dropdown-mobile');
                $dropdownMenus.addClass('dropdown-menu-mobile');

                // remove dropdown and dropdown-menu classes
                $('.dropdown-mobile', '.video-view').removeClass('dropdown');
                $('.dropdown-menu-mobile', '.video-view').removeClass('dropdown-menu');
            }

        },
        addBackDropdown = function() {

            //console.log('adding back dropdowns');

            var $dropdownsM        = $('.dropdown-mobile', '.video-view'),
                $dropdownMenusM    = $('.dropdown-menu-mobile', '.video-view');


            if ($dropdownsM.length && $dropdownMenusM.length) {
                // add placeholder classes
                $dropdownsM.addClass('dropdown');
                $dropdownMenusM.addClass('dropdown-menu');

                // remove dropdown and dropdown-menu classes
                $('.dropdown', '.video-view').removeClass('dropdown-mobile');
                $('.dropdown-menu', '.video-view').removeClass('dropdown-menu-mobile');
            }
        },
        pageLoad = function() {

            if (isPastTalkPage()) {

                // setup action for thumbbutton clicks
                setupVideoSwitch();

                // set main video to first video
                setMainVideo(getVideoMeta('.views-row-1'));

                // set click listeners for video headers
                headerClick();

                // remove dropdown classes on mobile page load
                if (desktopOrSmaller()) {
                    removeDropdown();
                }

                // stop main video if window resize
                // remove, add dropdown classes on resize
                $(window).on('resize', function() {

                    if (!initialPageLoad) {

                        clearTimeout(resizeVar);

                        resizeVar = setTimeout(function() {

                            if (desktopOrSmaller()) {
                                removeDropdown();
                            }
                            else {
                                addBackDropdown();
                            }

                            if (isMobile()) {
                                stopMainVideo();
                            }
                            // if not mobile, re-initialize top video w. thumbplayer
                            else {
                                if ($('.thumbplayer', '.top-video').html() == '') {

                                    RSCG.youtubeThumb.initializeSingle($('.thumbplayer-container', '.top-video'));

                                }
                            }

                        }, 150);
                    }
                });

                initialPageLoad = false;
            }
        },
        playMainVideo = function(videoURL) {
            stopMainVideo();
            videoURL += '?autoplay=1&rel=0';
            $('.thumbplayer', '.top-video').append('<iframe id="aoc_past_top_video" src="' + videoURL + '" frameborder="0" allowfullscreen=""></iframe>')
        },
        stopMainVideo = function() {
            $('.thumbplayer', '.top-video').html('');
            //setMainVideo(getVideoMeta('.' + viewArr[1]));
        },
        setupVideoSwitch = function() {
            $('.video-switcher').on('click', function(e) {

                e.preventDefault();

                var viewRowClasses  = $(this).closest('.views-row').attr('class'),
                    videoURL        = $(this).closest('.thumbbutton').attr('data-id'),
                    viewArr         = viewRowClasses.split(" ");


                // set the meta data of the main video
                setMainVideo(getVideoMeta('.' + viewArr[1]));


                // scroll the user to the top video
                $("html, body").animate({ scrollTop: $('.past-talks').offset().top }, 1000, function () {

                    // play the video
                    playMainVideo(videoURL);
                });

            });
        },
        headerClick = function() {
            //expanding extra info under video views
            $(".view-past-talks .header").click(function () {
                $header = $(this);
                $content = $header.next();
                $header.parent().toggleClass('open');
                $header.parent().parent().toggleClass('open');
                $content.slideToggle(500, function () {
                });
            });
        };


    return {
        initialize: pageLoad
    }

})(jQuery);


//DOM is ready
jQuery(function () {

    RSCG.pastTalk.initialize();

});