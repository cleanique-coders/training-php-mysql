<!DOCTYPE html>
<html>
<head>
	<title><?php echo 'title'; ?></title>
</head>
<body>
<?php
	/* 
		block comment 
		test long description
	*/

	// line comment

	// to print out text
	echo "<p>php start up</p>";

	print "<p>php print</p>"; 

?>      


<?php
	$NAME = "TESR";
	$name = "test2";
	$_name = "some string"; // data type: string
	$first_name = 'gfhjgk';
	$firstName = 'teseses';


	$null_type = null; // data type: null
	$boolean = true; // data type: boolean
	$salah = false; // data type: boolean
	$floating_number = 2.40; // data type: float
	$coordinate_latitude = 1.322348023; // data type: float
	$integer = 1; // data type: integer
	$numbers_of_cars = 10; // data type: integer

	// $senarai_peserta = array();
	$senarai_peserta = [
		1 => 1,
		"something" => 2,
		3,
		"string",
		true
	];

	$senarai_peserta = [
		[
			'name' => 'Nasrul',
			'email' => 'nasrulhazim.m@gmail.com'
		],
		[
			'name' => 'Nasrul',
			'email' => 'nasrulhazim.m@gmail.com'
		],
		[
			'name' => 'Nasrul',
			'email' => 'nasrulhazim.m@gmail.com'
		]
	];

?>

<pre>
	
	<?php print_r($senarai_peserta); ?>

</pre>


<ul>
<?php
	foreach ($senarai_peserta as $key => $value) {
		echo '<li>'.$value['name'].' ('.$value['email'].')</li>';	
	}

?>
</ul>

<hr>

<p><?= $NAME; ?></p>
<p><?= $name; ?></p>
<p><?= $_name; ?></p>
<p><?= $first_name; ?></p>
<p><?= $firstName; ?></p>

















</body>
</html>