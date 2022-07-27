<?php
/*Write a PHP program to check a given integer and return true if it is within 10 of 100 or 200
Sample Input:
103
90
89
Sample Output:
bool(true)
bool(true)
bool(false)
 */
    function CheckInt ($int){
        $Check100 = ($int - 100 <= 10) && (100 - $int <= 10);
        $Check200 = ($int - 200 <= 10) && (200 - $int <= 10);

        if ($Check100 || $Check200) var_dump(true);
        else var_dump(false);
    }
?>