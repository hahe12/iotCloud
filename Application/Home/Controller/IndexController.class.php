<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _empty($name){
        //把所有城市的操作解析到city方法
         $this->display(T('Index/help'));
    }
    public function index(){
        if (empty($_SESSION['userid']))
            $this->display(T('User/login'));
        else{
            if ($_SESSION['level'] == 1)
                //$this->show("enter main page with admin");
                redirect('/Admin/Index/index',1, 'jump to admin main page');
            elseif ($_SESSION['level'] == 2)
                redirect('/Develop/Index/index',1, 'jump to product main page');
            else 
                redirect('/Service/Index/index',1, 'jump to service main page');
        }
                  
    }
}