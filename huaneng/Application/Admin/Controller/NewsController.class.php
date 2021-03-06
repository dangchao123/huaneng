<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {

    
    public function allCompanynews(){
        if(I("get.search")==''){ 
        $dataModel = D("companynews");
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
       $this->assign('news',$data);
        $this->assign('page',$show);
        $this->display();
    }else{
        $companynews=M("companynews");
        $keyword=$_GET['search'];
        // var_dump($keyword);exit;
        $conition['id']=array('like','%'.$keyword.'%');
        $conition['title']=array('like','%'.$keyword.'%');
        $conition['summary']=array('like','%'.$keyword.'%');
        $conition['img']=array('like','%'.$keyword.'%');
        $conition['updatetime']=array('like','%'.$keyword.'%');
        $conition['addtime']=array('like','%'.$keyword.'%');
        $conition['_logic'] = 'OR';
        $companynews=$companynews->where($conition)->select();
        $this->assign('news',$companynews);
        $this->display();
    }

    }
   
   
    public function reviseNews(){
    	$this->display();
        
    }
    public function addCompanynews(){
        $this->display();
    }
    //添加新闻
    public function doAdd1(){   
        if(!IS_POST){
            exit("bad request!");
        }
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->exts     = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = THINK_PATH; // 设置附件上传根目录
        $upload->savePath = '../Public/uploads/'; // 设置附件上传（子）目录
        $info = $upload->upload();
        if(!$info) {
            $this->error($upload->getError()); // 上传错误提示错误信息
        }else{
            $companynewsModel = D("companynews"); //创建模型
            $data = $companynewsModel->create(); //组织数据
            if(!$data){
                exit($companynewsModel->getError());
            }else{
                //设置img字段属性(目录+名字)
                $data['img']=$info['img']['savepath'].$info['img']['savename'];
                $data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间
                $data['updatetime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                $data['title'] = I('post.title');
                $data['summary'] = I('post.summary');
                $data['content'] = I('post.content');
                if($companynewsModel->add($data)){
                    $this->redirect("Admin/News/allCompanynews");
                }else{
                    $this->error("插入失败！");
                }
            }
        }
    }
   
     public function del1(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("companynews")->delete($value);
            }
            $this->redirect("Admin/News/allCompanynews");
        }else{
            if(M("companynews")->delete($id)){
                $this->redirect("Admin/News/allCompanynews");
            }else{
                $this->error("删除失败！");
            }
        }
    }
     public function edit($id){
        if(isset($_POST['submit'])){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize  = 3145728 ;// 设置附件上传大小
            $upload->exts     = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = THINK_PATH; // 设置附件上传根目录
            $upload->savePath = '../Public/uploads/'; // 设置附件上传（子）目录
            $info = $upload->upload();
            if(!$info) {
                $this->error($upload->getError()); // 上传错误提示错误信息
            }else{
                $companynewsModel = D("companynews"); //创建模型
                $data = $companynewsModel->create(); //组织数据
                if(!$data){
                    exit($companynewsModel->getError());
                }else{
                    //设置img字段属性(目录+名字)
                    $data['img']=$info['img']['savepath'].$info['img']['savename'];
             
                    $data['updatetime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                    $data['title'] = I('post.title');
                    $data['summary'] = I('post.summary');
                    $data['content'] = I('post.content');
                    //var_dump($data);exit;
                    
                    if($companynewsModel->where("id='%d'",$id)->save($data)){
                        $this->redirect("Admin/News/allCompanynews");
                    }else{
                        $this->error("编辑失败！");
                    }
                }
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : ''; //获得修改用户的ID
            $companynewsModel = D("companynews");
            $news = $companynewsModel->where("id='%d'",$id)->find(); //从数据库找到需要修改的用户信息
            $this->assign("news",$news);
            $this->display();
        }
    }




}