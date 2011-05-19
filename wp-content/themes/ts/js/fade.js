var $fade = jQuery.noConflict();
$fade(document).ready(function(){
	
	$fade(".grow").hide();
	$fade(".grow").slideDown("slow");
	
	$fade(".fade-in").hide();
	$fade(".fade-in-slow").fadeIn(2000);
	$fade(".fade-in-med").fadeIn(1500);
	$fade(".fade-in-fast").fadeIn(1000);
	
	
	$fade(".more").hide();
	$fade(".showmore").click(function(){
			$fade(".more").slideToggle("slow");
			$fade(".showmore .choices").toggle();
	});
	
});
