def StrRevers(string):
	index = len(string);
	result = "Result: ";

	result = result + str(sorted(string));
	
	print result;
	
print u'This line will be sorted>';
input_st = raw_input();
StrRevers(input_st);