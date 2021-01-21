<?php

class number{
    private $textNumber = "Sekarang tanggal 20 bulan 01 tahun 2021";
    private $cost = "12";
    private $sum;
    private $totalNum;

    public function checkNumber() 
    {
        $this->pattern = "/[0-9]/";
        $this->sum = preg_match_all($this->pattern, $this->textNumber);
        echo "Jumlah angka($this->sum)"."\n";
        $this->totalNum = $this->sum * $this->cost;
        echo "Total biaya angka($this->totalNum)";
    }
}