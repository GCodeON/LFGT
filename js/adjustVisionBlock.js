/*
    JS function to adjust the height of the "1 Vision" block on the homepage
 */
(function ($) {

    var isDesktopAndUp = function() {
        return ($(window).width() > 992);
        },
        isHomepage = function() {
            return $('.front').length;
        },
        getGridHeight = function() {
            return $('.grid', '.front').height();
        },
        // TODO: programatically get padding value
        getPadding = function() {
            return 10;
        },
        setVisionHeight = function(value) {
            $('.red-bkg', '.vision').css('height', value + 'px');
        };

    $(function() {
        if (isHomepage() && isDesktopAndUp()) {
            setVisionHeight(getGridHeight() - getPadding());
        }
    });

})(jQuery);
