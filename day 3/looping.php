<?php
//looping dengan for
//pengulangan dari angka 1 s.d 10

for($x=1; $x<=10; $x=$x+1){
    echo '<br>'.$x;
}

//pengulangan dari angka 10 s.d 1

for($y=10; $y>=1; $y=$y-1){
    echo "<br>$y";
}

for($x=1; $x<=10; $x=$x+1){
    echo '<br>Namaku mira.. ';
}


//buat function umur
function umur($thn_lahir){
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo umur(2003);
?>