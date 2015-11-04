<?php
// 服务员
class Waiter {
	private $command;
	private $orders = array();
	private $muttonCount = 10;
	private $chickenWingCount = 10;

	// 增加订单
	public function setOrder($command, $num)
	{
		if($command->name == '羊肉串')
		{
			if($this->muttonCount >= $num)
			{
				$this->orders = array_merge($this->orders, array(spl_object_hash($command)=>$command));

				echo '增加订单：'.$command->name. ','.$num.'个     ### 时间：'.date('Y-m-d H:i:s', time()).'<hr>';
			}
			else if($this->muttonCount > 0 && $this->muttonCount < $num)
			{
				echo '服务员：羊肉串不足'.$num.'个，只有'.$this->chickenWingCount.'个了！<hr>';
			}
			else
			{
				echo '服务员：羊肉串没有了！请点别的烧烤！<hr>';
			}
		}

		if($command->name == '鸡翅')
		{
			if($this->chickenWingCount >= $num)
			{
				$this->orders = array_merge($this->orders, array(spl_object_hash($command)=>$command));
					
				echo '增加订单：'.$command->name. ','.$num.'个     ### 时间：'.date('Y-m-d H:i:s', time()).'<hr>';
			}
			else if($this->chickenWingCount > 0 && $this->chickenWingCount < $num)
			{
				echo '服务员：鸡翅不足'.$num.'个，只有'.$this->chickenWingCount.'个了！<hr>';
			}
			else
			{
				echo '服务员：鸡翅没有了！请点别的烧烤！<hr>';
			}
		}
	}

	// 取消订单
	public function cancelOrder($command)
	{
		unset($this->orders[spl_object_hash($command)]);

		echo '取消订单：'.$command->name.',  时间：'.date('Y-m-d H:i:s', time()).'<hr>';
	}

	// 通知执行
	public function notify()
	{
		foreach($this->orders as $val)
		{
			$val->excuteCommand();
		}
	}
}