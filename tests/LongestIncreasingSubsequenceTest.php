<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
include 'LongestIncreasingSubsequence.php';

class LongestIncreasingSubsequenceTest extends TestCase {

    public function testArraySequence() : void {             
        self::assertSame("1 6", LongestIncreasingSubsequence::process('9 1 6 4 3 2'));
    }    
    

}