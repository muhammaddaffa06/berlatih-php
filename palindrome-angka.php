<?php

function palindrome_angka($number)
{
    while (true) {
        $stringedNumber = strval($number + 1);
        $reversedString = "";
        $res = "";

        for ($k = (strlen($stringedNumber) - 1); $k >= 0; $k--) {
            $reversedString .= $stringedNumber[$k];
        }

        if ($reversedString == $stringedNumber) {
            $res = $stringedNumber . "<br>";
            return $res;
        } else {
            $number += 1;
        }
    }
}


// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001
