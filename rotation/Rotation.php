<?php


class Rotation
{
    public function solution($A, $K)
    {
        if (empty($A)) {
            return $A;
        }
        for ($i = 0; $i < $K; $i++) {
            $A = rotate($A);
        }
        return $A;
    }

    function rotate($numbers)
    {

        array_push($numbers, array_shift($numbers));

        return $numbers;
    }

    public function rotate1($array)
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