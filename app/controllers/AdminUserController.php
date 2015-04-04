<?php

class AdminUserController extends BaseController{

	
	public function getIndex(){
		
		return View::make('admin/adminPage');

	}

	public function getListUsers(){
		
		$tbu = User::listUsers();
		return View::make('admin/adminListUser', array('tbu' => $tbu));
	}

	public function getAddUsers(){
		return View::make('admin/adminAddUser');

	}

	public function postAddUsers(){

		$validate = User::validateUser(Input::all());

		if($validate->passes()){
			User::addUsers();
			$tbu = User::listUsers();
			return View::make('admin/adminListUser', array('tbu' => $tbu));
		}else{
			return View::make('admin/adminAddUser')
					->withErrors($validate->messages());
		}		
	}

	public function getEditUsers($id){
		//echo $id;
		$tbu = User::editUsers($id);
		//echo $tbu;
   		return View::make('admin/adminEditUser', array('tbu' => $tbu));
	}

	public function postEditUsers(){
		//return $a = Input::all();
		User::updateUsers();
		
		$tbu = User::listUsers();
		return View::make('admin/adminListUser', array('tbu' => $tbu));
	}

	public function getDelUsers($id){
		
		User::delUsers($id);
		$tbu = User::listUsers();
		return View::make('admin/adminListUser', array('tbu' => $tbu));
		
	}	
}

?>