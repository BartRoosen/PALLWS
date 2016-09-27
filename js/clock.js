//=================== GLOBAL VARS ===========================================
//var startLevel = 0;
//var jsonLevels = "";
//var aLevels = [];
var cont = "proceed";

window.onload = function () {
	
    var jsonLevels = document.getElementById('blindlevelinfo').innerHTML;
    var aLevels = JSON.parse(jsonLevels);
	var max = aLevels.length;
	var pause = document.getElementById('pauze');
	var lUp = document.getElementById('levelUp');
	pause.addEventListener('click', pauzeGame);
	lUp.addEventListener('click', levelUp);
	test(aLevels, 0, max);
	
    //============== TESTING ===============================================
	
}

function test(aLevels, level, max){
	var progressbar = document.getElementById('progressbar');
	var totalLength = (aLevels[level].duration) * 60;
	var currentLength = totalLength;
	var sec = 0;
	document.getElementById('level').innerHTML = "Level: " + (level +1);
	document.getElementById('small').innerHTML =  "Small blind: " + (aLevels[level].small);
	document.getElementById('big').innerHTML = "Big blind: " + (aLevels[level].big);
	document.getElementById('ante').innerHTML = "Ante: " + (aLevels[level].ante);
	
	if(level+1 < max){
		document.getElementById('nsmall').innerHTML = aLevels[level+1].small;
		document.getElementById('nbig').innerHTML = aLevels[level+1].big;
		document.getElementById('nante').innerHTML = aLevels[level+1].ante;
	}
	else{
		document.getElementById('nsmall').innerHTML = "-";
		document.getElementById('nbig').innerHTML = "-";
		document.getElementById('nante').innerHTML = "-";
	}
	
	document.getElementById('min').innerHTML = aLevels[level].duration;
	document.getElementById('sec').innerHTML = sec;
	var min = parseInt(aLevels[level].duration);
	
	var tiktak = setInterval(function(){
		if(cont == "up"){
			//1 level naar boven tenzij max is bereikt...
			min = 0;
			sec = 0;
			cont = "proceed";
		}
		if(sec == 0){
			min--;
			if(min < 0){
				min = 0;
				clearInterval(tiktak);
				level++;
				nextLevel(aLevels, level, max);
			}
			else{
				sec = 59;
			}
		}
		document.getElementById('min').innerHTML = min;
		document.getElementById('sec').innerHTML = sec;
		//calculate progress bar
		currentLength--;
		var progressbarlength = (currentLength*100)/totalLength;
		progressbar.style.width = progressbarlength + "%";
		if(progressbarlength < 20){
			progressbar.style.backgroundColor = "red";
		}
		else{
			progressbar.style.backgroundColor = "black";
		}
		sec--;
	}, 100);
}

function nextLevel(aLevels, level, max){
	if(level <= max){
		test(aLevels, level);
	}
}

function pauzeGame(){
	alert('The clock has been paused\nClick \'ok\' to continue');
}

function levelDown(){
	cont = "down";
}
function levelUp(){
	cont = "up";
}








