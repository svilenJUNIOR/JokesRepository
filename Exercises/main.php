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

/*Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged.
Sample Input:
"if else"
"else"
"if"
Sample Output:
if else
if else
if */

    function CheckString ($string) {
        $beggins = $string[0] . $string[1];
        $beggins = strtolower($beggins);

        if ($beggins != "if") return "if " . $string;
        else return $string;
    }

/* Write a PHP program to remove the character in a given position of a given string. The given position will be in the range 0..string length -1 inclusive
 * Sample Input:
"Python", 1
"Python", o
"Python", 4
Sample Output:
Pthon
ython
Pythn
 */

    function ModifyString ($input, $index) {
        if ($index < 0 || $index > strlen($input))
        return "Invalid index";

        for ($i = 0; $i < strlen($input); $i++){
            if ($i != $index) echo $input[$i];
        }
    }

/* Write a PHP program to create a new string with the last char added at the front and back of a given string of length 1 or more
 * Sample Input:
"Red"
"Green"
"1"
Sample Output:
dRedd
nGreenn
111
 */
    function ReplaceChars ($input) {
        if (empty($input)) return "Invalid input";

        $lastChar = $input[strlen($input) - 1];

        $output = $lastChar . $input . $lastChar;

        return $output;
    }

/* Write a PHP program to count a substring of length 2 appears in a given string and also as the last 2 characters of the string. Do not count the end substring
Sample Input:
"abcdsab"
"abcdabab"
"abcabdabab"
"abcabd"
Sample Output:
1
2
3
0
 */

    function CountSubString ($input) {
        $count = -1;
        $subString = $input[strlen($input) - 2] . $input[strlen($input) - 1];

        for ($i = 0; $i < strlen($input) - 1; $i++) {

            if ($i + 1 <= strlen($input)) {
                $pairToCheck = $input[$i] . $input[$i + 1];

                if ($pairToCheck == $subString) $count++;
            }
        }

        return $count;
    }

/* Write a PHP program to check whether the sequence of numbers 1, 2, 3 appears in a given array of integers somewhere
 * Sample Input:
{1,1,2,3,1}
{1,1,2,4,1}
{1,1,2,1,2,3}
Sample Output:
bool(true)
bool(false)
bool(true)
 */

    function CheckForSequence ($input) {
        for ($i = 0; $i < count($input); $i++) {

            if ($i + 2 <= count($input)) {
                if ($input[$i] == 1 && $input[$i + 1] == 2 && $input[$i + 2] == 3)
                    return var_dump(true);
                else 
                    return var_dump(false);
            }
        }
    }

    echo CheckForSequence([1,1,2,3,1]);
?>
