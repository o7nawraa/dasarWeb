<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan' 
        ];
        echo "Nama : {$Dosen ['nama']} <br>";
        echo "Domisili : {$Dosen ['domisili']} <br>";
        echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";
    ?>

    <table>
        <tr>
            <td style="border:1px solid black">Nama</td>
            <td style="border:1px solid black"><?php echo $Dosen['nama']; ?></td>
        </tr>
        <tr>
            <td style="border:1px solid black">Domisili</td>
            <td style="border:1px solid black"><?php echo $Dosen['domisili']; ?></td>
        </tr>
        <tr>
            <td style="border:1px solid black">Jenis Kelamin</td>
            <td style="border:1px solid black"><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>