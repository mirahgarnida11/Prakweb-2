<?php
class Nilaisiswa
{
    public $nama;
    public $nilai;
    public $kuliah= 'STTNF';
    public function getHasil(){
    
        if ($this->nilai > 55) return 'lulus';
        else return 'Tidak Lulus';
}
}
// this -> ke variabel
//self:: ke constructor
//_constructor sebagai penghubung


//objek

$ns1 = new Nilaisiswa();
$ns1 ->nama = 'Mirah';
$ns1 ->nilai = 70;

echo $ns1 ->nama;
echo $ns1 ->nilai;
echo $ns1 ->kuliah;
echo $ns1 ->getHasil();
?>