/**
 * Created by williamhoward on 1/29/15.
 */
(function ($) {

    $(".form-item-mergevars-EMAIL input").attr("placeholder", "EMAIL");

    $(".form-item-mergevars-NAME input").attr("placeholder", "NAME");

    //Contact hidden to unhidden
    $(".contact").click(function () {
        $(".contact-container").slideToggle("slow", function () {
            // Animation complete.
        });
    });


    $(".webform-component--2").hide();
    $(".webform-component--1--1-recommended-speaker").keypress(function () {
        $(".webform-component--2").fadeIn("slow");
    });

    $(".webform-component--3").hide();
    $("#edit-submitted-2-2-recommended-speaker").keypress(function () {
        $(".webform-component--3").fadeIn("slow");
    });

    $(".webform-component--4").hide();
    $("#edit-submitted-3-3-recommended-speaker").keypress(function () {
        $(".webform-component--4").fadeIn("slow");
    });

    $(".webform-component--5").hide();
    $("#edit-submitted-4-4-recommended-speaker").keypress(function () {
        $(".webform-component--5").fadeIn("slow");
    });


    $(".webform-component--1, .webform-component--2, .webform-component--second-author-name2, .webform-component--third-author-name").hide();
    $("#edit-submitted-first-author-name").keypress(function () {
        $(".webform-component--third-author-name, .webform-component--second-author-name2").fadeIn("slow");
    });

    $(".webform-component--second-author-name2").keypress(function () {
        $(".webform-component--1").fadeIn("slow");
    });

    $(".webform-component--third-author-name").keypress(function () {
        $(".webform-component--2").fadeIn("slow");
    });


    $(".webform-component--second-consider").hide();
    $("#edit-submitted-consider-name-title-organization-committee-email").keypress(function () {
        $(".webform-component--second-consider").fadeIn("slow");
    });

    $(".webform-component--third-consider").hide();
    $("#edit-submitted-second-consider-name-title-organization-committee-email").keypress(function () {
        $(".webform-component--third-consider").fadeIn("slow");
    });

    var equalizeHeights = function (selector) {
        var tallest = 0;
        $(selector).each(function () {
            var height = $(this).outerHeight();
            if (height > tallest) {
                tallest = height;

            }
        });

        $(selector).css("height", tallest);
    }
    $(function () {
        $(window).resize(function () {
            equalizeHeights(".speakers .white-bkg");
        });

        equalizeHeights(".speakers .white-bkg");

    })

    $(document).ready(function () {
        $(".word_count").on('keyup', function () {
            var words = this.value.match(/\S+/g).length;
            if (words > 525) {
                $("#word_left").addClass("red-text");
                // Split the string on first 200 words and rejoin on spaces
                var trimmed = $(this).val().split(/\s+/, 525).join(" ");
                // Add a space at the end to keep new typing making new words
                $(this).val(trimmed + " ");
            }
            else {
                $('#display_count').text(words);
                $('#word_left').text(500 - words);
            }
        });
    });

    //removes button on forms after submit
    $('#webform-client-form-18').submit(function (event) {
        $('#webform-client-form-18 button.webform-submit').addClass('disabled').prepend('<i class="fa fa-spinner fa-spin"></i> ');
        //$('#webform-client-form-18 button.webform-submit').replaceWith( '<button class="webform-submit button-primary btn btn-primary form-submit" name="op" value="Submit Abstract" type="submit" disabled="disabled"><i class="fa fa-spinner fa-spin"></i> Processing</button>' );
    });


    $( "div.demo-container" ).html();

    // purpose??
    //$( "p" ).click(function() {
    //    var htmlString = $( this ).html();
    //    $( this ).text( htmlString );
    //});




    ////capturing first video from view and placing in template
    //var title = $('.view-past-talks .views-row-1 .video-title').html(),
    //    moderator = $('.view-past-talks .views-row-1 .moderator').html(),
    //    panelists = $('.view-past-talks .views-row-1 .panelists').html(),
    //    //videoWrapper = $('.view-past-talks .views-row-1 .videoWrapper').html();
    //    $firstThumbPlayerDiv = $('.view-past-talks .views-row-1 .thumbplayer-container'),
    //    firstVideo = $firstThumbPlayerDiv.attr('data-id');
    //
    //
    //$('.top-video .video-title').html(title);
    //$('.top-video .moderator').html(moderator);
    //$('.top-video .panelists').html(panelists);
    //
    //
    //$('.thumbplayer-container', '.top-video').attr('data-id', firstVideo);
    //
    //
    //
    //
    //
    ////expanding extra info under video views
    //$(".view-past-talks .header").click(function () {
    //    $header = $(this);
    //    $content = $header.next();
    //    $header.parent().toggleClass('open');
    //    $content.slideToggle(500, function () {
    //    });
    //
    //});




})(jQuery);
