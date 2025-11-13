package main

import "fmt"

func balancedStringSplit(s string) int {
	balance := 0
	count := 0

	for _, ch := range s {
		switch ch {
		case 'R':
			balance++
		case 'L':
			balance--
		}

		if balance == 0 {
			count++
		}
	}

	return count
}

func main() {
	s := "RLRRLLRLRL"
	fmt.Println(balancedStringSplit(s)) // Output: 4
}
