(function(){
    "use strict";

    var planetsString = "Mercury,Venus,Earth,Mars,Jupiter,Saturn,Uranus,Neptune";
    var planetsArray;

    // TODO: Convert planetsString to an array, save it to planetsArray.
    planetsArray = planetsString.split(",");

    console.log(planetsArray);

    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?

    var planetString = "Mercury<br>Venus<br>Earth<br>Mars<br>Jupiter<br>Saturn<br>Uranus<br>Neptune";

    var planetArray = planetString.split(",");

    console.log(planetArray);

    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.


    var planetStringTwo = "<ul><li>Mercury</li><li>Venus</li><li>Earth</li><li>Mars</li><li>Jupiter</li><li>Saturn</li><li>Uranus</li><li>Neptune</li></ul>";

    var planetArrayTwo = planetStringTwo.split(",");

    console.log(planetArrayTwo);

})();