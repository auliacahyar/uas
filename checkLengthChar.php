<?php

class checkLengthChar{
    public $length = "Yuk Belajar Bahasa Pemrograman Bersama";
    public $cost= "0.1";
    public $sum;
    public $total;

    public function checkLength()
    {
        $sum = strlen($this->length);
        echo "Jumlah karakter($sum)"."\n";
        $this->total = $sum * $this->cost;
        echo "Total biaya karakter($this->total)"."\n";
        if ($sum == 130){
            return "Maka total biaya - 3";
        } else {
            return "Maka total biaya - 0";
        }
    }
}
$checkLengthChar = new checkLengthChar;
echo $checkLengthChar->checkLength();