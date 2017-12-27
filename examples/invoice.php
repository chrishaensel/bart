<?php

require_once '../Bart.php';

use chrishaensel;

$bart = new chrishaensel\Bart();

// Set up the data array
$data = [
	'name'       => "Aileen T.",
	'invoice_no' => rand(15000, 95000),
	'test'       => 'This is for you',
	'date'       => date( 'd.m.Y', strtotime( '+' . mt_rand( 0, 30 ) . ' days' ) ),
];
echo $bart->render( "../templates/invoice.tpl", $data );
