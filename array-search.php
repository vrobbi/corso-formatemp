<!DOCTYPE html>
<head>
<title>Array push</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php


/*

This function has existed since PHP version 4, and using this function, we can easily search within an array.

The PHP array_search() function searches the array for a given value. It returns the first corresponding key if the search was successful.

It performs a loose or strict search based on parameters and returns false if the value does not exist in the array.

This function receives 3 variables as input parameters and searches within the array given as parameters. If the value is found in the array, it returns its key; if the given value does not exist, it returns false.

If the array is indexed, it returns its index number, and if it is associative, it returns the key of the found item.

*/

print("<div style='text-align:center;margin-top:50px;'>");

$cars = array(
    'fer' => 'Ferrari', 
    'ben' => 'Benz', 
    'bmw' => 'BMW', 
    'vol' => 'Volvo'
);

var_dump(array_search('Ben', $cars));




print("</div>");
?>