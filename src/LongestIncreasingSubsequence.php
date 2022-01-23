<?php
namespace App;

class LongestIncreasingSubsequence {

    public static function process($input) {
        // Converting space separated string input to array of strings
        $orderedArr = explode(" ", $input);
        $row = 0;
        $output = [];
        // $output is a two dimensional array to store incremental sub sequences
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
        // find the subsequence with maximum length and convert it to space separated string, then return it        
        $output = implode(" ", array_values(max($output)));

        return $output;        
    }
}