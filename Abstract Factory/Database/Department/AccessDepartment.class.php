<?php
class AccessDepartment implements IDepartment {
	public function insert($department)
	{
		echo '在 Access 中给 Department 表增加一条记录<br>';
	}

	public function getDepartment($id)
	{
		echo '在 Access 中根据 ID 得到 Department 表一条记录<br>';
	}
}