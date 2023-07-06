<?php
class balok
{
    public $panjang;
    public $lebar;
    public $tinggi;

    function hitungVolume()
    {
        return "Volume Balok Dengan sisi: Panjang = $this->panjang, Lebar = $this->lebar, dan Tinggi = $this->tinggi. Maka Volumenya adalah = ". $this->panjang*$this->lebar*$this->tinggi;
    }
    function hitungLuasSisi()
    {
        return "Luas Balok Dengan sisi: Panjang = $this->panjang, Lebar = $this->lebar". $this->panjang*$this->lebar;
    }
    // function ngerem()
    // {
    //     return "Motor $this->merk bisa ngerem !";
    // }
    // function ngegas()
    // {
    //     return "Motor $this->merk ini ngegas dan transmisinya $this->transmisi";
    // }
}

$balok = new balok();
$balok->panjang = 12;
$balok->lebar = 10;
$balok->tinggi = 7;
echo $balok->hitungVolume();
echo "<br>";
echo $balok->hitungLuasSisi();
// echo $motor->turing();
// echo "<br>";
// echo $motor->ngerem();
// echo "<br>";
// echo $motor->ngegas();
