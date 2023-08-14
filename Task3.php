<?php

///////////////////////Task 3a////////////////////

//substr() - This function is used to extract a substring from a string.
//substr() takes the string "supernova" and extracts the substring starting from position 0 to 4, result=super

$string = "supernova";
$substring = substr($string, 0, 5); // Extracts characters from position 0 to 4
echo $substring; // Output: super

echo"</br></br>";
echo"</br></br>";

//strpos() - This function is used to find the position of the first occurrence of a substring within a string.
//strpos() searches for the position of the substring "letters" within the string. The result is 10 because "letters" starts at position 10

$string = "Count the letters";
$position = strpos($string, "letters");
echo $position; // Output: 10

echo"</br></br>";
echo"</br></br>";

//ucwords() - This function capitalizes the first letter of each word in a string.
//ucwords() takes "capital city" and capitalizes the first letter of each word, resulting in "Capital City"

$string = "capital city";
$capitalized = ucwords($string);
echo $capitalized; // Output: Capital City

echo"</br></br>";
echo"</br></br>";

//strcmp() - This function compares two strings and returns an integer indicating their relationship.
//strcmp() compares two strings and returns -1 if the first string is lexicographically smaller than the second string. In this example, "ant" comes before "bee" in the dictionary, hence the result is -1.

$string1 = "ant";
$string2 = "bee";
$result = strcmp($string1, $string2);
echo $result; // Output: -1

echo"</br></br>";
echo"</br></br>";

//str_repeat() - This function repeats a string a specified number of times.
//str_repeat() duplicates the string "run" three times, resulting in "runrunrun".

$string = "run";
$repeated = str_repeat($string, 3);
echo $repeated; // Output: runrunrun

echo"</br></br>";
echo"</br></br>";

///////////////////////Task 3b////////////////////

$timestamp = time();
$formattedDate = date("l jS F g:i A", $timestamp);
echo $formattedDate; 

echo"</br></br>";
echo"</br></br>";

///////////////////////Task 3c////////////////////

$strings = array("apple", "banana", "cherry", "date", "elderberry", "fig", "grape", "honeydew", "kiwi");
$count = 0;

foreach ($strings as $string) {
    if (strlen($string) > 5) {
        $count++;
    }
}

echo "Number of strings longer than 5 characters: " . $count; // Output: Number of strings longer than 5 characters: 4

echo"</br></br>";
echo"</br></br>";

///////////////////////Task 3d////////////////////

$provinces = array(
    "GP" => "Gauteng",
    "L" => "Limpopo",
    "NW" => "North West",
    "FS" => "Free State",
    "WP" => "Western Cape",
    "EC" => "Eastern Cape",
    "ZN" => "Kwazulu Natal",
    "NC" => "Northern Cape",
    "MP" => "Mpumalanga"
);

foreach ($provinces as $code => $name) {
    echo "Code: $code, Province: $name<br>";
}

///////////////
echo"</br></br>";
echo"</br></br>";
///////////////


$provinces = array(
    "GP" => "Gauteng",
    "L" => "Limpopo",
    "NW" => "North West",
    "FS" => "Free State",
    "WP" => "Western Cape",
    "EC" => "Eastern Cape",
    "ZN" => "Kwazulu Natal",
    "NC" => "Northern Cape",
    "MP" => "Mpumalanga"
);

arsort($provinces); // Sort the array in descending order based on values

foreach ($provinces as $code => $name) {
    echo "Code: $code, Province: $name<br>";
}



?>


<iframe src="text/task3.txt" height="400" width="1200">
Your browser does not support iframes. </iframe>