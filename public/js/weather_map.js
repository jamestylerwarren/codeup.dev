(function() {
"use strict";
		//------------Map Rendering---------------
	var marker;
	function setMap() {
		var map = new google.maps.Map(document.getElementById("map"), {
			zoom: 4,
			center: {
				lat: 29.426791,
				lng: -98.489602
			},
			styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#4f595d"},{"visibility":"on"}]}]
			});
		marker = new google.maps.Marker({
			position: map.center,
			map: map,
			draggable: true,
			icon: '/img/pin.png'
		});
		marker.addListener('dragend',function(event) {
		getWeather();
        });
	}; setMap();

	//---------Weather Forecast-----------	
	function getWeather() {
		$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
			APPID: "6591e56be16ed754b9738e7806c46382",
			lat: marker.getPosition().lat(),
			lon: marker.getPosition().lng(),
			units: "imperial",
			cnt: 3
		}).done(function(weatherData) {
			weatherData.list.forEach( function (forecast, i){
			var maxTemp = forecast.temp.max;
			var minTemp = forecast.temp.min;
			var icon ='<img src="http://openweathermap.org/img/w/'+forecast.weather[0].icon+'.png"';
			var description = forecast.weather[0].description;
			var humidity = forecast.humidity;
			var speed = forecast.speed;
			var pressure = forecast.pressure;
			$('#dayForecast' + i).html(maxTemp + '° / ' + minTemp + '°<br>' + icon + '<br><br>' + description + '<br><br>Humidity: ' + humidity + ' %<br>Wind Speed: ' + speed + ' mph<br>Pressure: ' + pressure);
			});
		});
	}; getWeather();


	
		
	
	


	




	
	





})();