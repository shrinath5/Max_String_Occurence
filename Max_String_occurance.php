<?php 
// PHP program to output the maximum 
// occurring character in a string 
$ASCII_SIZE = 256; 

function getMaxOccuringChar($str) 
{ 
	global $ASCII_SIZE; 
	
	// Create array to keep the count 
	$count = array_fill(0, $ASCII_SIZE, NULL); 

	$len = strlen($str); 
	$max = 0; 

	for ($i = 0; $i < ($len); $i++) 
	{ 
		$count[ord($str[$i])]++; 
		if ($max < $count[ord($str[$i])]) 
		{ 
			$max = $count[ord($str[$i])]; 
			$result = $str[$i]; 
		} 
	} 

	return $result; 
} 


$str = "BOOKKEEPER"; 
echo "Max occurring character is " . 
		getMaxOccuringChar($str); 
			
?> 
