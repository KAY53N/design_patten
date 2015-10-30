<?php
class SqlServerDepartment implements IDepartment {
	public function insert($department)
	{
		echo '在 SQL Server 中给 Department 表增加一条记录<br>';
	}

	public function getDepartment($id)
	{
		echo '在 SQL Server 中根据 ID 得到 Department 表一条记录<br>';
	}
}
