if ("ontouchstart" in document.documentElement) { 
    document.querySelector(".hint").innerphp = "<p>Tap on the left or right to navigate</p>";
}

impress().init(); 

// Fibonacci Sequence
function Fibonacci (n) {
    var a = 0; var b = 1; var f = 1;
    for (var i = 2; i <=n; i++) {
        f = a + b;
        a = b;
        b = f;
    }
    return f;
}