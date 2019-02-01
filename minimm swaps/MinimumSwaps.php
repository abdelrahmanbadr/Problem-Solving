<?php

class  MinimumSwaps
{


    public function minimumSwaps($arr)
    {
        $swaps = 0;
        for ($i = 0; $i < count($arr); $i++) {
            if ($i + 1 != $arr[$i]) {
                $t = $i;
                while ($arr[$t] != $i + 1) {
                    $t++;
                }
                $temp = $arr[$t];
                $arr[$t] = $arr[$i];
                $arr[$i] = $temp;
                $swaps++;
            }
        }
        return $swaps;
    }

}


//var_dump(minimumSwaps([2, 31, 1, 38, 29, 5, 44, 6, 12, 18, 39, 9, 48, 49, 13, 11, 7, 27, 14, 33, 50, 21, 46, 23, 15, 26, 8, 47, 40, 3, 32, 22, 34, 42, 16, 41, 24, 10, 4, 28, 36, 30, 37, 35, 20, 17, 45, 43, 25, 19])); // right ==3

//minimumSwaps([7, 1, 3, 2, 4, 5, 6]);
//var_dump(minimumSwaps([9,1,2,6,5])); // right ==3
//var_dump(minimumSwaps([7, 1, 3, 2, 4, 5, 6])); // right ==5
//var_dump(minimumSwaps([4 ,3, 1, 2])); // right ==3
//var_dump(minimumSwaps([1 ,3, 1, 2])); // right ==1ar_dump(minimumSwaps([4, 3, 1, 2])); // right ==3