
app = {
  url: 'http://www.corsproxy.com/api.wunderground.com/api/d8abfdd34cdb9445/forecast10day/q/'+ positionNow +'.json',
  getJson: function(){
    var params;
    params = {
      type: 'GET',
      url: this.url,
      dataType: 'json',
      timeout: 3000,
      success: this.successCallback,
      error: this.errorCallback
    };
    $.ajax(params);
  },
  successCallback: function(response){
    var forecast;
    forecast = response.forecast.simpleforecast.forecastday;
    forecast.forEach(app.displayMeteo);
  },
  displayMeteo: function(forecast){
    var date, high, low, icon;
    date = forecast.date.weekday + ' ' + forecast.date.day + ' ' + forecast.date.monthname;
    high = forecast.high.celsius;
    low = forecast.low.celsius;
    icon = forecast.icon_url;
    html = "<div class='day'>" + date + "<br><img src='" + icon + "'><br>Low: " + low + ", High: " + high + "</div>";
    $('.meteo').append(html);
  }
};

app.getJson();