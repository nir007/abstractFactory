<?php

namespace contracts;

interface ServiceInterface {
	function load($fileName);
	function save($fileName, $content);
	function isValid($num);
}