<?php
//namespace admin;
class AdminNewsController extends BaseController{

	public function getIndex(){
		//return "555555";
		return View::make('admin/adminPage');
	}

	public function getListNews(){
		$tbn = NewsModel::listNews();
		return View::make('admin/adminListNews', array('tbn' => $tbn));
	}

	public function getAddNews(){
		
   		return View::make('admin/adminAddNews');

	}

	public function postAddNews(){

		NewsModel::addNews();
		$tbn = NewsModel::listNews();
		return View::make('admin/adminListNews', array('tbn' => $tbn));
	}

	public function getEditNews($id){
		
		$tbn = NewsModel::editNews($id);
   		return View::make('admin/adminEditNews', array('tbn' => $tbn));
	}

	public function postEditNews(){

		NewsModel::updateNews();
		$tbn = NewsModel::listNews();
		return View::make('admin/adminListNews', array('tbn' => $tbn));
		//print_r(Input::all());
	}

	public function getDelNews($id){

		NewsModel::delNews($id);
		$tbn = NewsModel::listNews();
		return View::make('admin/adminListNews', array('tbn' => $tbn));

	}	


	//private function mapModel($input,User $user){
	//	$user->id = $input['id'];
	//	$user->name = $input['name'];
	//	return $user;
	//}
}

?>