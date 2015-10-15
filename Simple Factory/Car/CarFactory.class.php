<?php
class CarFactory {
	private function __construct(){}

	static function BuyCar($carName, $type)
	{
		$result = null;
		switch($carName)
		{
			case 'Audi':
				$result = array(
				'TypeList' => AudiCar::getTypeList(),
				'Current'  => AudiCar::create($type)
				);
				break;

			case 'Benz':
				//xxxxxx
				break;
		}
		return $result;
	}
}