
(function($){
    $(document).ready(function() {
        $('.showSpeaker').click(function() {

           var results = getSpeakerData($(this));

            setSpeakerModal(results);
            
            $('#speakerModal').modal('show');
        });

        var setSpeakerModal = function(speaker) {

            var $speakerSelect = $('.speakerModal');

            $speakerSelect.find('.modal-image').attr('src', speaker.image);
            $speakerSelect.find('.modal-title').html(speaker.title);
            $speakerSelect.find('.modal-workTitle').html(speaker.workTitle);
            $speakerSelect.find('.modal-company').html(speaker.company);
            $speakerSelect.find('.modal-twitterHandle').html(speaker.twitter);
            $speakerSelect.find('.modal-keynote').html(speaker.keynote);
            $speakerSelect.find('.modal-bio').html(speaker.bio);
        };

        var getSpeakerData = function($speaker) {

            var $data = $speaker;

            if ($data.length) {

                return {
                    image       : $data.find('.speakerImg').attr('src'),
                    title       : $data.find('.speakerTitle').html(),
                    workTitle   : $data.find('.speakerWork').html(),
                    company     : $data.find('.speakerCompany').html(),
                    twitter     : $data.find('.speakerTwitter').html() ? $data.find('.speakerTwitter').html() : '',
                    keynote     : $data.find('.speakerKeynote').html() ? $data.find('.speakerKeynote').html() : '',
                    bio         : $data.find('.speakerBio').html()
                }
            }
        }
    });
})(jQuery);