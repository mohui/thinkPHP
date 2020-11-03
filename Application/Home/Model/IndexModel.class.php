<?php
	namespace Home\Model;
	use Think\Model;
	class IndexModel extends Model {
		protected $tableName='shang';
		function selAll(){
			$aa=M($this->tableName);
			return $aa->select();
		}
	}
?>