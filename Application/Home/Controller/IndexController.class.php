<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('hello iotcloud');
    }
	public function login($name='testlogin', $passwd='null', $level=3){
		$this->assign('name',$name);
		$this->assign('passwd',$passwd);
		$this->assign('level',$level);
		$this->display();
    }
	public function register($name='testregister', $passwd='null', $level=3){
		$this->assign('name',$name);
		$this->assign('passwd',$passwd);
		$this->assign('level',$level);
		$this->display();
    }
}