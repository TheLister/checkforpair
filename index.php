<?php

//console program to sort given numbers

$isfirst = true;
$goalsum = 8;
$foundamatch = false;
$seen = array();
function ConvertToInt() {
	global $value;
	// echo gettype ($value) . $value;
	settype ($value, int);
	// echo gettype ($value) . $value;
	echo PHP_EOL;
}

function SearchForPair() {
	global $value;
	global $goalsum;
	global $seen;
	global $foundamatch;
	$partner = $goalsum - $value; //calculate partner
	echo 'value = ' . $value;
	echo PHP_EOL;
	echo 'partner = ' . $partner;
	echo PHP_EOL;

	//check for partner in seen array;
	if (in_array($value, $seen)) {
	    echo 'Got a match! ' . "$value plus $partner = $goalsum!!!!";
		$foundamatch = true;
	} else {
		echo 'No match found.';
		echo PHP_EOL;
		foreach ($seen as $seenint) {
			echo $seenint;
		}
	}
	//add to seen array;
	$seen[] = $value;
}

function StripFirstArg() {
	global $isfirst;
	$isfirst = false;
	echo 'StripFirstArg';
}

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
foreach ($argv as $value) {
	global $isfirst;
	global $foundamatch;
	if ($foundamatch) {
		break 1;
	}
	if ($isfirst) { //skip the iteration if it is the first arg
		global $isfirst;
		$isfirst = false;
		echo PHP_EOL;
		next($argv);
	} else {
		ConvertToInt();
		SearchForPair();
	}
	echo PHP_EOL;
	echo PHP_EOL;
	echo PHP_EOL;
}
echo PHP_EOL;




// next($argv);  // Advance pointer to 1
//
// while (list($key, $val) = each($argv)) {
//   echo "$key => $val\n";
// }

 ?>
