<?php
class WorkExperience {
	private $workDate, $company;
	
	public function setWorkDate($date)
	{
		$this->workDate = $date;
	}

	public function getWorkDate()
	{
		return $this->workDate;
	}

	public function setCompany($company)
	{
		$this->company = $company;
	}

	public function getCompany()
	{
		return $this->company;
	}
}

