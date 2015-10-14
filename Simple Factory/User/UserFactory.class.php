<?php
abstract class UserFactory {
	static function createUser($_grade, $_name)
	{
		switch($_grade)
		{
			case 'Normal User':
				return new NomalUser($_name);
				break;

			case 'Vip User':
				return new VipUser($_name);
				break;
					
			case 'Inner User':
				return new InnerUser($_name);
				break;
					
			default:
				echo 'some exception';
				return null;
				break;
		}
	}
}
