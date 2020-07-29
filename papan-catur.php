<?php

function papan_catur($number)
{
    for ($k = 0; $k < $number; $k++) {
        for ($j = 0; $j < ($number * 2) - 1; $j++) {
            if ($k % 2 == 1) {
                if ($j % 2 == 1) {
                    echo "#&nbsp";
                } else {
                    echo "&nbsp";
                }
            } else if ($k % 2 == 0) {
                if ($j % 2 == 1) {
                    echo  "&nbsp";
                } else {
                    echo "#&nbsp";
                }
            }
        }
        echo "<br>";
    }
    echo "<br>";
}


// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
