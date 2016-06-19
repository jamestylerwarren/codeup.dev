(function() {
"use strict";




// $.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
//     APPID: "6591e56be16ed754b9738e7806c46382",
//     q:     "San Antonio, TX",
//     units: "imperial"
// }).done(function(data) {
//     console.log(data);
// }).fail(function(){
// 	alert('There was an error');
// }).always(function(){
// 	alert('All done');
// });


// Set our map options
        var mapOptions = {
            // Set the zoom level
            zoom: 10,

            // This sets the center of the map at our location
            center: {
                lat:  29.426791,
                lng: -98.489602
            }
        };

        // Render the map
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);





})();