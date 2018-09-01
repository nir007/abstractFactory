<?php
namespace services;

use kernel\abstracts\Service;

class ParseXml extends Service {

	public function load($fileName) {
		if (file_exists($fileName)) {
			$xml = new \XMLReader();
			$xml->open($fileName);
			return $xml;
		}
		return null;
	}

	public function save($fileName, $content) {
		if (file_exists($fileName)) {
			$xml = new \XMLReader();
			$xml->open($fileName);
		}
		return null;
	}

	public function isValid($num) {
		return $num == 0;
	}
}