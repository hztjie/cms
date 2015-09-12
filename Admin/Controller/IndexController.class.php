<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){ 
    	//$this->display();
    	echo "sdfsdf";
    }
    public function _empty(){
        echo "<img src='".IMG_URL.'404.jpg'."'/>";
    }
}