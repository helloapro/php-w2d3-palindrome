<?php
    require_once 'src/Palindromes.php';
    class PalindromesTest extends PHPUnit_Framework_TestCase
    {
        function test_palindrome ()
        {
        $test_reverse = new Palindromes;
        $input_string = "racecar";
        $output = $test_reverse->findPalindromes($input_string);
        $this->assertEquals("yes", $output);
        }

    }

    ?>
