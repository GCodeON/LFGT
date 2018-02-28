function stickyFooter(){
	    
    // height of the document (total height)
    var d = $(document).height();
    
    // height of the window (visible page)
    var w = $(window).height();
    
    // scroll level
    var s = $(this).scrollTop();
    
    // bottom bound - or the width of your 'big footer'
    var bottomBound = 350;

    // are we beneath the bottom bound?
    if(d - (w + s) < bottomBound) {
        // if yes, start scrolling our own way, which is the
        // bottom bound minus where we are in the page
        $('#fixed').css({
            bottom: bottomBound - (d - (w + s))
        });
    } else {
        // if we're beneath the bottom bound, then anchor ourselves
        // to the bottom of the page in traditional footer style
        $('#fixed').css({
            bottom: 0
        });            
    }
    
}
$(window).scroll(function(event) {
	stickyFooter();
});

$("a[data-toggle='collapse']").click(function() {
	console.log('toggle');
	stickyFooter();
});

$("a[data-toggle='collapse']").on('show.bs.collapse', function () {
	console.log('toggle');
	stickyFooter();
})
$(".collapse").on('shown.bs.collapse', function(){
    alert('The collapsible content is now fully shown.');
	//stickyFooter();

});
