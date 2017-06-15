<?php
namespace Admin\Controller;
use Think\Controller;
class ProjectController extends Controller {
    
    public function allProjects(){
    	if(I("get.search")==''){ 
        $dataModel = D("project");
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
       $this->assign('project',$data);
        $this->assign('page',$show);
        $this->display();
    }else{
        $project=M("project");
        $keyword=$_GET['search'];
        // var_dump($keyword);exit;
        $conition['id']=array('like','%'.$keyword.'%');
        $conition['type']=array('like','%'.$keyword.'%');
        $conition['category']=array('like','%'.$keyword.'%');
        $conition['name']=array('like','%'.$keyword.'%');
        $conition['content']=array('like','%'.$keyword.'%');
        $conition['remark']=array('like','%'.$keyword.'%');
        $conition['featureone']=array('like','%'.$keyword.'%');
        $conition['featuretwo']=array('like','%'.$keyword.'%');
        $conition['featurethree']=array('like','%'.$keyword.'%');
        $conition['featurefour']=array('like','%'.$keyword.'%');
        $conition['updatetime']=array('like','%'.$keyword.'%');
        $conition['addtime']=array('like','%'.$keyword.'%');
        $conition['_logic'] = 'OR';
        $project=$project->where($conition)->select();
        $this->assign('project',$project);
        $this->display();
    }
        
    }
    public function addProject(){
    	$this->display();
        
    }
   
    public function reviseProject(){
    	$this->display();
        
    }
    public function projectadd(){   
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
            $projectModel = D("project"); //创建模型
            $data = $projectModel->create(); //组织数据
            if(!$data){
                exit($projectModel->getError());
            }else{
                //设置img字段属性(目录+名字)
                $data['img']=$info['img']['savepath'].$info['img']['savename'];
                $data['photo']=$info['photo']['savepath'].$info['photo']['savename'];
                $data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间
                $data['updatetime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                $data['type'] = I('post.type');
                $data['summary'] = I('post.summary');
                $data['category'] = I('post.category');
                $data['name'] = I('post.name');
                $data['content'] = I('post.content');
                $data['remark'] = I('post.remark');
                $data['featureone'] = I('post.featureone');
                $data['featuretwo'] = I('post.featuretwo');
                $data['featurethree'] = I('post.featurethree');
                $data['featurefour'] = I('post.featurefour');
                if($projectModel->add($data)){
                    $this->redirect("Admin/Project/allProjects");
                }else{
                    $this->error("插入失败！");
                }
            }
        }
    }
    public function projectdel(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("project")->delete($value);
            }
            $this->redirect("Admin/Project/allProjects");
        }else{
            if(M("project")->delete($id)){
                $this->redirect("Admin/Project/allProjects");
            }else{
                $this->error("删除失败！");
            }
        }
    }
    public function projectedit($id){
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
                $projectModel = D("project"); //创建模型
                $data = $projectModel->create(); //组织数据
                if(!$data){
                    exit($projectModel->getError());
                }else{
                    //设置img字段属性(目录+名字)
                    $data['img']=$info['img']['savepath'].$info['img']['savename'];
	                $data['photo']=$info['photo']['savepath'].$info['photo']['savename'];
	               
	                $data['updatetime'] = date("Y-m-d H:i:s"); //添加最新更改时间
	                $data['type'] = I('post.type');
	                $data['summary'] = I('post.summary');
	                $data['category'] = I('post.category');
	                $data['name'] = I('post.name');
	                $data['content'] = I('post.content');
	                $data['remark'] = I('post.remark');
	                $data['featureone'] = I('post.featureone');
                    $data['featuretwo'] = I('post.featuretwo');
                    $data['featurethree'] = I('post.featurethree');
                    $data['featurefour'] = I('post.featurefour');
                    // var_dump($data);exit;
                    
                    if($projectModel->where("id='%d'",$id)->save($data)){
                        $this->redirect("Admin/Project/allProjects");
                    }else{
                        $this->error("编辑失败！");
                    }
                }
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : ''; //获得修改用户的ID
            $projectModel = D("project");
            $project = $projectModel->where("id='%d'",$id)->find(); //从数据库找到需要修改的用户信息
            $this->assign("project",$project);
            $this->display();
        }
    }

}
