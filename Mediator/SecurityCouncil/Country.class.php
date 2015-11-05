<?php
// 国家
abstract class Country {
	protected $mediator;

	public function __construct($mediator)
	{
		if(isset($mediator))
		{
			$this->mediator = $mediator;
		}
	}

	abstract function declarex($message);

	abstract function getMessage($message);
}