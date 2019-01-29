package main

import "fmt"



func main() {
	array := []int32{5, 1, 4, 2, 8}
	minimumSwaps := MinimumSwaps(array)
	fmt.Println(array, minimumSwaps)
}

func MinimumSwaps(array []int32) int32 {
	var minimumSwaps int32
	arrayLength := len(array)
	if arrayLength > 1 {

		left := 0
		right := arrayLength - 1

		arrayMiddle := (arrayLength) / 2
		pivot := array[arrayMiddle]
		for array[left] < pivot {
			left++
		}
		for array[right] > pivot {
			right--
		}
		if left < right {

			Swap(&array[left], &array[right])
			minimumSwaps++

			left++
			right--
		}

		minimumSwaps += MinimumSwaps(array [0:right])
		minimumSwaps += MinimumSwaps(array [left:arrayLength])

	}
	return minimumSwaps
}

func Swap(number1, number2 *int32) {
	tempNumber1 := *number1
	tempNumber2 := *number2
	*number1 = tempNumber2
	*number2 = tempNumber1
}

func SortWithMoreMemoryAllocation(array []int, low int, high int) []int {
	less, equal, greater := []int{}, []int{}, []int{}
	arrayMiddle := low + high/2
	pivot := array[arrayMiddle]
	for _, element := range array {
		if element < pivot {
			less = append(less, element)
		}
		if element == pivot {
			equal = append(equal, element)
		}
		if element > pivot {
			greater = append(greater, element)
		}
	}

	array = append([]int{}, less...)
	array = append(array, equal...)
	array = append(array, greater...)
	return array

}
