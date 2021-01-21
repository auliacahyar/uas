<?php

class checkLengthChar{
    private $length = "Yuk Belajar Bahasa Pemrograman Bersama";
    private $cost= "0.1";
    private $sum;
    private $totalChar;

    public function checkLength()
    {
        $this->sum = strlen($this->length);
        echo "Jumlah karakter($this->sum)"."\n";
        $this->totalChar = $this->sum * $this->cost;
        echo "Total biaya karakter($this->totalChar)"."\n";
        if ($this->sum == 130){
            return "Maka total biaya - 3";
        } else {
            return "Maka total biaya - 0";
        }
    }
}