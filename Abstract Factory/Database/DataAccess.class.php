<?php
class DataAccess {
	private static $db = 'SqlServer';
	//private static $db = 'access';

	static function createUser()
	{
		$class = new ReflectionClass(self::$db . 'User');
		return $class->newInstance();
	}

	static function createDepartment()
	{
		$class = new ReflectionClass(self::$db . 'Department');
		return $class->newInstance();
	}
}