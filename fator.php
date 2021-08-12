<?php
	$num = 9;

	if ($num >0) {
		$val = $num;
	
	for ($i=($val-1); $i > 0 ; $i--) { 
		$val = $val * $i; 
	}
}
	else{
		 $val = 0;
	}
	echo "!{$num} = {$val}";