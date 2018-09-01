<?php

namespace kernel\factories;

use kernel\factories\abstracts\Factory;


class ModelFactory extends Factory {

	public function get($name) {
		$name = '\models\\' . $name;
		return new $name();
	}
}