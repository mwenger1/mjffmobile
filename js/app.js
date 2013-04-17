// IF ON PRODUCTION VS STAGING
$production = true;


// // @TODO look into removing this
// $(document).bind("mobileinit", function () {
//     $.mobile.pushStateEnabled = true;
// });

// // @TODO look into adding dataprefetch

// $(document).on('pageinit', function() {
//     var menuStatus;
 
//     // Show menu
//     // @TODO make it same slide technique as gmail

// 	    $("a.showMenu").on("click",function (e) {
//     	    if (menuStatus != true) {
//             $("#menu").css("visibility:visible;");
//             $(".ui-page-active").animate({
//                 marginLeft: "165px",
//             }, 300, function () {
//                 menuStatus = true
//             });
//             event.preventDefault();
//             return false;
//         } else {
//             $(".ui-page-active").animate({
//                 marginLeft: "0px",
//             }, 300, function () {
//                 menuStatus = false
//             });
            
//             event.preventDefault();
//             return false;
//         }
//     });


//  /*TOO JUMPY
//     $('#menu,.pages').on("swipeleft", function () {
//         if (menuStatus) {
//             $(".ui-page-active").animate({
//                 marginLeft: "0px",
//             }, 300, function () {
//                 menuStatus = false
//             });
//         }
//     });
 
//     $('.pages').on("swiperight", function () {
//         if (!menuStatus) {
//             $(".ui-page-active").animate({
//                 marginLeft: "165px",
//             }, 300, function () {
//                 menuStatus = true
//             });
//         }
//     });
//     */
 
//     $('div[data-role="page"]').on('pagebeforeshow', function (event, ui) {
//         menuStatus = false;
//         $("#menu").css("visibility:hidden;");
//         $(".pages").css("margin-left", "0");
//     });
 
//     // Menu behaviour

    
//     // @TODO clean this up
//     $("a.showMenu").on("click",function (e) {
// 	        var p = $('.ui-page-active').attr('data-url');
// 		    if(!p){
// 			    p = 'placeholder.php';
// 		    }
		
// 		    var link;
// 			// $('.ui-page-active .header').css('background-color','red');
// 		  //  p = $('.headlineImageContainer').css('line-height');
// 		  //  p = $('.headlineImageContainer').attr('data-role');
// 		    	if(p === '/mjffmobile/' || p === 'placeholder.php'){
// 			    	link = '/index.php';
// 		    	}
// 		    	else {
// 			    	link = p;
// 		    	}
// 		     //	console.log(link);
// 		     var i = 0;
	    
	    
	    
// 	    $("#menu li a").each( function(){
	
// 	    	$anchor = $(this);
// 	    	var p = $(this).parent();
// 	//    	console.log($anchor);
// 	    	var $hackanchor;
// 	    	$hackanchor = "/mjffmobile/" + ($anchor.attr('href'));
// 	    	console.log(i);
// 	    	i++;
// 	    	console.log($hackanchor);
// 	    	console.log(link);
// 	    	if ($hackanchor == link){
// 		    	$($anchor).parent().addClass('active');
// 		    	console.log('they were equal');
// 	    	}
// 	    	else {
// 		    	$($anchor).parent().removeClass('active');	    	
// 		    	console.log('not equal');
	
// 	    	}
// 	    });
// 	    // RESIZE HEIGHT OF SIDE NAVIGATION
// 	    $(".ui-page-active").
// 	    $windowHeight = $(".ui-page-active").css('height');
// 		$('#menu').css('height',$windowHeight);	 
// 	});
	

//     /*
//     $("#menu li a").click(function () {
//         var p = $(this).parent();
//         if ($(p).hasClass('active')) {
//             $("#menu li").removeClass('active');
//         } else {
//             $("#menu li").removeClass('active');
//             $(p).addClass('active');
//         }
//     });
//     */
// });

 //  // RESIZE HEIGHT OF SIDE NAVIGATION
 //    $(".ui-page-active").
 //    $windowHeight = $(".ui-page-active").css('height');
	// $('#menu').css('height',$windowHeight);	    
    


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
