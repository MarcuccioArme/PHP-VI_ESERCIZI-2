<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricerca Occorrenze</title>
</head>
<body>

    <h1>Ricerca Occorrenze</h1>
    
    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="post">

        Quanti numeri vuoi inserire nell'Array?
        <input type="number" id="dimensione" name="dimensione" min="1" required><br><br>

        Che numero vuoi cercare?
        <input type="number" id="numero_da_cercare" name="numero_da_cercare" min="1" required><br><br>

        <input type="submit" name="submit" value="Invia">

    </form>

</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $array = [];
        $dimensione = $_POST["dimensione"];

        for ($i = 0; $i < $dimensione; $i++) {
            $numero = rand(1,20);
            $array[] = $numero;
        }

        echo "<br><b>Array:</b> <br>";
        for ($i = 0; $i < $dimensione; $i++) {
            $contenuto = $array[$i];
            echo "$contenuto ";
        }

        $numero_da_cercare = $_POST["numero_da_cercare"];

        $occorrenze = Occorrenze($array, $numero_da_cercare);
        echo "<br><br>Il numero <b>$numero_da_cercare</b> è presente <b>$occorrenze volte</b> nell'Array.";

    }

    function Occorrenze($array, $numero_da_cercare) {

        $occorrenze = 0;

        foreach ($array as $numero) {

            if ($numero == $numero_da_cercare) {
                $occorrenze++;
            }

        }

        return $occorrenze;
    }

?>