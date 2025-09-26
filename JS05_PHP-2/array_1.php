<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
        $Listdosen= ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        // echo $Listdosen[2] . "<br>";
        // echo $Listdosen[0] . "<br>";
        // echo $Listdosen[1] . "<br>";

        for ($i=0; $i < 3; $i++) { 
            echo $Listdosen[$i] . "<br>";
        }
    ?>
</body>
</html>