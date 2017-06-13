<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $newsModel = M('companynews');
    	$news = $newsModel->order('updatetime desc')->limit(2)->select();
    	$this->assign('news',$news);
        
   
	    $activeModel = M('active');
	    $active = $activeModel->order('updatetime desc')->limit(2)->select();
	    $this->assign('active',$active);
	    $this->display();
	    }
}