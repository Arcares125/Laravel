<?php
    require_once('animal.php');
    require_once('ape.php');
    require_once('frog.php');

    $hewan1 = new animal("sheep");
    echo "Nama Hewan : " . $hewan1->get_Name() . "<br>";
    echo "Jumlah Kaki : " . $hewan1->get_Legs() . "<br>";
    echo "Berdarah Dingin : " . $hewan1->get_Blood() . "<br>";
    echo "<br>";

    $sungokong = new ape("Kera Sakti");
    echo "Nama Hewan : " . $sungokong->get_Name() . "<br>";
    echo "Jumlah Kaki : " . $sungokong->get_Legs() . "<br>";
    echo "Berdarah Dingin : " . $sungokong->get_Blood() . "<br>";
    echo "Bunyi Kera : ";
    $sungokong->yell();
    echo "<br>";
    echo "<br>";

    $pangeranKodok = new frog("Buduk");
    echo "Nama Hewan : " . $pangeranKodok->get_Name() . "<br>";
    echo "Jumlah Kaki : " . $pangeranKodok->get_Legs() . "<br>";
    echo "Berdarah Dingin : " . $pangeranKodok->get_Blood() . "<br>";
    echo "Kodok Lompat : ";
    $pangeranKodok->jump();
    echo "<br>";
?>