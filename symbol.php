<?php

class symbol{
    private $textSymbol = "Doni berlari-lari terbirit-birit";
    private $cost;
    private $sum;

    public function checkSymbol() 
    {
        $this->pattern = "/\-|\+|\@/";
        $this->sum = preg_match_all($this->pattern, $this->textSymbol);
        echo "Jumlah symbol($this->sum)"."\n";
        $this->cost = $this->sum / 2;
        echo "Biaya symbol($this->cost)";
    }
}