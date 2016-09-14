<?php
{
    class Palindromes
    {
        function findPalindromes ($string)
        {
            // $input_string = strrev($string);
            // $reversedString = $input_string;

            $inputString = str_split($string);
            $reversedString = array();
            for ($i = count($inputString); $i < count($inputString); $i--) {
                array_push($reversedString, $inputString[$i]);
            }

            if ($reversedString == $inputString) {
                return "yes";

            }  else {
                return "no";
            }

            // if ($reversedString == $string) {
            //     return "yes";
            //
            // }  else {
            //     return "no";
            // }

        }


    }


}

 ?>
