<?php
//function define by user



//Fungsi yang tidak mengembalikan nilai 
function salam(){
    echo "assalamualaikum, apa kabar..";
}
salam(); //cetaknya
echo "<br>";
function panggil($arg1){
    echo "Halo sayangku, kamu lagi apa? $arg1";
}
    panggil("Mirah");

//Fungsu yang mengembalikan nilai 
function hasil($a,$b){
    $c=$a*$b;
    return $c;

}
echo hasil(5,7);

?>