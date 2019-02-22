package main

import "fmt"

// AmexPrblem [20,10,5,1] the number is 53

func getMinimumNumberOfCoins(arr []int, number int) []int {
	result := []int{}
	for _, value := range arr {

		for number >= value {
			number -= value
			result = append(result, value)
		}
	}
	return result
}

func main() {
	result := []int{20, 10, 5, 1}
	fmt.Println(getMinimumNumberOfCoins(result, 0))
}
