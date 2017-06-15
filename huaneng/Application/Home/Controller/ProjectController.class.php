<?php
namespace Home\Controller;
use Think\Controller;
class ProjectController extends Controller {
    public function projectlist1(){
        // $sql = "SELECT * FROM product WHERE 产品种类 = '电站系统';";
        // $p1 = M('product')->query($sql);
        $p1=M('project')->where("type='%s'",光伏逆变器)->where("category='%s'",大型地面电站)->select();
        $p2=M('project')->where("type='%s'",光伏逆变器)->where("category='%s'",复杂山丘电站)->select();
        $p3=M('project')->where("type='%s'",光伏逆变器)->where("category='%s'",工商业屋顶电站)->select();
        $p4=M('project')->where("type='%s'",光伏逆变器)->where("category='%s'",水面电站)->select();
        $p5=M('project')->where("type='%s'",光伏逆变器)->where("category='%s'",'户用/村级电站')->select();
       // var_dump($p5);
        $this->assign('p1',$p1);
        $this->assign('p2',$p2);
        $this->assign('p3',$p3);
        $this->assign('p4',$p4);
        $this->assign('p5',$p5);
        $this->display();
    }
     public function projectlist2(){
        // $sql = "SELECT * FROM product WHERE 产品种类 = '电站系统';";
        // $p1 = M('product')->query($sql);
        $p1=M('project')->where("type='%s'",电站系统)->where("category='%s'",大型地面光伏电站)->select();
        $p2=M('project')->where("type='%s'",电站系统)->where("category='%s'",分布式光伏电站)->select();
        $p3=M('project')->where("type='%s'",电站系统)->where("category='%s'",家庭光伏电站)->select();       
       // var_dump($p5);
        $this->assign('p1',$p1);
        $this->assign('p2',$p2);
        $this->assign('p3',$p3);
        $this->display();
    }
    public function projectlist3(){
        // $sql = "SELECT * FROM product WHERE 产品种类 = '电站系统';";
        // $p1 = M('product')->query($sql);
        $p1=M('project')->where("type='%s'",储能系统)->where("category='%s'",能量搬移应用)->select();
        $p2=M('project')->where("type='%s'",储能系统)->where("category='%s'",微电网应用)->select();
        $p3=M('project')->where("type='%s'",储能系统)->where("category='%s'",电力调频应用)->select();       
       // var_dump($p5);
        $this->assign('p1',$p1);
        $this->assign('p2',$p2);
        $this->assign('p3',$p3);
        $this->display();
    }
    public function projectlist4(){
        // $sql = "SELECT * FROM product WHERE 产品种类 = '电站系统';";
        // $p1 = M('product')->query($sql);
        $p1=M('project')->where("type='%s'",新能源汽车驱动系统)->where("category='%s'",大型客车驱动)->select();
        $p2=M('project')->where("type='%s'",新能源汽车驱动系统)->where("category='%s'",中小型客车驱动)->select();
        $p3=M('project')->where("type='%s'",新能源汽车驱动系统)->where("category='%s'",乘用车驱动)->select();       
       // var_dump($p5);
        $this->assign('p1',$p1);
        $this->assign('p2',$p2);
        $this->assign('p3',$p3);
        $this->display();
    }

    public function projectcontent1(){
        $pt=I('id');
        $data=M('project')->where("id=$pt")->select();
        // var_dump($data);
        $this->assign('pt',$data);
        $this->display();
    }
    public function projectcontent2(){
        $pt=I('id');
        $data=M('project')->where("id=$pt")->select();
        // var_dump($data);
        $this->assign('pt',$data);
        $this->display();
    }
}