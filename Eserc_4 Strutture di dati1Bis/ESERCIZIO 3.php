<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Condizione</title>
</head>
<body>

    <h1>Verifica Condizione</h1>
    
    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="post">

        Quanti numeri vuoi inserire nell'Array?
        <input type="number" id="dimensione" name="dimensione" required><br><br>

        Inserisci il numero da verificare
        <input type="number" id="numero_da_verificare" name="numero_da_verificare" required><br><br>

        <input type="submit" name="submit" value="Invia">

    </form>
    
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $array = [];
        $dimensione = $_POST["dimensione"];

        for ($i=0; $i<$dimensione; $i++) {

            do {
                $numero = rand(1,20);
            } while ($numero % 2 != 0);

            $array[] = $numero;

        }
    
        echo "<br><b>Array:</b> <br>";
        for ($i=0; $i<$dimensione; $i++) {
            $contenuto = $array[$i];
            echo "$contenuto ";
        }

        $numero_da_verificare = $_POST["numero_da_verificare"];

        if (verificaCondizione($array, $numero_da_verificare)) {
            echo "<br><br><b>Condizione Verificata</b>";
        } else {
            echo "<br><br><b>Condizione NON Verificata</b>";
        }

    }

    function verificaCondizione($array, $numero_da_verificare) {

        $somma = 0;

        for ($i=0; $i<count($array); $i+=2) {
            $somma += $array[$i];
        }

        echo "<br><br>La somma è <b>$somma</b>";
        echo "<br>Il numero da verificare è <b>$numero_da_verificare</b>";

        if ($somma <= $numero_da_verificare) {
            return true;
        } else {
            return false;
        }

    }

?>