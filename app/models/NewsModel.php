<?php
class NewsModel extends Eloquent{

	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $softDelete = true;

	protected $table = 'tbnews';

	public static function listNews(){
		$tbnews = NewsModel::all();
		return $tbnews;
	}

	public static function showNews($id){
		$tbnews = NewsModel::find($id);
		return $tbnews;
	}

	public static function addNews(){
		
		$input = Input::all();
		$tbnews = new NewsModel;
		$tbnews->titleNews = $input['titleNews'];
		$tbnews->detailNews = $input['detailNews'];
		$tbnews->postByUser = 'admin';
		$tbnews->save();// not completed

	}

	public static function editNews($id){
		
		$tbnews = NewsModel::find($id);
		return $tbnews;
		
	}

	public static function updateNews(){
		
		$input = Input::all();
		$tbnews = NewsModel::find($input['id']);
		$tbnews->titleNews = $input['titleNews'];;
		$tbnews->detailNews = $input['detailNews'];
		$tbnews->postByUser = 'admin';
		$tbnews->save();
		
	}

	public static function delNews($id){

		NewsModel::find($id)->delete();
	}
}
?>