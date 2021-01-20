<?php

class symbol{
    public $textSymbol = "Doni berlari-lari terbirit-birit";
    public $cost;
    public $sum;

    public function checkSymbol() 
    {
        $this->pattern = "/\-|\+|\@/";
        $this->sum = preg_match_all($this->pattern, $this->textSymbol);
        echo "Jumlah symbol($this->sum)"."\n";
        $this->cost = $this->sum / 2;
        echo "Biaya symbol($this->cost)";
    }
}
$symbol = new symbol;
echo $symbol->checkSymbol();