<?php
class AudiCar extends Car {

	private function __construct(){}

	static function create($type)
	{
		$returnType = '';
		switch($type)
		{
			case 'Innervation':
				$returnType = self::getInnervationConfig();
				break;

			case 'Comfort':
				$returnType = self::getComFortConfig();
				break;

			case 'Stantard':
				$returnType = self::getStantardConfig();
				break;

			default:
				$returnType = '没有找到你要的类型';
				break;
		}
		return $returnType;
	}

	static function getTypeList()
	{
		return array('Innervation', 'Comfort', 'Stantard');
	}

	static function getInnervationConfig()
	{
		return array(
				'名称：Audi 2015款 40 TFSI 动感型',
				'车身结构：SUV',
				'变速箱：8挡手自一体',
				'驱动方式：前置四驱'
		);
	}

	static function getComFortConfig()
	{
		return array(
				'名称：Audi 2015款 40 TFSI 舒适型',
				'车身结构：SUV',
				'变速箱：8挡手自一体',
				'驱动方式：前置四驱'
		);
	}

	static function getStantardConfig()
	{
		return array(
				'名称：Audi 2015款 35 TFSI 标准型',
				'车身结构：SUV',
				'变速箱：6挡手自一体',
				'驱动方式：前置四驱'
		);
	}
}