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


// DISABLE INPUTS @TODO hook into all of the forms
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
});