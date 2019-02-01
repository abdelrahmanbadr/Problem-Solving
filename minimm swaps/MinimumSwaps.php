<?php

class  MinimumSwaps
{
    function minimumSwaps($arr)
    {
        $indexArray = [];
        $sortedArray = $arr;
        $count = 1;
        sort($sortedArray);
        foreach ($arr as $position => $element) {
            if (isset($indexArray[$element])) {

                $count++;
            }
            $indexArray[$element] = $position;
        }

        foreach ($sortedArray as $key => $val) {

            if ($key == $indexArray[$val]) {
                $count++;
            }

        }

        return count($arr) - $count;
    }
}
//minimumSwaps([7, 1, 3, 2, 4, 5, 6]);
//var_dump(minimumSwaps([9,1,2,6,5])); // right ==3
//var_dump(minimumSwaps([7, 1, 3, 2, 4, 5, 6])); // right ==5
//var_dump(minimumSwaps([4 ,3, 1, 2])); // right ==3
//var_dump(minimumSwaps([1 ,3, 1, 2])); // right ==1ar_dump(minimumSwaps([4, 3, 1, 2])); // right ==3