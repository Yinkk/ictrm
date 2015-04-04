<?php

class AdminProjectController extends BaseController{

	public function getIndex(){
		return View::make('admin/adminPage');
	}

	public function getListProject(){
		$tbp = ProjectModel::listProject();
		return View::make('admin/adminListProject', array('tbp' => $tbp));
	}

	public function getAddProject(){
		$tbus = User::all();
   		return View::make('admin/adminAddProject', array('tbus'=>$tbus));
	}

	public function postAddProject(){

		ProjectModel::addProject();
	 	$tbp = ProjectModel::listProject();
	 	
		return View::make('admin/adminListProject', array('tbp' => $tbp));
	}

	public function getEditProject($id){
		
		$tbp = ProjectModel::editProject($id);
		$users = User::all();
		// foreach ($user->projects as $project) {
		// 	return $project->pivot;
		// }

	   	return View::make('admin/adminEditProject', array('tbp' => $tbp))
	   			->with('users',$users);
	}

	public function postEditProject(){

		ProjectModel::updateProject();
		$tbp = ProjectModel::listProject();
		return View::make('admin/adminListProject', array('tbp' => $tbp));
		
	}

	public function getDelProject($id){

		ProjectModel::delProject($id);
		$tbp = ProjectModel::listProject();
		return View::make('admin/adminListProject', array('tbp' => $tbp));
	}	
}
?>