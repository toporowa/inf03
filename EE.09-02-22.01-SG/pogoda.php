<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <section id="banner-left">
        <img src="logo.png" alt="meteo">
    </section>
    <section id="banner-middle">
        <h1>Prognoza dla Wrocławia</h1>
    </section>
    <section id="banner-right">
        <p>maj, 2019 r.</p>
    </section>
    <section id="main">
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <!-- Efekt działnia skryptu 1 -->
            <?php
                // połaczenie z bazą danych
                $id_polaczenia = mysqli_connect("localhost", "root", "", "prognoza");
                // wysłoanie zapytania do bazy
                $zapytanie = 'SELECT * FROM pogoda WHERE miasta_id = 1 ORDER BY data_prognozy ASC';
                $wynik_zapytania = mysqli_query($id_polaczenia, $zapytanie);
                // wypisanie wierszy tabeli
                while($rekord = mysqli_fetch_array($wynik_zapytania)) {
                    echo '<tr>';
                        echo '<td>';
                            echo $rekord['data_prognozy'];
                        echo '</td>';
                   
                        echo '<td>';
                            echo $rekord['temperatura_noc'];
                        echo '</td>';
                   
                        echo '<td>';
                            echo $rekord['temperatura_dzien'];
                        echo '</td>';  
               
                        echo '<td>';
                            echo $rekord['opady'];
                        echo '</td>';

                        echo '<td>';
                            echo $rekord['cisnienie'];
                        echo '</td>';
                    echo  '<\tr>';  
                }
                
            ?>
        </table>
    </section>
    <section id="panel-left">
        <img src="obraz.jpg" alt="Polska, Wrocław">
    </section>
    <section id="panel-right">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <section id="footer">
        <p>Stronę wykonał: 345345345</p>
    </section>
</body>
</html>