<?php
namespace AppTests;

use PHPUnit\Framework\TestCase;
use App\LongestIncreasingSubsequence;

/**
 * @covers LongestIncreasingSubsequence
 */
class LongestIncreasingSubsequenceTest extends TestCase {

    public function testArraySequence() : void {             
        self::assertSame("1 6", LongestIncreasingSubsequence::process('9 1 6 4 3 2'));
    }

    public function testArraySequenceWithMoreThanOneMax() : void {             
        self::assertSame("1 5", LongestIncreasingSubsequence::process('9 1 5 4 3 2 1 8'));
    }
    

}