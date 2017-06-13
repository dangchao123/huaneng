<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function contact(){
        $this->display();
    }
    public function culture(){
        $this->display();
    }
    public function develop(){
        $this->display();
    }
    public function notice(){

        $noticeModel = D("notice");
        // var_dump($dataModel);exit;
        $count = $noticeModel->count();
        $pagecount = 6;
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%  ');
        $show = $page->show();
        $data = $noticeModel->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        // var_dump($data);exit;
       $this->assign('notice',$data);
        $this->assign('page',$show);
        $this->display();
       
    }
    public function services(){
        $this->display();
    }
    public function summary(){
        $this->display();
    }
}
   
