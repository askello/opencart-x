<?php
namespace db\QueryBuilder\Operations;

trait Update {
	
	public function set() {
		$sql = "SELECT COUNT(*) AS total FROM `".DB_PREFIX.$this->table."`";
		$result = $this->execute($sql);
		return $result->row['total'];
	}
	
}