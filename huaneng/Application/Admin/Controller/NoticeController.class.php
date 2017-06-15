<?php
namespace Admin\Controller;
use Think\Controller;
class NoticeController extends Controller {
   
   
    public function allNotice(){
    	if(I("get.search")==''){ 
        $dataModel = D("notice");
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
       $this->assign('notice',$data);
        $this->assign('page',$show);
        $this->display();
    }else{
        $notice=M("notice");
        $keyword=$_GET['search'];
        // var_dump($keyword);exit;
        $conition['id']=array('like','%'.$keyword.'%');
        $conition['title']=array('like','%'.$keyword.'%');
        $conition['file']=array('like','%'.$keyword.'%');
        $conition['updatetime']=array('like','%'.$keyword.'%');
        $conition['addtime']=array('like','%'.$keyword.'%');
        $conition['_logic'] = 'OR';
        $notice=$notice->where($conition)->select();
        $this->assign('notice',$notice);
        $this->display();
    }
        
    }
    public function addNotice(){
    	$this->display();
        
    }
    public function reviseNitoce(){
    	$this->display();
        
    }
    public function noticeadd(){   
        if(!IS_POST){
            exit("bad request!");
        }
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->exts     = array('jpg', 'gif', 'png', 'jpeg','doc','docx','pdf');// 设置附件上传类型
        $upload->rootPath = THINK_PATH; // 设置附件上传根目录
        $upload->savePath = '../Public/uploads/'; // 设置附件上传（子）目录
        $info = $upload->upload();
        if(!$info) {
            $this->error($upload->getError()); // 上传错误提示错误信息
        }else{
            $noticeModel = D("notice"); //创建模型
            $data = $noticeModel->create(); //组织数据
            if(!$data){
                exit($noticeModel->getError());
            }else{
                //设置img字段属性(目录+名字)


                $data['file']=$info['fiie']['savepath'].$info['file']['savename'];
                $data['size']=sprintf("%.2f",$info['fiie']['savepath'].$info['file']['size']/1024);
                $data['type']=$info['fiie']['savepath'].$info['file']['ext'];
 
                 
                $data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间
                $data['updatetime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                $data['title'] = I('post.title');
             
                if($noticeModel->add($data)){
                    $this->redirect("Admin/Notice/allnotice");
                }else{
                    $this->error("插入失败！");
                }
            }
        }
    }
    public function noticedel(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("notice")->delete($value);
            }
            $this->redirect("Admin/Notice/allNotice");
        }else{
            if(M("notice")->delete($id)){
                $this->redirect("Admin/Notice/allNotice");
            }else{
                $this->error("删除失败！");
            }
        }
    }
    public function noticeedit($id){
        if(isset($_POST['submit'])){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize  = 3145728 ;// 设置附件上传大小
            $upload->exts     = array('jpg', 'gif', 'png', 'jpeg','doc','docx','pdf');// 设置附件上传类型
            $upload->rootPath = THINK_PATH; // 设置附件上传根目录
            $upload->savePath = '../Public/uploads/'; // 设置附件上传（子）目录
            $info = $upload->upload();
            if(!$info) {
                $this->error($upload->getError()); // 上传错误提示错误信息
            }else{
                $noticeModel = D("notice"); //创建模型
                $data = $noticeModel->create(); //组织数据
                if(!$data){
                    exit($noticeModel->getError());
                }else{
                    //设置img字段属性(目录+名字)
                    $data['file']=$info['fiie']['savepath'].$info['file']['savename'];
                    $data['size']=sprintf("%.2f",$info['fiie']['savepath'].$info['file']['size']/1024);
                    $data['type']=$info['fiie']['savepath'].$info['file']['ext'];
 
	                $data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间
	                $data['title'] = I('post.title');
                    //var_dump($data);exit;
                    
                    if($noticeModel->where("id='%d'",$id)->save($data)){
                        $this->redirect("Admin/Notice/allnotice");
                    }else{
                        $this->error("编辑失败！");
                    }
                }
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : ''; //获得修改用户的ID
            $noticeModel = D("notice");
            $notice = $noticeModel->where("id='%d'",$id)->find(); //从数据库找到需要修改的用户信息
            $this->assign("notice",$notice);
            $this->display();
        }
    }

}