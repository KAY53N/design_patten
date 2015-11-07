<?php
// 角色状态存储箱
class RoleStateMemento {
	public $vitality, $attack, $defense;
	public function __construct($vit, $atk, $def)
	{
		$this->vitality = $vit;
		$this->attack = $atk;
		$this->defense = $def;
	}
}

