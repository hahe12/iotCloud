<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function index(){
        $this->show('haha');
    }
    public function listProduct(){
        $product = M("product"); // 实例化User对象
        $products=$product->select();
        var_dump($products);
    }
}