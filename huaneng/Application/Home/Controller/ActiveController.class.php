<?php
namespace Home\Controller;
use Think\Controller;
class ActiveController extends Controller {
    public function active(){
        $activeModel = M('active');
        $nowtime=date('Y-m-d');
        // var_dump($nowtime);
	    $active = $activeModel->where("time>='%s'",$nowtime)->order('updatetime desc')->select();
	    $activeago = $activeModel->where("time<'%s'",$nowtime)->order('updatetime desc')->select();

	    // $active = $activeModel->order('updatetime desc')->where time>=to_date('yyyy/mm/dd', '2017/9/31')->select();
	    $this->assign('active',$active);
	    $this->assign('activeago',$activeago);
	    $this->display();
    }
}