<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function mediannews(){
        $this->display();
    }
    public function companysnews(){
        $this->display();
    }
    public function content(){
        $this->display();
    }
}