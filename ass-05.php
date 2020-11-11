<?php
	echo "Input usage unit: ";
	fscanf(STDIN, "%d", $unit);
	
	$price = 0;
	if($unit > 0) {
		$price += 10;
		$unit -= 5;
	}
	
	if($unit > 0) {
		$unitCal = ($unit > 5)? 5 : $unit;
		$price += $unitCal * 3;
		$unit -= $unitCal;
	}
	
	if($unit > 0) {
		$unitCal = ($unit > 5)? 5 : $unit;
		$price += $unitCal * 5;
		$unit -= $unitCal;
	}
	
	if($unit > 0) {
		$price += $unit * 10;
	}

	printf("price of electricity bill = %d\n", $price);
