if ("ontouchstart" in document.documentElement) { 
    document.querySelector(".hint").innerphp = "<p>Tap on the left or right to navigate</p>";
}

impress().init(); 

// ____________________ Onderdeel 4 onder 

var fib = [0, 1];
var N = 23; //Getal eindz

function Fibonacci() {
    for (var i = fib.length; i < N; i++) {
        fib[i] = fib[i - 2] + fib[i - 1];
    }
}
console.log(fib);

// ____________________ Onderdeel 6 Rad

var rotation, time;

function getRandom(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}


function SpinIt() {
    rotation = getRandom(800, 4000);
    time = getRandom(5, 10);

    document.getElementById("rad").style.transform = "rotate(" + rotation + "deg)";
    document.getElementById("rad").style.transition = "transform " + time + "s";

    setTimeout(function () { getNumber(rotation); }, (time * 1000));
}

function getNumber(x) {
    x = x % 360;

    if ((x >= 30) && (x <= 89)) {
        document.getElementById("ipNumberRad1").value = "6";
    } else if ((x >= 90) && (x <= 149)) {
        document.getElementById("ipNumberRad1").value = "5";
    } else if ((x >= 150) && (x <= 209)) {
        document.getElementById("ipNumberRad1").value = "4";
    } else if ((x >= 210) && (x <= 269)) {
        document.getElementById("ipNumberRad1").value = "3";
    } else if ((x >= 270) && (x <= 329)) {
        document.getElementById("ipNumberRad1").value = "2";
    } else {
        document.getElementById("ipNumberRad1").value = "1";
    }
}

