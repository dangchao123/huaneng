<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
   
   
    public function allProducts(){
    	if(I("get.search")==''){ 
        $dataModel = D("product");
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
       $this->assign('product',$data);
        $this->assign('page',$show);
        $this->display();
    }else{
        $product=M("product");
        $keyword=$_GET['search'];
        // var_dump($keyword);exit;
        $conition['id']=array('like','%'.$keyword.'%');
        $conition['产品种类']=array('like','%'.$keyword.'%');
        $conition['型号']=array('like','%'.$keyword.'%');
        $conition['尺寸（宽）']=array('like','%'.$keyword.'%');
        $conition['尺寸（长）']=array('like','%'.$keyword.'%');
        $conition['尺寸（高）']=array('like','%'.$keyword.'%');
        $conition['通讯接口']=array('like','%'.$keyword.'%');
        $conition['通讯协议']=array('like','%'.$keyword.'%');
        $conition['符合标准']=array('like','%'.$keyword.'%');
        $conition['防护等级']=array('like','%'.$keyword.'%');
        $conition['updatetime']=array('like','%'.$keyword.'%');
        $conition['addtime']=array('like','%'.$keyword.'%');
        $conition['冷却方式']=array('like','%'.$keyword.'%');
        $conition['重量']=array('like','%'.$keyword.'%');
        
        $conition['_logic'] = 'OR';
        $product=$product->where($conition)->select();
        $this->assign('product',$product);
        $this->display();
    }
        
    }
    public function addProduct(){
    	$this->display();
        
    }
    public function reviseProduct(){
    	$this->display();
        
    }
    public function productadd(){   
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
            $productModel = D("product"); //创建模型
            $data = $productModel->create(); //组织数据
            if(!$data){
                exit($productModel->getError());
            }else{
                //设置img字段属性(目录+名字)
                $data['略缩图']=$info['略缩图']['savepath'].$info['略缩图']['savename'];
                $data['产品介绍']=$info['产品介绍']['savepath'].$info['产品介绍']['savename'];
                $data['操作手册']=$info['操作手册']['savepath'].$info['操作手册']['savename'];
                $data['安装手册']=$info['安装手册']['savepath'].$info['安装手册']['savename'];
                $data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间
                $data['updatetime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                $data['产品种类'] = I('post.产品种类');
                $data['型号'] = I('post.型号');
                $data['summary'] = I('post.summary');
                $data['最大输入电压'] = I('post.最大输入电压');
                $data['启动电压'] = I('post.启动电压');
                $data['最低工作电压'] = I('post.最低工作电压');
                $data['最小mmp电压范围'] = I('post.最小mmp电压范围');
                $data['最大mmp电压范围'] = I('post.最大mmp电压范围');
                $data['mppt'] = I('post.mppt');
                $data['最大输入电流'] = I('post.最大输入电流');
                $data['额定输出功率'] = I('post.额定输出功率');
                $data['最大输出功率'] = I('post.最大输出功率');
                $data['最大输出电流'] = I('post.最大输出电流');
                $data['额定电网电压'] = I('post.额定电网电压');
                $data['最小电网电压范围'] = I('post.最小电网电压范围');
                $data['最大电网电压范围'] = I('post.最大电网电压范围');
                $data['额定电网频率'] = I('post.额定电网频率');
                $data['最小电网频率范围'] = I('post.最小电网频率范围');
                $data['最大电网频率范围'] = I('post.最大电网频率范围');
                $data['总电流波形畸变率'] = I('post.总电流波形畸变率');
                $data['直流分量'] = I('post.直流分量');
                $data['功率因数'] = I('post.功率因数');
                $data['功率因数可调范围（超前）'] = I('post.功率因数可调范围（超前）');
                $data['功率因数可调范围（滞后）'] = I('post.功率因数可调范围（滞后）');
                $data['馈电相数'] = I('post.馈电相数');
                $data['输出端相数'] = I('post.输出端相数');
                $data['最大效率'] = I('post.最大效率');
                $data['欧洲效率'] = I('post.欧洲效率');
                $data['直流过压保护'] = I('post.直流过压保护');
                $data['直流反接保护'] = I('post.直流反接保护');
                $data['直流短路保护'] = I('post.直流短路保护');
                $data['电网监测'] = I('post.电网监测');
                $data['接地故障监测'] = I('post.接地故障监测');
                $data['绝缘监测'] = I('post.绝缘监测');
                $data['过热保护'] = I('post.过热保护');
                $data['pid防护与修复'] = I('pid防护与修复');
                $data['svg功能'] = I('post.svg功能');
                $data['夜间休眠功能'] = I('post.夜间休眠功能');
                $data['交流侧直接并联'] = I('post.交流侧直接并联');
                $data['软开、关机'] = I('post.软开、关机');
                $data['内、外供电自动切换'] = I('post.内、外供电自动切换');
                $data['尺寸（宽）'] = I('post.尺寸（宽）');
                $data['尺寸（高）'] = I('post.尺寸（高）');
                $data['尺寸（深）'] = I('post.尺寸（深）');
                $data['重量'] = I('post.重量');
                $data['防护等级'] = I('post.防护等级');
                $data['夜间自耗电'] = I('post.夜间自耗电');
                $data['辅助电源'] = I('post.辅助电源');
                $data['冷却方式'] = I('post.冷却方式');
                $data['最小工作温度'] = I('post.最小工作温度');
                $data['最大工作温度'] = I('post.最大工作温度');
                $data['最小工作温度'] = I('post.最小工作温度');
                $data['最大工作湿度'] = I('post.最大工作湿度');
                $data['最高工作海拔'] = I('post.最高工作海拔');
                $data['通讯接口'] = I('post.通讯接口');
                $data['通讯协议'] = I('post.通讯协议');
                $data['符合标准'] = I('post.符合标准');
                if($productModel->add($data)){
                    $this->redirect("Admin/Product/allProducts");
                }else{
                    $this->error("插入失败！");
                }
            }
        }
    }
    public function productdel(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("product")->delete($value);
            }
            $this->redirect("Admin/Product/allProducts");
        }else{
            if(M("product")->delete($id)){
                $this->redirect("Admin/Product/allProducts");
            }else{
                $this->error("删除失败！");
            }
        }
    }
    public function productedit($id){
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
                $noticeModel = D("product"); //创建模型
                $data = $noticeModel->create(); //组织数据
                if(!$data){
                    exit($noticeModel->getError());
                }else{
                    //设置img字段属性(目录+名字)
                    $data['略缩图']=$info['略缩图']['savepath'].$info['略缩图']['savename'];
                    $data['产品介绍']=$info['产品介绍']['savepath'].$info['产品介绍']['savename'];
                    $data['操作手册']=$info['操作手册']['savepath'].$info['操作手册']['savename'];
                    $data['安装手册']=$info['安装手册']['savepath'].$info['安装手册']['savename'];
                   
                    $data['updatetime'] = date("Y-m-d H:i:s"); //添加最新更改时间
                    $data['产品种类'] = I('post.产品种类');
                    $data['型号'] = I('post.型号');
                    $data['最大输入电压'] = I('post.最大输入电压');
                    $data['启动电压'] = I('post.启动电压');
                    $data['最低工作电压'] = I('post.最低工作电压');
                    $data['最小mmp电压范围'] = I('post.最小mmp电压范围');
                    $data['最大mmp电压范围'] = I('post.最大mmp电压范围');
                    $data['mppt'] = I('post.mppt');
                    $data['summary'] = I('post.summary');
                    $data['最大输入电流'] = I('post.最大输入电流');
                    $data['额定输出功率'] = I('post.额定输出功率');
                    $data['最大输出功率'] = I('post.最大输出功率');
                    $data['最大输出电流'] = I('post.最大输出电流');
                    $data['额定电网电压'] = I('post.额定电网电压');
                    $data['最小电网电压范围'] = I('post.最小电网电压范围');
                    $data['最大电网电压范围'] = I('post.最大电网电压范围');
                    $data['额定电网频率'] = I('post.额定电网频率');
                    $data['最小电网频率范围'] = I('post.最小电网频率范围');
                    $data['最大电网频率范围'] = I('post.最大电网频率范围');
                    $data['总电流波形畸变率'] = I('post.总电流波形畸变率');
                    $data['直流分量'] = I('post.直流分量');
                    $data['功率因数'] = I('post.功率因数');
                    $data['功率因数可调范围（超前）'] = I('post.功率因数可调范围（超前）');
                    $data['功率因数可调范围（滞后）'] = I('post.功率因数可调范围（滞后）');
                    $data['馈电相数'] = I('post.馈电相数');
                    $data['输出端相数'] = I('post.输出端相数');
                    $data['最大效率'] = I('post.最大效率');
                    $data['欧洲效率'] = I('post.欧洲效率');
                    $data['直流过压保护'] = I('post.直流过压保护');
                    $data['直流反接保护'] = I('post.直流反接保护');
                    $data['直流短路保护'] = I('post.直流短路保护');
                    $data['电网监测'] = I('post.电网监测');
                    $data['接地故障监测'] = I('post.接地故障监测');
                    $data['绝缘监测'] = I('post.绝缘监测');
                    $data['过热保护'] = I('post.过热保护');
                    $data['pid防护与修复'] = I('pid防护与修复');
                    $data['svg功能'] = I('post.svg功能');
                    $data['夜间休眠功能'] = I('post.夜间休眠功能');
                    $data['交流侧直接并联'] = I('post.交流侧直接并联');
                    $data['软开、关机'] = I('post.软开、关机');
                    $data['内、外供电自动切换'] = I('post.内、外供电自动切换');
                    $data['尺寸（宽）'] = I('post.尺寸（宽）');
                    $data['尺寸（高）'] = I('post.尺寸（高）');
                    $data['尺寸（深）'] = I('post.尺寸（深）');
                    $data['重量'] = I('post.重量');
                    $data['防护等级'] = I('post.防护等级');
                    $data['夜间自耗电'] = I('post.夜间自耗电');
                    $data['辅助电源'] = I('post.辅助电源');
                    $data['冷却方式'] = I('post.冷却方式');
                    $data['最小工作温度'] = I('post.最小工作温度');
                    $data['最大工作温度'] = I('post.最大工作温度');
                    $data['最小工作温度'] = I('post.最小工作温度');
                    $data['最大工作湿度'] = I('post.最大工作湿度');
                    $data['最高工作海拔'] = I('post.最高工作海拔');
                    $data['通讯接口'] = I('post.通讯接口');
                    $data['通讯协议'] = I('post.通讯协议');
                    $data['符合标准'] = I('post.符合标准');
                    //var_dump($data);exit;
                    
                    if($noticeModel->where("id='%d'",$id)->save($data)){
                        $this->redirect("Admin/Product/allProducts");
                    }else{
                        $this->error("编辑失败！");
                    }
                }
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : ''; //获得修改用户的ID
            $productModel = D("product");
            $product = $productModel->where("id='%d'",$id)->find(); //从数据库找到需要修改的用户信息
            $this->assign("product",$product);
            $this->display();
        }
    }
   

}