<?php
	namespace Home\Model;
	use Think\Model;
	class BookModel extends Model {
		protected $tableName='book';
		function selAll(){
			$aa=M('cate');
			return $aa->select();
		}
		function addAll($data){
			$aa=M($this->tableName);
			return $aa->add($data);
		}
		function seleAll($name){
			$User = M($this->tableName);
			isset($_GET['p'])?$p=$_GET['p']:$p=1;
			$list = $User->join('cate ON cate.c_id = book.c_id')->where("b_name like '%$name%'")->page($p.',5')->select();
			
			$count      = $User->join('cate ON cate.c_id = book.c_id')->where("b_name like '%$name%'")->count();// 查询满足要求的总记录数
			$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			$data['list']=$list;
			$data['page']=$show;
			//print_r($data);die;
			return $data;
		}
		function delAll($id){
			$aa=M($this->tableName);
			return $aa->delete($id);
		}
		function dele($id){
			//print_r($id);die;
			$aa=M($this->tableName);
			return $aa->where("id in ($id)")->delete();

		}
	}
?>