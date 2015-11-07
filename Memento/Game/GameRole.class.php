<?php
class GameRole {
	private $vit, $atk, $def = 0;

	// 保存角色状态
	public function saveState()
	{
		return new RoleStateMemento($this->vit, $this->atk, $this->def);
	}

	// 恢复角色状态
	public function recoveryState($memento)
	{
		$this->vit = $memento->vitality;
		$this->atk = $memento->attack;
		$this->def = $memento->defense;
	}

	// 状态显示
	public function stateDisplay()
	{
		echo '角色当前状态：'.PHP_EOL;
		echo '体力：'.$this->vit.PHP_EOL;
		echo '攻击力：'.$this->atk.PHP_EOL;
		echo '防御力：'.$this->def.PHP_EOL;
		echo PHP_EOL;
	}

	// 获得初始状态
	public function getInitState()
	{
		$this->vit = 100;
		$this->atk = 100;
		$this->def = 100;
	}

	// 战斗
	public function fight()
	{
		$this->vit = 0;
		$this->atk = 0;
		$this->def = 0;
	}
}

