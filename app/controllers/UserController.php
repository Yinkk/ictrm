<?php
//echo "usersController";
class UserController extends BaseController{

	public function getIndex(){
		
		return $this->getListUsers();

	}

	public function getListUsers(){

		$tbusers = User::listUsers();
		return View::make('listUser', array('tbusers' => $tbusers));
		
	}

	public function getShowUsers($id){
		
		$tbu = User::find($id);
		return View::make('viewUser', array('tbu' => $tbu));
    	
	}

	public function getEdit($id){

	}

	public function getAddUsers(){

	}

	public function postAddUsers(){

	}

	public function getEditUsers(){
		User::editUsers();
   		return Redirect::to('/'); //notcomplete
	}

	public function postEditUsers(){

	}

	public function getDelUsers(){

		//show deleted news page
	}	
}

?>