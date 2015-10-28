<?php
class ExpressionCharater extends Expression {
	public function interPreter($str)
	{
		return strtoupper($str);
	}
}