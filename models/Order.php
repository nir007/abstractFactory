<?php

namespace models;

use kernel\abstracts\Model;

class Order extends Model {
	private $_orders = [
		[
			'userId' => 1,
			'date' => '2018-11-09',
			'price' => '2600'
		],
		[
			'userId' => 2,
			'date' => '2018-11-08',
			'price' => '3400'
		]
	];

	public function findAll() {
		return $this->_orders;
	}

	public function findOne($id) {
		return $this->_orders[$id];
	}

	public function updateRow($id, array $fields) {
		if ($order = $this->_orders[$id]) {
			foreach ($fields as $k => $v) {
				$order[$k] = $v;
			}
			return $order;
		}

		return null;
	}
}