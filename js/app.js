// IF ON PRODUCTION VS STAGING
$production = true;

$(document).on('panelbeforeopen', function() {
    var p = $('.ui-page-active').attr('data-url');
    if(!p){
         p = '/mjffmobile/index.php';
    }

    console.log('the active page is ' +p);
    $("#menu2 li a").each(function(){
        $link = $(this);
        var hackLink = "/mjffmobile/" + ($link.attr('href'));
        if (hackLink == p){
            $link.parent().addClass('active');
        }
        else {
            $link.parent().removeClass('active');
        }
        console.log(hackLink);
    });
});

/*=======================================
=            Form Falidation            =
=======================================*/

$(document).on('pageinit','[data-role=page]', function() {
   $('[type="submit"]').button('disable');
   $('input').change(function(){
        fieldValue = $(this).val();
        if (fieldValue == '' || fieldValue == 'test'){
            $('[type="submit"]').button('disable');
        }
        else {
   			$('[type="submit"]').button('enable');
   		}
   });


/*=============================================
=            Make Youtube Videos Responsive    =
=============================================*/
       $(function() {

        // Find all YouTube videos
        var $allVideos = $("iframe[src^='http://www.youtube.com']"),

            // The element that is fluid width
            $fluidEl = $("#youtubeContainer");

        // Figure out and save aspect ratio for each video
        $allVideos.each(function() {

            $(this)
                .data('aspectRatio', this.height / this.width)
                
                // and remove the hard coded width/height
                .removeAttr('height')
                .removeAttr('width');

        });

        // When the window is resized
        // (You'll probably want to debounce this)
        $(window).resize(function() {

            var newWidth = $fluidEl.width();
            
            // Resize all videos according to their own aspect ratio
            $allVideos.each(function() {

                var $el = $(this);
                $el
                    .width(newWidth)
                    .height(newWidth * $el.data('aspectRatio'));

            });

        // Kick off one resize to fix all videos on page load
        }).resize();

    });

});