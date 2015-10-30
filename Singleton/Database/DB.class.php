<?php
class DB {
	private static $_instance;
	private $db;

	private function __construct(){}

	static function getInstance()
	{
		if(is_null(self::$_instance))
		{
			self::$_instance = new self();
			self::$_instance->setDbName();
		}
		return self::$_instance;
	}

	public function setDbName()
	{
		$this->db = '连接数据库成功'.time();
	}

	public function dbConnect()
	{
		return $this->db;
	}

}