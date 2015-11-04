<?php
// 总经理
class GeneralManager extends Manager {
	public function requestApplications($request)
	{
		if($request->getRequestType() == '请假')
		{
			echo sprintf(
					'【%s】 : 【%s】 数量 %s 被批准<hr>',
					$this->name,
					$request->getRequestContent(),
					$request->getNumber()
			);
		}
		else if($request->getRequestType() == '加薪' && $request->getNumber() <= 500)
		{
			echo sprintf(
					'【%s】 : 【%s】 数量 %s 被批准<hr>',
					$this->name,
					$request->getRequestContent(),
					$request->getNumber()
			);
		}
		else if($request->getRequestType() == '加薪' && $request->getNumber() > 500)
		{
			echo sprintf(
					'【%s】 : 【%s】 数量 %s 再说吧<hr>',
					$this->name,
					$request->getRequestContent(),
					$request->getNumber()
			);
		}
	}
}