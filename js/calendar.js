$(document).on('pageinit','[data-role=page]', function() {
	$('#countryCalendarDropdown').on('blur',function(){
		var countryValue = $('#countryCalendarDropdown').val();
		if (countryValue == 73){
			$('#stateCalendarDropdown').parent().parent().show();			
		}
		else {
			$('#stateCalendarDropdown').parent().parent().hide();
		}
	})
});