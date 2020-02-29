<?php

function functionName($angka) {
	
	$primes = array();
	$is_prime_no = false;
	for ($i = 2; $i<$angka; $i++) {
     $is_prime_no = true; 
        for ($j = 2; $j<=($i/2); $j++) {
                if ($i%$j==0) {
                          $is_prime_no = false;
                                  break;
                                }
                   }
        if ($is_prime_no) {
               array_push($primes,$i);
                  }
        if (count($primes)==$angka) {
               break;
                  }
}
echo "<pre>";
print_r ($primes);
	echo "</pre>";
	echo "SUM:";
	echo array_sum ($primes)."\n";		

}
functionName(100);