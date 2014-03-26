<?php

class Hello {
	public static $defaultMessage = "Hello, World!";

	public static function doSomething() {
		echo "No Problem." . PHP_EOL;
	}

	public function sayHello($to = null) {
		if (!empty($to)) {
			echo "Hello, $to!" . PHP_EOL;	
		}else {
			echo self::$defaultMessage . PHP_EOL;
		}
	}


}


$h1 = new Hello();

$h1->sayHello('Corey');
$h1->sayHello();

Hello::doSomething();