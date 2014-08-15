<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){

    }
    public function login(){
    	$this ->display();
    }
    public function checklog(){
    	if (isset($_POST['email'])) {
    		$name = $_POST['email'];
    	}
    	$pwd = md5($_POST['pwd']);
    	$m = M("tp_user");
    	$msg = $m ->where("name = '$name'") ->find();
    	if ($msg['pwd'] == $pwd) {
    		setcookie("username",$name);
    		$this -> success("登录成功");
    	}else{
    		$this -> error("用户名或密码错误");
    	}
    }
    public function read(){
    	$m = M("tp_user");
    	$list = $m -> where('id<=3') -> order('id') -> select();
    	var_dump($list);
    }
}