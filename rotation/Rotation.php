<?php


class Rotation
{
    public function solution($A, $K)
    {
        // write your code in PHP7.0
        for ($i = 0; $i < $K; $i++) {
            $A = rotate($A);
        }
        return $A;
    }

    public function rotate($array)
    {

        $size = count($array);

        $temp = $array[0];
        for ($i = 1; $i < $size; $i++) {
            $currentValue = $array[$i];
            $array[$i] = $temp;
            $temp = $currentValue;

        }
        $array[0] = $temp;
        return $array;
    }

}