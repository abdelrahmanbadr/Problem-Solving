<?php

class PermMissingElem
{
    public function solution($A)
    {
        $N = count($A);
        $sum = ($N + 2) * ($N + 1) / 2;
        return $sum - array_sum($A);

    }

}