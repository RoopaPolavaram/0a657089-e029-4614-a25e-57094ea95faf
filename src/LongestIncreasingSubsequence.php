<?php
namespace App;

class LongestIncreasingSubsequence {

    /** This function processes the given input and returns the subsequence with maximum length */
    public static function process($input) : string {
        try {
           // convert the given input to array
            $orderedArr = explode(" ", $input);
            $orderedSubSeq = LongestIncreasingSubsequence::getOrderedSubSeq($orderedArr);
            $maxSubSeq = LongestIncreasingSubsequence::getMaxSubSeq($orderedSubSeq);
            return $maxSubSeq;
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

    }

    /** This function creates a two dimensional array with increasing sub sequences */
    private static function getOrderedSubSeq($orderedArr) : array {
        $row = 0;
        $output = [];
        $output[$row][] = $orderedArr[0];
        for ($i = 1; $i < count($orderedArr); $i++) {
            if (!isset($output[$row])) {
                $output[$row] = [];
            }
            if ($orderedArr[$i - 1] < $orderedArr[$i]) {
                array_push($output[$row], $orderedArr[$i]);
            } else {
                // when there is break in increasing sub sequence, then increase the row value
                $row++;
                $output[$row][] = $orderedArr[$i];
            }
        }
        return $output;
    }

    /** This function finds the subsequence with maximum length. If there are subsequences of same length then returns the first longest one */
    private static function getMaxSubSeq($orderedSubSeq) : string {
        // find the maximum length of all available sub sequences
        $maxLength = count(max(($orderedSubSeq)));
        // find all the subsequences with maximum length
        $arraysWithMaxlength = array_filter($orderedSubSeq, function($eachSubSeq) use ($maxLength) {
            return count($eachSubSeq) === $maxLength;
        });
        // pick the first subsequence with max length
        $output = array_values($arraysWithMaxlength)[0];
        // convert result to space separated string, then return it
        return implode(" ", $output);
    }
}