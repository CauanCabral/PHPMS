<?php

class arabicToRoman {

    function convert($num) {
        if ($num <= 0 || $num > 3999)
            return 'Morre Diabo!';

        $numeros = array(
            array('', 'M', 'MM', 'MMM'),
            array('', 'C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM'),
            array('', 'X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC'),
            array('', 'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX')
        );

        $size_numero = sizeof($numeros);
        $num = str_pad($num, $size_numero, '0', STR_PAD_LEFT);
        $buffer = null;
        for ($x = 0; $x < $size_numero; $x++)
            $buffer .= $numeros[$x][$num[$x]];
        return $buffer;
    }

}

?>