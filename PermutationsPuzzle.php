<?php

class PermutationsPuzzle
{
    public $result;


    public function swap(&$arr, $i, $n)
    {
        $temp = $arr[$i];
        $arr[$i] = $arr[$n];
        $arr[$n] = $temp;

    }

    // start =0, i =0
    // start =1, i =1
    // start =2, i =2
    // start == count($arr) [1,2,3]

    // start =1, i =2
    // start =2, i =2
    // start == count($arr) [1,3,2]

    // start =0, i =1
    // start =1, i =1
    // start =2, i =2
    // start == count($arr) [2,1,3]


    // start =1, i =2
    // start =2, i =2
    // start == count($arr) [2,3,1]


    // start =0, i =2
    // start =1, i =1
    // start =2, i =2
    // start == count($arr) [3,1,2]

    // start =1, i =2
    // start =2, i =2
    // start == count($arr) [3,2,1]

    public function permutation($arr, $start)
    {

        if ($start == count($arr)) {
            $this->result[] = $arr;
        }
        for ($i = $start; $i < count($arr); $i++) {

            $this->swap($arr, $start, $i);

            $this->permutation($arr, $start + 1);

        }
    }

//    public function Puzzle()
//    {
//        foreach ($this->result as $row) {
//            if (2 * $row[0] + 3 * $row[1] + 4 * $row[2] + 5 * $row[3] == 32) {
//                return $row;
//            }
//        }
//    }

}
$arr = [1, 2, 3];
$obj = new Test;
$obj->PermutationsPuzzle($arr, 0);
//    dd($obj->counter);
echo ($obj->result);