<?php
class Resume implements Potrotype {
	private $name, $sex, $age, $timeArea, $company, $work;

	public function __construct($name)
	{
		$this->name = $name;
		$this->work = new WorkExperience();
	}

	public function setPersonalInfo($sex, $age)
	{
		$this->sex = $sex;
		$this->age = $age;
	}

	public function setWorkExperience($timeArea, $company)
	{
		$this->work->setWorkDate($timeArea);
		$this->work->setCompany($company);
	}

	public function display()
	{
		echo sprintf(
			'姓名：%s, 性别：%s, 年龄：%s;<br> 工作经历：%s, %s<hr>',
			$this->name,
			$this->sex,
			$this->age,
			$this->work->getWorkDate(),
			$this->work->getCompany()
		);
	}

	public function copy()
	{
		// 浅拷贝
		return $this;

		// 深拷贝
		//return clone $this;

		// 深拷贝
		/*
        $res = serialize($this);
        $res = unserialize($res);
        return $res;
		*/
	}
}


