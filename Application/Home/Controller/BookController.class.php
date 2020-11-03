<?php
namespace Home\Controller;
use Think\Controller;
class BookController extends Controller {
    public function book(){
		$se=D('Book');
		$re=$se->selAll();
		$this->assign('re',$re);
        $this->display();
    }
	function addData(){
		$file=$_FILES['b_cover'];
		//print_r($file);die;
		    $upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize=1024*1024*2 ;// 设置附件上传大小    
			$upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
			$upload->rootPath="./";
			$upload->savePath='./Public/Uploads/'; // 设置附件上传目录
			// 上传文件
			$info=$upload->upload();
			if(!$info) {// 上传错误提示错误信息        
				$this->error($upload->getError());
				}
			$filename=$info['b_cover']['savepath'].$info['b_cover']['savename'];
			$b_cover=substr($filename,9);
			$data=I('post.');
		$data['b_cover']=$b_cover;
		//print_r($data);
		$se=D('Book');
		$re=$se->addAll($data);
		if($re){
			$this->success('新增成功', U('Book/sel_list'));
		} else {
			$this->error('新增失败');
			}
	}
	function sel_list(){
		$name=$_GET['search'];
		//echo $name;
		$se=D('Book');
		$re=$se->seleAll($name);
		//print_r($re);die;
		$this->assign('list',$re['list']);
		$this->assign('page',$re['page']);
		$this->display('list');
	}
	function delone(){
		$id=I('get.id');
		//echo $id;die;
		$se=D('Book');
		$re=$se->delAll($id);
		if($re){
			$this->success('删除成功', U('Book/sel_list'));
		} else {
			$this->error('删除失败');
			}
	}
	function del(){
		$id=$_GET['id'];
		//echo $id;
		$se=D('Book');
		$re=$se->dele($id);
		if($re){
			$this->success('删除成功', U('Book/sel_list'));
		}else{
			$this->error('删除失败');
			}
	}
}
?>