window.addEventListener("orientationchange", function() {
  if(window.orientation != 0){
    	$('#menu').toggleClass('hello');
}
  else{
  $('#menu').toggleClass('hello');

  }
}, false);

app = {
  url: false,
  initialize: function(){
    /* bind events */
    $(document).on('click', '.day', this.zoomDay);

    /* get the location */
    if(navigator.geolocation){
      this.getLocation();
    }else{
      window.alert('Votre navigateur ne prend pas en compte la géolocalisation HTML5')
    }
  },
  
  getLocation: function(){
    var that = this;
    navigator.geolocation.getCurrentPosition(
      function(position){
	      that.url = 'http://www.corsproxy.com/api.wunderground.com/api/d8abfdd34cdb9445/forecast10day/q/' + position.coords.latitude + ',' + position.coords.longitude + '.json';        
	      that.getMeteo();
      },
      function (error){
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
      }
    );
  },
  getMeteo: function(){
    var params;
    params = {
      type: 'GET',
      url: this.url,
      dataType: 'json',
      timeout: 3000,
      success: this.receivedMeteo
    };
    $.ajax(params);
  },
  receivedMeteo: function(response){
    var forecast;
    forecast = response.forecast.simpleforecast.forecastday;
    forecast.forEach(app.displayMeteo);
    
  },
  displayMeteo: function(forecast){
    var date, high, low, icon, locat;
    date = forecast.date.weekday + ' ' + forecast.date.day + ' ' + forecast.date.monthname;
    high = forecast.high.celsius;
    low  = forecast.low.celsius;
    icon = 'http://dev.web-gate.fr/MTO/assets/img/' + forecast.icon + '.svg';
    state = forecast.icon;
     html = "<div class='day' class='open'><h2>" + date + "</h2><i><img src='" + icon + "' class='ic'/></i> <span class='deg'>" + low + "/" + high + "<i class='celsius'></i></span><p class='mention'>" + state + " in <span class='where'></span></p></div>";
    $('#wrapper').append(html);
  },
  zoomDay: function(){
    var el,all,not,icon,celsius,span,hour;

    el = $(this);
    all = $('.day > *');
    not = $('.day').not(this);
    icon = $('.day i.ic');
    celsius = $('.day .celsius');
    span = $('.day h2 span');
    hour = $('#hour');

    el.toggleClass('open');
    not.toggleClass('display');
    icon.toggleClass('margin','zoom');
    celsius.toggleClass('zoomb');
    span.toggleClass('dispay');
    hour.toggleClass('opacity');
  }
 };

app.initialize();

 
