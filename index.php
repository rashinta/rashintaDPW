<?php
class animal
{
    public $jumlah_kaki, $bisa_terbang;
}

class cat extends animal
{
    function bersuara()
    {
        return "mengg mengg mengg";
    }
}

class cow extends animal
{
    function bersuara()
    {
        return "moooo moooo moooo";
    }
}

class Sparrow extends animal
{
    function bersuara()
    {
        return "gakkk gakkk gakkkk";
    }
}

class Frog extends animal
{
    function bersuara()
    {
        return "krotok krotok krotok";
    }
}


// cat
$betty = new cat;
$betty->jumlah_kaki = 4;
$betty->bisa_terbang = "tidak bisa terbang";

echo "betty is a cat <br>";
echo "punya kaki sebanyak:" . $betty->jumlah_kaki . "<br>";
echo $betty->bisa_terbang . "<br>";
echo "suaranya: " . $betty->bersuara();

echo "<hr>";


// cow
$james = new cow;
$james->jumlah_kaki = 4;
$james->bisa_terbang = "tidak bisa terbang";

echo "james is a cow <br>";
echo "punya kaki sebanyak:" . $james->jumlah_kaki . "<br>";
echo $james->bisa_terbang . "<br>";
echo "suaranya: " . $james->bersuara();

echo "<hr>";


// Sparrow
$sean = new Sparrow;
$sean->jumlah_kaki = 2;
$sean->bisa_terbang =  "bisa terbang";

echo "sean is a sparrow <br>";
echo "punya kaki sebanyak:" . $sean->jumlah_kaki . "<br>";
echo $sean->bisa_terbang . "<br>";
echo "suaranya: " . $sean->bersuara();

echo "<hr>";


// Frog
$zain = new Frog;
$zain->jumlah_kaki = 4;
$zain->bisa_terbang = "bisa terbang";

echo "zain is a frog <br>";
echo "punya kaki sebanyak:" . $zain->jumlah_kaki . "<br>";
echo $zain->bisa_terbang . "<br>";
echo "suaranya: " . $zain->bersuara();

echo "<hr>"; 