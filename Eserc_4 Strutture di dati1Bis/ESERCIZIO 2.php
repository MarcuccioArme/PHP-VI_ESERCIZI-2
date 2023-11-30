<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copia Array</title>
</head>
<body>

    <h1>Copia Array</h1>
    
    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="post">

        Quanti numeri vuoi inserire nell'Array?
        <input type="number" id="dimensione" name="dimensione" required><br><br>

        <input type="submit" name="submit" value="Invia">

    </form>

</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $arrayA = [];
        $arrayB = [];
        $dimensione = $_POST["dimensione"];

        for ($i=0; $i<$dimensione; $i++) {
            $numero = rand(1,20);
            $arrayA[] = $numero;
        }

        for ($i=0; $i<$dimensione; $i++) {
            $contenuto = $arrayA[$i];
            $arrayB[] = $contenuto;
        }

        echo "<br><b>Array A:</b> <br>";
        for ($i=0; $i<$dimensione; $i++) {
            $contenuto = $arrayA[$i];
            echo "$contenuto ";
        }

        echo "<br><br><b>Array B:</b> <br>";
        for ($i=0; $i<$dimensione; $i++) {
            $contenuto = $arrayB[$i];
            echo "$contenuto ";
        }

    }

?>