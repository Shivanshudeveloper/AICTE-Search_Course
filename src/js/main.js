$(document).ready(function(){
	$("input[type='radio']").click(function(){
		var educationType = $("input[name='educationType']:checked").val();
		if(educationType == "Higher Education"){
            $("#search_form_higherEducation").show();
            $("#search_form_schoolEducation").hide();
		} else {
            $("#search_form_schoolEducation").show();
            $("#search_form_higherEducation").hide();
        }
	});
});