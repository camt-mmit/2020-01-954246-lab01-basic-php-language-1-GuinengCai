<?php
	echo "Input Number (price %discount): ";
	fscanf(STDIN, "%d %d", $price, $perdiscount);
	printf("price %d, discount %.2f and net price %.2f\n",
		$price, $discount = $price * $perdiscount / 100, $price - $discount);