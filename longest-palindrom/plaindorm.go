package main

import "fmt"

func main() {
	input := "bcbbaaaab"
	var max int;
	for pos, _ := range input {

		for i := pos; i < len(input); i++ {
			//fmt.Println(input[pos:])
			if PlainDormCount(input[pos:]) > max {
				max = PlainDormCount(input[pos:])
			}
		}

	}
	fmt.Println(max)

}

func PlainDormCount(str string) int {
	if StrReverse(str) == str {
		return len(str)
	}
	return 1
}
func StrReverse(s string) (result string) {
	for _, v := range s {
		result = string(v) + result
	}
	return
}
