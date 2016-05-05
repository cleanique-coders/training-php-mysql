<!DOCTYPE html>
<html>
<head>
	<title>Data Types in PHP</title>
</head>
<body>
	<?php 


		echo '<p>this is string</p>';
		echo '<p>this is integer: ' . 7 . '</p>';
		echo '<p>this is float: ' . 2.60 . '</p>';
		echo '<p>this is boolean: ' . true . '</p>';


		// nama variable yang baik adalah:
		// 1. pendek
		// 2. mudah difahami
		// 3. konsisten pernamaan dari segi 
		// 		- upper/lower case, 
		// 		- penggunaan underscore (_)
		$info = 'test';
		$_info = $info;

		// nama variable tidak sesuai
		$ini_maklumat_tajuk_aplikasi_saya = 'test';

		$info = 'test';
		echo $info . '<br>';
		$info = 'this is string';
		echo $info . '<br>';

		// array, senarai

		$senarai_pelajar = array('nasrul','fairuz','abbas');
		$senarai_subjek = [
					'Bahasa Melayu', 
					'Bahasa Inggeris'
				];
		$senarai_pengajar = [
			'ahmad' => [
				'subjek' => $senarai_subjek,
				'senarai_pelajar' => $senarai_pelajar
			],
			'albab'
		];
		dd($senarai_pengajar);
	?>
	<pre>
	<?php 
		// display all list
		print_r($senarai_pelajar);
	?>
	</pre>
	<pre>
	<?php 
		var_dump($senarai_pelajar);
	?>
	</pre>
	<hr>
	<p>
	<?php 

		// accessing array
		echo $senarai_pelajar[1];

	?>
	</p>
	<p>
	<pre>
	<?php 
		// accessing array
		print_r($senarai_pengajar['ahmad']['senarai_pelajar'][0]);
	?>
	</pre>
	<hr>
	<h3>Object</h3>
	<?php
		// Class, Blueprint
		class Student {
			var $name;
			var $matrix;

			public function getName() {
				return $this->name;
			}

			public function getMatrix() {
				return $this->matrix;
			}

			public function getInfo() {
				return [
					'name' => $this->getName(),
					'matrix' => $this->getMatrix()
				];
			}
		} 
	?>
	<pre>
	<?php 

		// Object
		$object = new Student();
		$object->name = "nasrul";
		$object->matrix = 122930;
		
		//echo $object->getName();

		print_r($object->getInfo());

		// set as null
		$object = null;
		//var_dump($object);
	?>
	</pre>
	<hr><hr><hr><hr><hr>
</body>
</html>
<?php 

function dd($value) {
	echo '<pre>'.print_r($value,1).'</pre>';
}

?>