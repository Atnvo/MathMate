<?php
    require('dbconnect.php');

    //Verwijderd de gevaarlijke gegevens van de ingevulde waardes
    function test_input($data) {
        $data = trim($data);             // Verwijderd de lege plekken in de code
        $data = stripslashes($data);     // Verwijderd de "/" in de gegevens
        $data = htmlspecialchars($data); // Verwijderd alle html characters in de gegevens
        return $data;
    }

    // Stuurt de waarde van input boxes naar functie "test_input"
    $uname = test_input($_GET['username']);
    $upass = test_input($_GET['password']);

    //Kijkt welke characters onveilig zijn met de database en verwijderd deze
    $uname = mysqli_real_escape_string($conn, $uname); 
    $upass = mysqli_real_escape_string($conn, $upass); 

    $upass = md5($upass);

    //query code die naar de database stuurt om nieuwe gegevens te sturen
    $sql = "INSERT INTO gebruikers VALUES (NULL, '".$uname."', '".$upass."')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "Data opgeslagen in de database";
    }
?>

<a href="logindb.php">Log in</a>