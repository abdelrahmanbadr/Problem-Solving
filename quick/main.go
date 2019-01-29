package main

import "fmt"

var count int

func main() {
	array := []int{5, 1, 4, 2, 8}
	QuickSort(array)
	fmt.Println(array, count)
}

func QuickSort(array []int) {

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

			left++
			right--
		}

		QuickSort(array [0:right])
		QuickSort(array [left:arrayLength])

	}

}

func Swap(number1, number2 *int) {
	tempNumber1 := *number1
	tempNumber2 := *number2
	*number1 = tempNumber2
	*number2 = tempNumber1
	count++
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
