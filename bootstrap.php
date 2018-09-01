<?php

spl_autoload_register(
	function($className) {
		$parts = explode('\\', $className);
		$class = end($parts);
		switch ($class) {
			case 'ProduceFactory':
			case 'ModelFactory':
			case 'ServiceFactory':
				include 'kernel/factories/' . $class. '.php';
				break;
			case 'Factory':
				include 'kernel/factories/abstracts/' . $class . '.php';
				break;
			case 'FactoryInterface':
			case 'ModelInterface':
			case 'ServiceInterface':
				include 'contracts/' . $class . '.php';
				break;
			case 'Model':
			case 'Service':
				include 'kernel/abstracts/' . $class . '.php';
				break;
			default:
				if (file_exists('models/' . $class . '.php')) {
					include 'models/' . $class . '.php';
				} else {
					include 'services/' . $class . '.php';
				}
		}
	}
);