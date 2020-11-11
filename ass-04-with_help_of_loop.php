<?php
/*ID: 612110237
Name: Guineng Cai
 */
	/**

	 * This solution uses looping that we would learn

	 * in chapter 2.

	 */

	$max = -INF; // INF is predefined constant and stands for the infinite.

	for($i = 0; $i < 10; $i++) {

		printf("Input number %2d: ", $i + 1);

		fscanf(STDIN, "%f", $a);

		if($a > $max) $max = $a;

	}



	printf("The maximum number is %f\n", $max);

