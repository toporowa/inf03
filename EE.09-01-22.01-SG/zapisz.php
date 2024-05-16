<?php
    // Połączenie z bazą
    $id_polaczenia = mysqli_connect("localhost", "root", "", "wedkowanie");

    // Pobranie danych z formularza
    $imie = $_POST['first_name'];
    $nazwisko = $_POST['last_name'];
    $adres = $_POST['address'];

    $zapytanie = 'INSERT INTO karty_wedkarskie (imie, nazwisko, adres, data_zezwolenia, punkty) VALUES ("'.$imie. '", "'.$nazwisko.'","'.$adres.'",NULL,NULL)';
    //Wysyłaqnie zapytanie i wykonanie
    mysqli_query($id_polaczenia, $zapytanie);
    // rozłączenie z bazą
    mysqli_close($id_polaczenia);
?>