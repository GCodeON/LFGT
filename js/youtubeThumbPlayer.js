/*
 usage: add "thumbplayer-container" css class to the container of the video
 inside the thumbplayer-container, add "thumbplayer" class in the inside div
 */

var RSCG = RSCG || {};

RSCG.youtubeThumb = (function ($) {

    var ytplayerImage,
        ytplayerName,
        thumbPlayerContainer = '.thumbplayer-container';

    // helper function to generate unique iframe ID
    function ensureUniqueID(potentialID) {
        var index = 0,
            tempID = potentialID;

        while ($('#'+tempID).length && index < 100) {
            tempID = potentialID + '-' + index;
            index++;
        }

        return tempID;
    }

    // function to add in Youtube API script
    function ytScript () {
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    }

    // function to grab the youtube video ID
    function getYoutubeVidID(url) {
        var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
        var match = url.match(regExp);
        return (match && match[7].length == 11) ? match[7] : false;
    };


    // 1. find all thumbplayer-container
    // 2. set the proper links
    // 3. get youtube thumb
    function getYoutubeDataID() {
        var $v = $(thumbPlayerContainer);

        if ($v.length) {
            ytScript();

            //_.each($v, function(elm){
            $v.each(function() {
                var $elm        = $(this),
                    $dataID     = $elm.data().id,
                    imgAltTxt   = $elm.data().alttext;

                $dataID = getYoutubeVidID($dataID);

                var aTag = $('<a>', {
                    'href'   :'#',
                    'class'  : 'embed-responsive-item ytvideo-' + $dataID,
                    'data-id': $dataID,
                    'click'  : youtubeThumbClick
                });

                $(aTag).append(youtubeThumb($dataID, imgAltTxt));
                //getThumb(aTag, $dataID);

                $(".thumbplayer", $elm).append(aTag);
            });
        }

    }

    function initializeSingle($thumbPlayerContainer) {
        var $v = $thumbPlayerContainer;

        if ($v.length == 1) {
            ytScript();

            //_.each($v, function(elm){
            $v.each(function() {
                var $elm        = $(this),
                    $dataID     = $elm.data().id,
                    imgAltTxt   = $elm.data().alttext;

                $dataID = getYoutubeVidID($dataID);

                var aTag = $('<a>', {
                    'href'   :'#',
                    'class'  : 'embed-responsive-item ytvideo-' + $dataID,
                    'data-id': $dataID,
                    'click'  : youtubeThumbClick
                });

                $(aTag).append(youtubeThumb($dataID, imgAltTxt));
                //getThumb(aTag, $dataID);

                $(".thumbplayer", $elm).append(aTag);
            });
        }
        else {
            getYoutubeDataID();
        }
    }

    function youtubeThumbClick(e) {
        e.preventDefault();
        embedAndPlayYoutube($(this));
    }

    function getVideoTitle(id) {
        var apiKey = "AIzaSyBvWGMxJ-BDKtAYjRdG3fGR4IwA7bqlatQ";

        $.get("https://www.googleapis.com/youtube/v3/videos?part=snippet&id=" + id + "&key=" + apiKey)
            .success( function (data) {
                return data.items[0].snippet.title;
            })
            .error ( function () {
                return 'Click to Play Video';
            });
    }

    function setupThumb(aTag, $img) {
        var $i = $("<i>", {
            "class"       : "fa fa-play-circle-o",
            "aria-hidden" : "true"
        });

        $(aTag).append([$img, $i])
    }

    function getThumb(aTag, id) {
        var $img,
            vidTitle = 'Click to Play Video';

        // access data API for video info
        $.get("https://www.googleapis.com/youtube/v3/videos?part=snippet&id=" + id + "&key=" + apiKey)

            .success( function (data) {
                // if the video is available
                if (typeof(data.items[0]) !== 'undefined') {
                    vidTitle = data.items[0].snippet.title;
                }

                $img = $("<img>", {
                    'class' : 'thumbplayer-thumb',
                    'src'   : "//i.ytimg.com/vi/" + id + "/maxresdefault.jpg",
                    'alt'   : vidTitle
                });
                setupThumb(aTag, $img);
            })
            .error ( function () {
                $img = $("<img>", {
                    'class' : 'thumbplayer-thumb',
                    'src'   : "//i.ytimg.com/vi/" + id + "/maxresdefault.jpg",
                    'alt'   : vidTitle
                });
                setupThumb(aTag, $img);
            })
    }

    // get youtube thumbnail
    function youtubeThumb(id, imageAlt) {

        imageAlt = imageAlt || 'Click to Play Video';

        var $img = $("<img>", {
            'class' : 'thumbplayer-thumb',
            'src'   : "//i.ytimg.com/vi/" + id + "/maxresdefault.jpg",
            'alt'   : imageAlt
        });

        var $i = $("<i>", {
            "class"       : "fa fa-play-circle-o",
            "aria-hidden" : "true"
        });

        return [$img, $i];

    }


    function embedAndPlayYoutube(container) {
        var id        = container.data().id;
        ytplayerName  = ensureUniqueID('thumbplayer-iframe-' + id);
        ytplayerImage = $("img", container);

        var $iframe = $('<iframe>', {
            'src' : '//www.youtube.com/embed/' + id + '?rel=0&autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=1&showinfo=0',
            'frameborder' : '0',
            'id' : ytplayerName,
        });

        $('i', container).hide();

        ytplayerImage.replaceWith($iframe);

        // ytTracker and its function defined in GTM
        // setup tracking for this newly embedded video
        if (typeof window.ytTracker !== 'undefined' && typeof window.ytTracker.digestPotentialVideos === 'function') {
            window.ytTracker.digestPotentialVideos($('#' + ytplayerName));
        }

        // check to see is a player with the unique ID is already defined
        var player = YT.get(ytplayerName);

        //if (_.isUndefined(player)) {
        if (player === undefined) {
            player = new YT.Player(ytplayerName, {
                events: {
                    'onReady': whenPlayerReady,
                    'onStateChange': whenPlayerStateChange
                }
            });
        }
        else {
            player.addEventListener("onReady", whenPlayerReady);
        }
    }

    function whenPlayerReady (e) {}

    function whenPlayerStateChange () {}

    return {
        initialize: getYoutubeDataID,
        initializeSingle: initializeSingle
    };

})(jQuery);


//DOM is ready
jQuery(function () {

    jQuery(window).load(function(){
        RSCG.youtubeThumb.initialize();
    });

});
