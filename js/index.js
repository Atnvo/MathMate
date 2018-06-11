if ("ontouchstart" in document.documentElement) { 
    document.querySelector(".hint").innerphp = "<p>Tap on the left or right to navigate</p>";
}

impress().init(); 

// ____________________________________________________________ Onderdeel 4 Fibbici priemgetallen


function Fibonacci() {
    var fib = new Array();
    fib[0] = 0;
    fib[1] = 1;
        // Set answer variable
        answer = "";
        // Set maximum for maximum calculation
        var until = document.getElementById('getalInput').value;
        if (until < 1000) {
            answer += fib[0] + ", " + fib[1];
    
            // Calculate fill array until 'until'
            for(i=2; i < until; i++){
                fib[i] = fib[i-2] + fib[i-1];
                if (fib[i] <= until){
                    answer += ", " + fib[i];
                }
            }
        } 
        // If ultil > 1000
        else {
            answer = "Je hebt het maximum overschreden";
        }
        // Fill antwoorden div in fibbonacci.html

    document.getElementById("output").innerHTML = fib.join('<br>') + "<br>";
    new SimpleBar(document.getElementById('output'))
}
// ____________________________________________________________ Onderdeel 6 Rad

var rotation, time;

function getRandom(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}


function SpinIt() {
    rotation = getRandom(800, 4000);
    rotation2 = getRandom(800, 4000);
    time = getRandom(5, 10);

    document.getElementById("rad").style.transform = "rotate(" + rotation + "deg)";
    document.getElementById("rad").style.transition = "transform " + time + "s";

    document.getElementById("rad2").style.transform = "rotate(" + rotation2 + "deg)";
    document.getElementById("rad2").style.transition = "transform " + time + "s";

    setTimeout(function () { getNumber(rotation); }, (time * 1000));
    setTimeout(function () { getNumber2(rotation2); }, (time * 1000));
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

function getNumber2(x) {
    x = x % 360;

    if ((x >= 30) && (x <= 89)) {
        document.getElementById("ipNumberRad2").value = "6";
    } else if ((x >= 90) && (x <= 149)) {
        document.getElementById("ipNumberRad2").value = "5";
    } else if ((x >= 150) && (x <= 209)) {
        document.getElementById("ipNumberRad2").value = "4";
    } else if ((x >= 210) && (x <= 269)) {
        document.getElementById("ipNumberRad2").value = "3";
    } else if ((x >= 270) && (x <= 329)) {
        document.getElementById("ipNumberRad2").value = "2";
    } else {
        document.getElementById("ipNumberRad2").value = "1";
    }
}


