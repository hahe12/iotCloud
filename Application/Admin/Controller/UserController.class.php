<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $this->show('haha');
    }
    public function listDev(){
        $user = M("user"); // 实例化User对象
        $condition['level'] = 2;
        $users=$user->where($condition)->select();
        $this->assign('users',$users);
        $this->display();
    }
    public function listSvr(){
        $user = M("user"); // 实例化User对象
        $condition['level'] = 3;
        $users=$user->where($condition)->select();
        $this->assign('users',$users);
        $this->display();
    }
}