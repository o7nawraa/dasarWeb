<?php
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

for ($i = 0; $i < count($nilaiSiswa); $i++) {
    for ($j = $i + 1; $j < count($nilaiSiswa); $j++) {
        if ($nilaiSiswa[$i] > $nilaiSiswa[$j]) {
            $temp = $nilaiSiswa[$i];
            $nilaiSiswa[$i] = $nilaiSiswa[$j];
            $nilaiSiswa[$j] = $temp;
        }
    }
}

echo "Nilai yang tersisa setelah menghapus 2 nilai terendah dan 2 nilai tertinggi: <br>";
$total = 0;
$jumlahNilai = 0;

for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $total += $nilaiSiswa[$i];
    $jumlahNilai++;

    if ($nilaiSiswa[$i] < 60) {
        echo "Nilai: {$nilaiSiswa[$i]} (Tidak lulus) <br>";
    } else {
        echo "Nilai: {$nilaiSiswa[$i]} (Lulus) <br>";
    }
}

$rataRata = $total / $jumlahNilai;
echo "<br>Rata-rata nilai setelah menghapus 2 nilai terendah dan 2 nilai tertinggi: $rataRata";
?>