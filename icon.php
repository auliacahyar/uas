<?php

class icon{
    private $textIcon = "Yuk, belajar bersama!";
    private $cost = "8";
    private $sum;
    private $totalIcon;

    public function checkIcon() 
    {
        $this->pattern = "/\#|\,|\!/";
        $this->sum = preg_match_all($this->pattern, $this->textIcon);
        echo "Jumlah icon($this->sum)"."\n";
        $this->totalIcon = $this->sum * $this->cost;
        echo "Total biaya icon($this->totalIcon)";
    }
}