BART
====

Bart is a _very_ simple PHP templating _"engine"_. Actually, all it does is simply getting the source of a template file and replacing the placeholder with the data provided in the <code>data</code> array.

Usage
----
See below example to check out how it works.

````php
<?php

require_once '../Bart.php';

use chrishaensel;

$bart = new chrishaensel\Bart();


$data = [
	'name'       => "Aileen T.",
	'invoice_no' => rand(15000, 95000),
	'test'       => 'This is for you',
	'date'       => date( 'd.m.Y', strtotime( '+' . mt_rand( 0, 30 ) . ' days' ) ),
];
echo $bart->render( "../templates/invoice.tpl", $data );
````

The template file
Use {{placeholders}} - they will be replaced by the data-array values.
Array key `blah` will replace the placeholder `{{blah}}` with its value.

```
<div class="single" style="float:left; display: inline; margin: 0 15px 15px 0; border:1px solid #ccc; padding:10px;">
    <strong>Name: {{name}}</strong><br>
    Invoice No.: {{invoice_no}}<br>
    {{date}}
</div>

```

Licence
---
You may use, alter and redistribute this software as long as you keep it free. 