<?php
// 看NBA的同事
class NBAObserver extends Observer {
	public function update()
	{
		echo sprintf(
			'【%s】 【%s】 关闭NBA直播，继续工作！<hr>', 
			$this->sub->getSubjectStatus(), 
			$this->name
		);
	}
}

