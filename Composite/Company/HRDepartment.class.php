<?php
class HRDepartment extends Company {

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
		echo '<hr>' . $this->name . ' 员工招聘培训管理';
	}
}