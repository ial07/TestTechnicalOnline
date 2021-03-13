function reverse(array) {
	var output = [];
	while (array.length) {
		output.push(array.pop());
	}

	return output;
}

console.log(reverse([19, 22, 3, 28, 26, 17, 18, 4, 28, 0]));
