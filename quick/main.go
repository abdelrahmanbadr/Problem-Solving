package main

import (
	"fmt"
	"math/rand"
)

func main() {
	Coins()
}

func Coins() {
	coins := []int{20, 10, 5, 1}
	result := []int{}
	value := 12
	for _, v := range coins {
		for value > 0 && value >= v {

			value = value - v
			result = append(result,v)

		}
	}
	fmt.Println(result)
}

func MinimumSwaps(array []int32) int32 {
	var minimumSwaps int32
	arrayLength := len(array)

	if arrayLength < 2 {
		return minimumSwaps
	}

	left := 0
	right := arrayLength - 1
	arrayMiddle := (arrayLength) / 2
	pivot := array[arrayMiddle]
	for left <= right {

		for array[left] < pivot {
			left++
		}
		for array[right] > pivot {
			right--
		}
		if left <= right {
			Swap(&array[left], &array[right])
			minimumSwaps++
			left++
			right--
		}

	}

	fmt.Println(array,right)
	fmt.Println(array [:right], array [left-1:])
	minimumSwaps += MinimumSwaps(array [:right])
	minimumSwaps += MinimumSwaps(array [left:])
	return minimumSwaps
}
func quicksort(a []int32) []int32 {
	if len(a) < 2 {
		return a
	}

	left, right := 0, len(a)-1

	pivot := rand.Int() % len(a)

	a[pivot], a[right] = a[right], a[pivot]

	for i, _ := range a {
		if a[i] < a[right] {
			a[left], a[i] = a[i], a[left]
			left++
		}
	}

	a[left], a[right] = a[right], a[left]

	quicksort(a[:left])
	quicksort(a[left+1:])

	return a
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
