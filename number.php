<?php

class number{
    public $textNumber = "Sekarang tanggal 20 bulan 01 tahun 2021";
    public $cost = "12";
    public $sum;
    public $total;

    public function checkNumber() 
    {
        $this->pattern = "/[0-9]/";
        $this->sum = preg_match_all($this->pattern, $this->textNumber);
        echo "Jumlah angka($this->sum)"."\n";
        $this->total = $this->sum * $this->cost;
        echo "Total biaya angka($this->total)";
    }
}
$number = new number;
echo $number->checkNumber();