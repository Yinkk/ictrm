<?php
class NewsController extends BaseController{

	public function getIndex(){
		return $this->getListNews();

	}

	public function getView($id){
		return $id;
	}

	public function getListNews(){
		
		NewsModel::listNews();
		return redirect::to('/');
	}

	public function getShowNews($id){
		
   		$tbn = NewsModel::showNews($id);
   		return View::make('viewNews', array('tbn' => $tbn));
    	
	}

	public function getAddNews(){

		NewsModel::addNews();
   		return Redirect::to('/'); //notcomplete

	}

	public function postAddNews(){

	}

	public function getEditNews(){
		NewsModel::editNews();
   		return Redirect::to('/'); //notcomplete
	}

	public function postEditNews(){

	}

	public function getDelNews(){

		//show deleted news page
	}	
}

?>