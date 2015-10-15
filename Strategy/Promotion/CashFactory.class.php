<?php
class CashFactory {
	public static function createCashAccept($type)
	{
		$result = null;
		switch($type)
		{
			case '正常收费':
				$result = new CashNormal();
				break;

			case '满300减100':
				$result = new CashReturn(300, 100);
				break;

			case '打8折':
				$result = new CashRebate(0.8);
				break;
		}
		return $result;
	}
}