<?php

class uppercase{
    private $textKapital = "Yuk Belajar Bersama di UINSA";
    private $cost = "4";
    private $sum;
    private $totalChap;

    public function checkUppercase() 
    {
        $this->pattern = "/[A-Z]/";
        $this->sum = preg_match_all($this->pattern, $this->textKapital);
        echo "Jumlah kapital($this->sum)"."\n";
        $this->totalChap = $this->sum * $this->cost;
        echo "Total biaya kapital($this->totalChap)";
    }
}