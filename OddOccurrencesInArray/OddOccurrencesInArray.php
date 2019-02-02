<?php


class OddOccurrencesInArray
{
    public function solution($array) {

        $bool = [];
        foreach($array as $row) {

            if(isset($bool[$row]) && $bool[$row] == true){

                unset($bool[$row]);
            }else{
                $bool[$row] = true;
            }
        }
        return array_keys($bool)[0];
    }

    public function solution1($A)
    {

        $values = array_count_values($A);
        $unpaired = 0;

        foreach ($values as $key => $value) {
            if (($value % 2 === 1)) {
                $unpaired = $key;
            }
        }

        return $unpaired;
    }

    public function solution2($array)
    {
        sort($array);
        for ($i = 1; $i < count($array); $i += 2) {

            if ($array[$i - 1] != $array[$i]) {
                return $array[$i - 1];
            }
        }
        return $array[$i - 1];

    }
}