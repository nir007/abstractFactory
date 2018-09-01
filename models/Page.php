<?php

namespace models;

use kernel\abstracts\Model;

class Page extends Model {

	private $_pages = [
		'index' => [
			'title' => 'Главная',
			'description' => 'Главная страница'
		],
		'about' => [
			'title' => 'О проекте',
			'description' => 'О проекте'
		]
	];

	public function findAll() {
		return $this->_pages;
	}

	public function findOne($pageName) {
		return $this->_pages[$pageName];
	}

	public function updateRow($pageName, array $fields) {
		if ($page = $this->_pages[$pageName]) {
			foreach ($fields as $k => $v) {
				$page[$k] = $v;
			}
			return $page;
		}

		return null;
	}
}