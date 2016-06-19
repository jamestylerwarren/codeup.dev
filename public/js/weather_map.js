
$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
    APPID: "6591e56be16ed754b9738e7806c46382",
    q:     "San Antonio, TX",
    units: "imperial"
}).done(function(data) {
    console.log(data);
}).fail(function(){
	alert('There was an error');
}).always(function(){
	alert('All done');
});
