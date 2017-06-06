<?php
namespace Admin\Controller;
use Think\Controller;
class ActiveController extends Controller {
    public function addActive(){
    	
        $this->display();

        
    }
    public function allActive(){
    	$activeModel = M("active");
        $num = $activeModel->count();
        $pagecount = 3; 
        $page = new \Think\Page($num , $pagecount);
        $page->parameter = $row; //此处的row是数组，为了传递查询条件
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','尾页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();

         $actives= $activeModel->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        //var_dump($news);exit;
         $this->assign('actives',$actives);
        $this->assign('page',$show);

    	$this->display();
        
    }
    public function reviseActive(){
    	$this->display();
        
    }
     public function actadd(){   
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
            $activeModel = D("active"); //创建模型
            $data = $activeModel->create(); //组织数据
            if(!$data){
                exit($activeModel->getError());
            }else{
                //设置img字段属性(目录+名字)
                $data['img']=$info['img']['savepath'].$info['img']['savename'];
                $data['time'] = I('post.time');
                $data['title'] = I('post.title');
                $data['summary'] = I('post.summary');
                $data['address'] = I('post.address');
                $data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间
                $data['updatetime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                if($activeModel->add($data)){
                    $this->success("添加成功！",U("Admin/Active/allActive"));
                }else{
                    $this->error("插入失败！");
                }
            }
        }
    }
     public function actdel(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("active")->delete($value);
            }
            $this->success("批量删除成功！",U("Admin/Active/allActive"));
        }else{
            if(M("active")->delete($id)){
                $this->success("删除成功！",U("Admin/Active/allActive"));
            }else{
                $this->error("删除失败！");
            }
        }
    }
    public function edit3($id){
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
                $activeModel = D("active"); //创建模型
                $data = $activeModel->create(); //组织数据
                if(!$data){
                    exit($activeModel->getError());
                }else{
                    //设置img字段属性(目录+名字)
                   $data['img']=$info['img']['savepath'].$info['img']['savename'];
                   $data['time'] = I('post.time');
                   $data['title'] = I('post.title');
                   $data['summary'] = I('post.summary');
                   $data['address'] = I('post.address');
                    $data['updatetime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                    //var_dump($data);exit;
                    
                    if($activeModel->where("id='%d'",$id)->save($data)){
                        $this->success("编辑成功！",U("Admin/Active/allActive"));
                    }else{
                        $this->error("编辑失败！");
                    }
                }
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : ''; //获得修改用户的ID
            $activeModel = D("active");
            $news = $activeModel->where("id='%d'",$id)->find(); //从数据库找到需要修改的用户信息
            $this->assign("actives",$actives);
            $this->display();
        }
    }



}