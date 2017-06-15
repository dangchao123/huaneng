<?php
namespace Admin\Controller;
use Think\Controller;
class ConsultController extends Controller {
        
   public function consult(){
        if(I("get.search")==''){ 
        $dataModel = D("consult");
        // var_dump($dataModel);exit;
        $count = $dataModel->count();
        $pagecount = 5;
        $page = new \Think\Page($count , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        $data = $dataModel->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        // var_dump($data);exit;
       $this->assign('consult',$data);
        $this->assign('page',$show);
        $this->display();
    }else{
        $consult=M("consult");
        $keyword=$_GET['search'];
        // var_dump($keyword);exit;
        $conition['id']=array('like','%'.$keyword.'%');
        $conition['username']=array('like','%'.$keyword.'%');
        $conition['content']=array('like','%'.$keyword.'%');
        $conition['company']=array('like','%'.$keyword.'%');
        $conition['cate']=array('like','%'.$keyword.'%');
        $conition['email']=array('like','%'.$keyword.'%');
        $conition['phone']=array('like','%'.$keyword.'%');
        $conition['addtime']=array('like','%'.$keyword.'%');
        $conition['_logic'] = 'OR';
        $consult=$consult->where($conition)->select();
        $this->assign('consult',$consult);
        $this->display();
    }
}
 public function del(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("consult")->delete($value);
            }
            $this->redirect("Admin/Consult/consult");
        }else{
            if(M("consult")->delete($id)){
                $this->redirect("Admin/Consult/consult");
            }else{
                $this->error("删除失败！");
            }
        }
    }
   

}