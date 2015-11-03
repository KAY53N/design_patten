<?php
class FinanceDepartment extends Company {

	public function add($c)
	{
	}

	public function remove($c)
	{
	}

	public function display($depath)
	{
		echo '<hr>' . str_repeat('-', $depath) . $this->name;
	}

	public function lineOfDuty()
	{
		echo '<hr>' . $this->name . ' 公司财务收支管理';
	}
}