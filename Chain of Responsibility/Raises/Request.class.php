<?php
class Request {
	private $requestType, $requestContent, $number;

	public function setRequestType($value)
	{
		$this->requestType = $value;
	}

	public function getRequestType()
	{
		return $this->requestType;
	}

	public function setRequestContent($value)
	{
		$this->requestContent = $value;
	}

	public function getRequestContent()
	{
		return $this->requestContent;
	}

	public function setNumber($value)
	{
		$this->number = $value;
	}

	public function getNumber()
	{
		return $this->number;
	}
}