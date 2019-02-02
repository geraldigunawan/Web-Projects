$(document).ready(function(){
  $( "#showourmission" ).click(function() {
	  $( "#missioncontent" ).toggle( "fast");
	  $( "#whatarewecontent" ).hide();
	    $( "#locationcontent" ).hide();
	});

  $( "#showwhatarewe" ).click(function() {
	  $( "#whatarewecontent" ).toggle( "fast");
	    $( "#locationcontent" ).hide();
	  $( "#missioncontent" ).hide();
	});
 $( "#showlocation" ).click(function() {
	  $( "#locationcontent" ).toggle( "fast");
	   $( "#whatarewecontent" ).hide();
	  $( "#missioncontent" ).hide();
	});
});