var rotation, time;

function getRandom(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}


function SpinIt() {
    rotation = getRandom(800, 5000);
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

