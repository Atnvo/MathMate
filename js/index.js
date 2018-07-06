if ("ontouchstart" in document.documentElement) {
    document.querySelector(".hint").innerphp = "<p>Tap on the left or right to navigate</p>";
}

impress().init();

// ____________________________________________________________ Onderdeel 4 Fibbici priemgetallen

// Fibonacci reeks
function Fibonacci() {
    var fib = new Array();
    fib[0] = 0;
    fib[1] = 1;
    //zet d
    answer = "";
    // Pakt de maximale aantal dat je wilt berekenen
    var until = document.getElementById("getalInputF").value;
    if (until < 1000) {
        answer += fib[0] + "<br>" + fib[1];

        //Fibonacci Berekening
        for (i = 2; i < until; i++) {
            fib[i] = fib[i - 2] + fib[i - 1];
            if (fib[i] <= until) { // gaat berekening door totdat het de variable "untill" heeft breikt wat de eind getal de gebruiker heeft ingevoerd.
                answer += "<br>" + fib[i];
            }
        }
    } else {
        answer = "Getal is te hoog."
    }

    document.getElementById("outputF").innerHTML = answer; //Geeft Uitslag gevens neer
}

function calcPrimes() {
    document.getElementById("outputP").innerHTML = " ";
    var aantal = document.getElementById("getalInputP").value,
        getallen = [2];
    if (aantal > 1) {
        for (i = 3; i <= aantal; i += 2) {
            getallen.push(i);
        }
        for (i = 1; i < getallen.length; i++) {
            for (j = getallen[i]; j < aantal; j++) {
                if (getallen[j] % getallen[i] == 0) {
                    getallen.splice(j, 1);
                }
            }
        }
        for (i = 0; i < getallen.length; i++) {
            document.getElementById("outputP").innerHTML += getallen[i] + ",";
        }
    }new SimpleBar(document.getElementById('outputP'))
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

    setTimeout(function () {
        getNumber(rotation);
    }, (time * 1000));
    setTimeout(function () {
        getNumber2(rotation2);
    }, (time * 1000));
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
