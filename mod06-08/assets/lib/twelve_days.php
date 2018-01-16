<?php

function getTitle() {
	return '12 Days of Christmas';


}

 
// header("Content-Type: text/plain; charset=UTF-8");
 
function getLyrics() {
	$days = array(
    	'first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth',
    	'tenth', 'eleventh', 'twelfth'
	);
 
	$gifts = array(
    	"A partridge in a pear tree",
    	"Two turtle doves",
    	"Three french hens",
    	"Four calling birds",
    	"Five golden rings",
    	"Six geese a-laying",
    	"Seven swans a-swimming",
    	"Eight maids a-milking",
    	"Nine ladies dancing",
    	"Ten lords a-leaping",
    	"Eleven pipers piping",
    	"Twelve drummers drumming"
	);
 
	// $verses = [];

// i, j, k - indices (sequence of array)

 	// SIR BILLY CODES

		for ( $i = 0; $i < count($days); $i++ ) {	
    		echo '<div id="day' .$days[$i] . '">';
    		echo 'On the ' . $days[$i] . ' day of Christmas my true love gave to me <br>';

    	//First Day
    	if ($i==0)
    		echo $gifts[$i] . '<br>';

    	else //2-12 days
    		for ($j = $i; $j >= 0; $j--) {
    			if ($j==0)
    				echo 'And ' . $gifts[$j] . '<br>';
    			else
    				echo $gifts[$j] . '<br>';


			 }
		echo " <br>";
		echo '</div>';
		}

// $verses = [];
 
// for ( $i = 0; $i < 12; $i++ ) {
//     $lines = [];
//     $lines[0] = "On the {$days[$i]} day of Christmas, my true love gave to me";
 
//     $j = $i;
//     $k = 0;
//     while ( $j >= 0 ) {
//         $lines[++$k] = $gifts[$j];
//         $j--;
//     }
 
//     $verses[$i] = implode(PHP_EOL, $lines);
 
//     if ( $i == 0 )
//         $gifts[0] = "And a partridge in a pear tree";
// }
 
// echo implode(PHP_EOL . PHP_EOL, $verses);
 
}
 

?>