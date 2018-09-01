<?php

namespace kernel\factories;

use kernel\factories\abstracts\Factory;

class ServiceFactory extends Factory {

	public function get($name) {
		$name = '\services\\' . $name;
		return new $name();
	}
}