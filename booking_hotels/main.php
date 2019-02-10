<?php

class BookingHotels
{
    public $reviewsWords;

    public function main()
    {
        $file = "breakfast beach citycenter location metro view staff price
                5
                1
                this hotel has a nice view of the citycenter. the location is perfect
                2
                the breakfast is ok. Regarding location, it is quiet far from citycenter but price is cheap so it is worth
                1
                location is excellent. 5 min from citycenter. there is also a metro station very close to the hotel
                1
                they said bla bla bla not fair
                2
                very friendly staff and good cost-benefit ratio.location far from citycenter";
        $array = explode("\n", $file);
        // $reveiwsCount = $array[1];
        $reviews = [];
        $size = count($array);
        for ($i = 2; $i < $size; $i++) {

            if ($i % 2 == 0) {
                $lastHotelId = (int)$array[$i];
                if (!isset($reviews[$lastHotelId])) {
                    $reviews[$lastHotelId] = [];
                }
            } else {
                if (isset($lastHotelId)) {
                    $reviews[$lastHotelId][] = $array[$i];
                }
            }

        }

        return $this->bookingHotels($array[0], $reviews);

    }

    public function bookingHotels($words, $reviews)
    {
        $this->reviewsWords = explode(" ", $words);
        $array = [];
        foreach ($reviews as $key => $review) {
            $array[$key] = 0;

            foreach ($review as $row) {
                $count = $this->findCountOfReviewWords($row);
                $array[$key] += $count;
            }

        }
        return $this->sortArrayByKeyValue($array);
    }

    public function sortArrayByKeyValue($array)
    {
        arsort($array);
        $array = array_keys($array);
        return $array;
    }

    public function findCountOfReviewWords($input)
    {
        $count = 0;
        foreach ($this->reviewsWords as $row) {
            if (strpos($input, $row) !== false) {
                $count++;
            }
        }
        return $count;
    }

}