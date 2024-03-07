<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>
    <section id="banner">
        <h1>Hurtownia spożywcza</h1>
    </section>
    <section id="main">
        <h2>Opinie naszych klientów</h2>
        <!-- Efekt działania skryptu 1 -->
        <?php
            //1. Połączeie z bazą danych
            $id_polaczenia = mysqli_connect("localhost", "root", "", "hurtownia");
            $zapytanie3 = 'SELECT zdjecie, imie, opinia FROM klienci JOIN opinie ON klienci.id = opinie.klienci_id';
            // wysłanie zapytania 3
            $wynik_zapytania3 = mysqli_query($id_polaczenia, $zapytanie3);
            // var_dump($wynik_zapytania3);
            while($wiersz = mysqli_fetch_array($wynik_zapytania3) ) {
                echo '<div class = "opinion">';
                    echo '<img src="'.$wiersz['zdjecie'].'" alt="klient"> ';
                    echo '<cite>';
                    echo $wiersz['opinia'];
                    echo '</cite>';
                    echo '<h4>'.$wiersz['imie'].'</h4>';        
                echo '</div>';
            }
        ?>
    </section>
    <section class="footer">
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl/">Sklep 1</a>
    </section>
    <section class="footer">
        <h3>Nasi top klienci</h3>
        <ol>
            <!-- Efekt działania skryptu 2 -->
            <?php
                // Wysłanie zapytania do bazy na localhost
                $zapytanie1 = 'SELECT imie, nazwisko, punkty FROM klienci ORDER BY punkty DESC';
                $wynik_zapytania1 = mysqli_query($id_polaczenia, $zapytanie1);
                // var_dump($wynik_zapytania1);
                while($wiersz = mysqli_fetch_array($wynik_zapytania1) ) {
                    echo '<li>';
                    echo $wiersz['imie'];
                    echo ' ';
                    echo $wiersz['nazwisko'];
                    echo ', ';
                    echo $wiersz['punkty'];
                    echo ' pkt.'; 
                    echo '</li>';
                }
                // rozłączenie z bazą
                mysqli_close($id_polaczenia);
            ?>
        </ol>
    </section>
    <section class="footer">
        <h3>Skontaktuj się</h3>
        <p>telefon: 111222333</p>
    </section>
    <section class="footer">
        <h3>Autor: 54</h3>
    </section>
</body>

</html>