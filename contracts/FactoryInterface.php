<?php

namespace contracts;

interface FactoryInterface {
	function get($className);
}