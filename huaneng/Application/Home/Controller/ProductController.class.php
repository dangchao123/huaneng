<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function productlist1(){
        // $sql = "SELECT * FROM product WHERE 产品种类 = '电站系统';";
        // $p1 = M('product')->query($sql);
        $p1=M('product')->where("产品种类='%s'",光伏逆变器)->select();
        // var_dump($p1);
        $this->assign('p1',$p1);
        $this->display();
    }
    public function productlist2(){
        // $sql = "SELECT * FROM product WHERE 产品种类 = '电站系统';";
        // $p1 = M('product')->query($sql);
        $p1=M('product')->where("产品种类='%s'",风能变流器)->select();
        // var_dump($p1);
        $this->assign('p1',$p1);
        $this->display();
    }
    public function productlist3(){
        // $sql = "SELECT * FROM product WHERE 产品种类 = '电站系统';";
        // $p1 = M('product')->query($sql);
        $p1=M('product')->where("产品种类='%s'",储能系统)->select();
        // var_dump($p1);
        $this->assign('p1',$p1);
        $this->display();
    }
    public function productlist4(){
        // $sql = "SELECT * FROM product WHERE 产品种类 = '电站系统';";
        // $p1 = M('product')->query($sql);
        $p1=M('product')->where("产品种类='%s'",新能源汽车驱动系统)->select();
        // var_dump($p1);
        $this->assign('p1',$p1);
        $this->display();
    }
    public function productcontent(){
        $pt=I('id');


        $data=M('product')->where("id=$pt")->select();
        // var_dump($data);
        $this->assign('pt',$data);

        $this->display();
    }
    public function liuyan(){   
    	if(IS_POST){
    		$data['id'] = I('post.id');
			$data['cate'] = I('post.cate');
			$data['company'] = I('post.company');
			$data['address'] = I('post.address');
			$data['username'] = I('post.username');
			$data['phone'] = I('post.phone');
			$data['email'] = I('post.email');
			$data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间
			$data['content'] = I('post.content');
			$msg = M('consult');
			// $msg->add($data);
			if($msg->add($data)){
				echo "<meta charset='utf-8' /><script>location.href='".$_SERVER["HTTP_REFERER"]."';alert('留言成功');</script>";
			}else{
				$this->error('添加失败');
			}
    	}
    	
    }
}
        // if(!IS_POST){
        //     exit("bad request!");
        // }
        // if(!$info) {
            
        // }else{is
        //     $consultModel = D("consult"); //创建模型
        //     $data = $consultModel->create(); //组织数据
        //     if(!$data){
        //         exit($consultModel->getError());
        //     }else{
        //         //设置img字段属性(目录+名字)
        //         $data['id'] = I('post.id');
        //         $data['cate'] = I('post.cate');
        //         $data['company'] = I('post.company');
        //         $data['address'] = I('post.address');
        //         $data['username'] = I('post.username');
        //         $data['phone'] = I('post.phone');
        //         $data['email'] = I('post.email');
        //         $data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间
        //         $data['content'] = I('post.content');
        //         if($consultModel->add($data)){
        //             $this->redirect("Admin/Consult/consult");
        //         }else{
        //             $this->error("插入失败！");
        //         }
        //     }
        // }
    // }
