<?php
// 联合国安全理事会
class UnitedNationsSecurityCouncil extends UnitedNations {
	private $colleague1, $colleague2;

	public function setColleague1($val)
	{
		$this->colleague1 = $val;
	}

	public function setColleague2($val)
	{
		$this->colleague2 = $val;
	}

	// 声明
	public function declarex($message, $colleague)
	{
		if($colleague == get_class($this->colleague1))
		{
			$this->colleague2->getMessage($message);
		}
		else
		{
			$this->colleague1->getMessage($message);
		}
	}
}