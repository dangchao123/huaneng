<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function mediannews(){
         $newsModel = M('mediannews');
         $count = $newsModel->count();
         $pagecount = 6;
         $page = new \Think\Page($count , $pagecount);
         $page->parameter = $row; //此处的row是数组，为了传递查询条件
         $page->setConfig('first','首页');
         $page->setConfig('prev','上一页');
         $page->setConfig('next','下一页');
         $page->setConfig('last','尾页');
         $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%  ');
         $show = $page->show();
         $news = $newsModel->order('updatetime desc')->limit($page->firstRow.','.$page->listRows)->select();
         $this->assign('news',$news);
         $this->assign('page',$show);
         $this->display();
    }
    public function companynews(){
    	 $newsModel = M('companynews');
         $count = $newsModel->count();
         $pagecount = 6;
         $page = new \Think\Page($count , $pagecount);
         $page->parameter = $row; //此处的row是数组，为了传递查询条件
         $page->setConfig('first','首页');
         $page->setConfig('prev','上一页');
         $page->setConfig('next','下一页');
         $page->setConfig('last','尾页');
         $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%  ');
         $show = $page->show();
         $news = $newsModel->order('updatetime desc')->limit($page->firstRow.','.$page->listRows)->select();
    	 $this->assign('news',$news);
         $this->assign('page',$show);
         $this->display();
    }
    public function content(){
    	$id = I('id');
    	$newsModel = M('companynews');
		$content = $newsModel->where("id='%s'",$id)->select();
        $front=$newsModel->where("id<".$id)->order('id desc')->limit('1')->find();
        $this->assign('front',$front);
        $after=$newsModel->where("id>".$id)->order('id asc')->limit('1')->find();
        $this->assign('after',$after);
		$this->assign('content',$content);
        $this->display();
    }
    public function content1(){
        $id = I('id');
        $newsModel = M('mediannews');
        $content = $newsModel->where("id='%s'",$id)->select();
        $front=$newsModel->where("id<".$id)->order('id desc')->limit('1')->find();
        $this->assign('front',$front);
        $after=$newsModel->where("id>".$id)->order('id asc')->limit('1')->find();
        $this->assign('after',$after);
        $this->assign('content',$content);
        $this->display();
    }
}