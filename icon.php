<?php

class icon {
    public $textIcon = "Yuk, belajar bersama!";
    public $cost = "8";
    public $sum;
    public $total;

    public function checkIcon() 
    {
        $this->pattern = "/\#|\,|\!/";
        $this->sum = preg_match_all($this->pattern, $this->textIcon);
        echo "Jumlah icon($this->sum)"."\n";
        $this->total = $this->sum * $this->cost;
        echo "Total biaya icon($this->total)";
    }

    public function getIcon()
    {
        return "Icon";
    }
}
$icon = new icon;
echo $icon->checkIcon();
echo $icon->getIcon();