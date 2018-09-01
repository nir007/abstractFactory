<?php
namespace services;

use kernel\abstracts\Service;

class Mail extends Service {

	public function send() {
		return sprintf('%d писем было отправлено', 10);
	}

	public function load($url) {
		return sprintf('%s загружен', $url);
	}

	public function save($letterId, $text) {
		return sprintf('%d сохранен', $letterId);
	}

	public function isValid($num) {
		return (rand(0, 100) * $num) % 2;
	}
}