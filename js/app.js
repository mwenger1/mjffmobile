
/*======================================================
=            Add Class to Active Menu State            =
======================================================*/
$(document).on('panelbeforeopen', function() {
    var p = $('.ui-page-active').attr('data-url').split('/').pop();
    if(!p){
         p = 'index.php';
    }
    $("#menu2 li a").each(function(){
        $link = $(this);
        var hackLink = $link.attr('href');
        if (hackLink == p){
            $link.parent().addClass('active');
        }
        else {
            $link.parent().removeClass('active');
        }
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
});