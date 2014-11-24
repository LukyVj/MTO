function getLocation(){
	if (navigator.geolocation)
		navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
		else
		alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");
		
			function successCallback(position){
			// $('#res').append("value","http://maps.google.com.au/maps?ll=" + position.coords.latitude + "," + position.coords.longitude);
				var positionNow = ""+position.coords.latitude +"," + position.coords.longitude +"" 
				jQuery(document).ready(function($) {
				$.ajax({
				url : "http://api.wunderground.com/api/d8abfdd34cdb9445/forecast10day/q/"+ positionNow + ".json",
				dataType : "jsonp",
				success : function(parsed_json) {
				var location = parsed_json['location']['city'];
				var temp_c = parsed_json['current_observation']['temp_c'];
				$(".deg").append(temp_c);
				$(".mention").append(location);
				
				}
			});
		}); 
	}; 
}; 

 
function errorCallback(error){
  switch(error.code){
    case error.PERMISSION_DENIED:
      alert("L'utilisateur n'a pas autorisé l'accès à sa position");
      break;      
    case error.POSITION_UNAVAILABLE:
      alert("L'emplacement de l'utilisateur n'a pas pu être déterminé");
      break;
    case error.TIMEOUT:
      alert("Le service n'a pas répondu à temps");
      break;
    }
};

jQuery(document).ready(function($) {
	getLocation();
});