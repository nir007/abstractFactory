<?php

namespace kernel\factories;

class ProduceFactory {

	public static function get($factoryClass) {
		$params = explode('_', $factoryClass);
		if (count($params) == 2) {
			switch (mb_strtolower($params[0])) {
				case 'model':
					return (new ModelFactory())->get($params[1]);
				case 'service':
					return (new ServiceFactory())->get($params[1]);
			}
		}
		return null;
	}

}