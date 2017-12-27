BART
====

Bart is a _very_ simple PHP templating _"engine"_. Actually, all it does is simply getting the source of a template file and replacing the placeholder with the data provided in the <code>data</code> array.

Usage
----
See below example to check out how it works.

````php
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
````

Licence
---
You may use, alter and redistribute this software as long as you keep it free. 