<?php
class TestController extends BaseController{

	public function getIndex(){
		return $this->getUser();
	}

	public function getUser(){
		return "USER";
	}

	public function getTest2($t="aaa"){
		return $t;
	}

	public function postTest(){
		return "test post";
	}

	
}
?>