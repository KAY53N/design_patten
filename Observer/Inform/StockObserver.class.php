<?php
// 看股票的同事
class StockObserver extends Observer {
	public function update()
	{
		echo sprintf(
			'【%s】 【%s】 关闭股票行情，继续工作！<hr>', 
			$this->sub->getSubjectStatus(), 
			$this->name
		);
	}
}

