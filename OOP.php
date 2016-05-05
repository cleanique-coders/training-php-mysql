<?php 

// our car's blueprint / class
class Car {

	// property of the car
	public $color = 'blue';

	// a hon method
	public function hon() {
		return 'pon pon!';
	}

}

// extending existing class
class BMW extends Car {

	public function drift() {
		return 'drifting.....';
	}

}

$bmw = new BMW(); // the word `new` will create the object

echo $bmw->hon() . '<br>';
echo $bmw->drift();