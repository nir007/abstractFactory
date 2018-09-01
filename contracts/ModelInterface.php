<?php

namespace contracts;

interface ModelInterface {
	function findAll();
	function findOne($id);
	function updateRow($id, array $fields);
}