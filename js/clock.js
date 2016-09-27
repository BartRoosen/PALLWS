//=================== GLOBAL VARS ===========================================
var startLevel = 0;
var jsonLevels = "";
var aLevels = new Array();


window.onload = function () {
    var jsonLevels = document.getElementById('blindlevelinfo').innerHTML;
    var aLevels = JSON.parse(jsonLevels);

    console.log(aLevels[startLevel].duration);

    //startClock(aLevels[startLevel]);

    //============== TESTING ===============================================

    //document.write(aLevels[0].duration);
}


function startClock(level){
    var oLevel = level;
    var DUR = oLevel.duration;
    //console.log(oLevel);
    var SEC = 0;
    //var P = level.pause;
    var startLevelDisplay = parseInt(startLevel + 1);
    document.getElementById('level').innerHTML = "Level " + startLevelDisplay;
    document.getElementById('min').innerHTML = DUR;
    document.getElementById('sec').innerHTML = SEC;

    var tikking = setInterval(function () {
        if (SEC == 0) {
            if (DUR == 0) {
                startLevel++;
                console.log(startLevel);
                clearInterval(tikking);
            } else {
                DUR--;
                SEC = 59;
            }
        }
        else {
            SEC--;
        }
        document.getElementById('min').innerHTML = DUR;
        document.getElementById('sec').innerHTML = SEC;
    }, 10);
    startClock(aLevels[startLevel]);
}