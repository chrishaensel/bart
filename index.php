<?php

require_once 'Bart.php';

use chrishaensel;

$names = [
	'Christian H.',
	'Aileen T.',
	'Kai N.',
	'Jonas B.',
	'Claudia L.',
	'Petra N.',
	'Sophie W.',
];

$bart = new chrishaensel\Bart();

for ( $i = 1; $i <= 1000; $i ++ ):
	$data = [
		'name'       => $names[ rand( 0, count( $names ) - 1 ) ],
		'invoice_no' => $i . ' - 311077',
		'test'       => 'This is for you',
		'date'       => date( 'd.m.Y', strtotime( '+' . mt_rand( 0, 30 ) . ' days' ) ),
	];
	echo $bart->render( "templates/invoice.tpl", $data );
endfor;