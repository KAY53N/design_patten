<?php
class OperationMul extends Operation {
	public function getResult()
	{
		return sprintf("%1\$.2f", $this->numberA * $this->numberB);
	}
}