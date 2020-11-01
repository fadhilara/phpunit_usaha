<?php
class Usaha
{

    public function hitung_usaha($a, $b)
    {
        return $a*$b;
        // if (($a * $b) < 0) {return "Usaha Negatif";}
        // elseif (($a * $b) > 0) {return "Usaha Positif";}
        // else {return "Usaha Nol";}
    }
    public function kategori_usaha($a, $b)
    {
        $result = $a*$b;
        if ($result < 0) {return "Usaha Negatif";}
        elseif ($result > 0) {return "Usaha Positif";}
        else {return "Usaha Nol";}
    }
 
}
