<?php
function fib( $n ) {
	if ( $n == 0 || $n == 1 ) {
		return $n;
	} else {
		return fib( $n - 1 ) + fib( $n - 2 );
	}
}

function ComputeFib( $n ) {
	$i = 0;
	$a = 1; $b = 0;
	while ( $i < $n ) {
		assert( 0 <= $i && $i <= $n );
		if ( $i == 0 ) assert( $a == 1 );
		if ( $i > 0 ) assert( $a == fib( $i - 1 ) );
		assert( $b == fib( $i ) );

		list( $a, $b ) = array( $b, $a + $b );
		$i = $i + 1;

		assert( 0 <= $i && $i <= $n );
		if ( $i > 0 ) assert( $a == fib( $i - 1 ) );
		if ( $i > 0 ) assert( $a == fib( $i - 1 ) );
		assert( $b == fib( $i ) );
	}

	assert( $b == fib( $n ) );

	return $b;
}

// Test a few of them
for ( $i = 0; $i < 10; $i++ ) {
	printf( "%d\n", ComputeFib( $i ) );
}
