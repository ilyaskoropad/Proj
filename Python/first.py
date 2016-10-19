def StrRevers(string):
	index = len(string);
	result = "Result: ";

	for index in range(index, 0, -1):
		index = index - 1;
		result = result + string[index];
	
	print result;
	
print u'Введеная строка будет развернута. >';
input_st = raw_input();
StrRevers(input_st);