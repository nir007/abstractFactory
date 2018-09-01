<?php

namespace models;

use kernel\abstracts\Model;

class User extends Model {
	private $_users = [
		'Roman' => [
			'id' => 1,
			'name' => 'Петрин Роман',
			'age' => '26'
		],
		'Maxim' => [
			'id' => 2,
			'name' => 'Максим Юрьевич',
			'age' => '22'
		]
	];

	public function findAll() {
		return $this->_users;
	}

	public function findOne($userName) {
		return $this->_users[$userName];
	}

	public function updateRow($userName, array $fields) {
		if ($user = $this->_users[$userName]) {
			foreach ($fields as $k => $v) {
				$page[$k] = $v;
			}
			return $user;
		}

		return null;
	}
}