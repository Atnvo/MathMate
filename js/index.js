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
            for(i=2; i < until; i++){
                fib[i] = fib[i-2] + fib[i-1];
                if (fib[i] <= until){ // gaat berekening door totdat het de variable "untill" heeft breikt wat de eind getal de gebruiker heeft ingevoerd.
                    answer += "<br>" + fib[i];
                }
            }
        }else{
            answer = "Getal is te hoog."
        } 
    
    document.getElementById("outputF").innerHTML = answer; //Geeft Uitslag gevens neer
}

function calcPrimes() {
    //D.m.v een for-loop doorlopen we alle getallen van 2 t/m 100. Wij gaan controlen welke getalen
    //priemgetallen zijn.
    for (var i = 2; i <= 100; i++) {

        //Variabele 'IsPrime' is een type boolean en de waarde hiervan is true. 
        //Wij gaan ervan uit dat alle getallen tussen de 2 en 100 priemgetallen zijn.
        var IsPrime = true;

        //Wij maken een tweede for-loop (een loop in een loop), hiermee gaan wij controlen of de
        //waarde van variabele i deelbaar is door zijn voorgaan de getallen, als:
        //i 5 is, dan wordt gecontroleerd of i % 2, i % 3 en i % 4 een 0 oplevert.
        for (var x = 2; x < i; x++) {

            //Als dat het geval is, dan is i deelbaar door 2, 3 of 4.
            //En is daarom GEEN priemgetal.
            if (i % x == 0) {
                //Als de waarde van variabele i GEEN priemgetal is, dan wordt variabele 'IsPrime' op false gezet.
                IsPrime = false;
            }
        }

        //Als de waarde van variabele i een priemgetal is, dan wordt de waarde variabele 'i' aan div 'dPrimes' toegevoegd
        //en anders niet.
        if (IsPrime == true) {
            document.getElementById('outputP').innerHTML += i + "<br />";
        }
    }
    new SimpleBar(document.getElementById('outputF'));
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


