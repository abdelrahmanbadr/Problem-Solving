package main

import "fmt"

// 1- make map of all numbers in array and set all of them to true
// 2- find the starting point (smallest) in the each sub sequence
// for example in {2, 1, 6, 9, 4, 3, 7, 11, 10} will get 1,6,9 which is smallest number in each sub sequence {1,2,3,4} {6,7} {9,10,11}
func main() {
	longest := 0;
	mp := make(map[int]bool)
	arr := []int{3, 10, 3, 11, 4, 5, 6, 7, 8, 12}
	for _, v := range arr {
		mp[v] = true
	}
	for number, _ := range mp {
		// here to find the starting point in each sub sequence
		if !mp[number-1] {
			temp := number
			count := 0
			for mp[temp] {
				count++
				temp++

			}
			if count > longest {
				longest = count
			}
		}

	}
	fmt.Println(longest)

}
