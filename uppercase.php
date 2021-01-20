<?php

class uppercase{
    public $textKapital = "Yuk Belajar Bersama di UINSA";
    public $cost = "4";
    public $sum;
    public $total;

    public function checkUppercase() 
    {
        $this->pattern = "/[A-Z]/";
        $this->sum = preg_match_all($this->pattern, $this->textKapital);
        echo "Jumlah kapital($this->sum)"."\n";
        $this->total = $this->sum * $this->cost;
        echo "Total biaya kapital($this->total)";
    }
}
$uppercase = new uppercase;
echo $uppercase->checkUppercase();