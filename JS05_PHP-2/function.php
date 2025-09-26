<?php
    //Function
    // function perkenalan() {
    //     echo "Assalamualaikum, ";
    //     echo "Perkenalkan, nama saya Naura<br/>";
    //     echo "Senang berkenalan dengan Anda<br/>";
    // }
    // // perkenalan();
    // for ($i=0; $i < 2; $i++) { 
    //     perkenalan();
    // }

    //Function with Parameter
    // function perkenalan($nama, $salam) {
    //     echo $salam.", ";
    //     echo "Perkenalkan, nama saya ".$nama."<br/>";
    //     echo "Senang berkenalan dengan Anda<br/>";
    // }
    
    // perkenalan("Hamdana", "Hallo");
    // echo "<hr>";
    
    // $saya = "Elok";
    // $ucapanSalam = "Selamat pagi";
    // perkenalan($saya, $ucapanSalam);


    // Function with Parameter and using default value
    function perkenalan($nama, $salam="Assalamualaikum") {
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }
    perkenalan("Hamdana", "Hallo");
    echo "<hr>";
    
    $saya = "Elok";
    $ucapanSalam = "Selamat pagi";

    perkenalan($saya);
?>