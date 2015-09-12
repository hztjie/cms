<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller
{
    public function index(){
    	//if(session('userid') == ""){
        	$this->display();
    	//}else {
    	//    $this->display("Manager/login");
    	//}
    }
    public function login(){
        $this->display();
    }

}