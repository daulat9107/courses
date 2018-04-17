<?php
return [
'driver'=>[
	'mysql'=>[
		'host'=>getenv('HOST'),
		'username' =>getenv('USERNAME'),
		'password' =>getenv('PASSWORD'),
		'dbname' =>getenv('DBNAME'),
		]
]
];


