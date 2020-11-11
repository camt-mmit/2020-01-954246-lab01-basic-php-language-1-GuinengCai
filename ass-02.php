<?php
	echo "Input Number (a b): ";
	fscanf(STDIN, "%d %d", $a, $b);
	printf("%d %s %d\n",
		$a,
		($a > $b)? "greater than" : (($a < $b)? "less than" : "equal to"),
		$b);
