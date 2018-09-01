<?php
namespace services;

use kernel\abstracts\Service;

class ParseCsv extends Service {

	public function load($fileName) {
		if (file_exists($fileName)) {
			return file_get_contents($fileName);
		}
		return null;
	}

	public function save($fileName, $content) {
		if (file_exists($fileName)) {
			return file_put_contents($fileName, $content, FILE_APPEND);
		}
		return null;
	}

	public function isValid($num) {
		return $num > 0;
	}
}