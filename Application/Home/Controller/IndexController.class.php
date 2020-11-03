<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$se=D('Index');
		$re=$se->selAll();
		//print_r($re);die;
		$this->assign('re',$re);
        $this->display();
    }
}
?>