<?php
class AccessUser implements IUser {
	public function insert($user)
	{
		echo '在 Access 中给 User 表增加一条记录<br>';
	}

	public function getUser($id)
	{
		echo '在 Access 中根据 ID 得到 User 表一条记录<br>';
	}
}
