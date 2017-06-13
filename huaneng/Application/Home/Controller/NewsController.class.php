<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function mediannews(){
        $this->display();
    }
    public function companynews(){
    	// $newsModel = M('companynews');
    	// $news = $newsModel->order('updatetime desc')->select();
    	// $this->assign('news',$news);
         $this->display();
    }
    public function content(){
    	$id = I('id');
    	$newsModel = M('companynews');
		$content = $newsModel->where("id='%s'",$id)->select();
		$this->assign('content',$content);
        $this->display();
    }
}