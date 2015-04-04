<?php
class ProjectModel extends Eloquent{

	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $softDelete = true;

	protected $table = 'project';

	public static function listProject(){
		$tbp = ProjectModel::all();
		return $tbp;

	}

	public static function showProject($id){
		$tbp = ProjectModel::find($id);
		return $tbp;
	}

	public static function addProject(){
		
		$input = Input::all();
		//echo $input->project_file;

		if(Input::hasFile('project_file')){
			$file = Input::file('project_file');
			$filename = Input::file('project_file')->getClientOriginalName();
			//echo $filename;
			$file->move('fileUpload/project_file',$filename);//move file project to forder project_file
		
	}
// //echo $filename;
 		$tbp = new ProjectModel;
		$tbp->project_contract =  $input['project_contract']; 
		$tbp->project_name = $input['project_name']; 
 		$tbp->project_year = $input['project_year']; 
		$tbp->project_budget = $input['project_budget']; 
		$tbp->project_period = $input['project_period']; 
		$tbp->project_start = $input['project_start']; 
		$tbp->project_finish = $input['project_finish']; 
		$tbp->project_extend = $input['project_extend']; 
		$tbp->project_memo = $input['project_memo']; 
		$tbp->project_join_external = $input['project_join_external']; 
		$tbp->project_file_name = $filename;

		$tbp->save();// not completed

		$user_ids = $input['user_id'];
		$percents = $input['percent'];
		$countuserids = count($user_ids);
		
		$syncuserarr = array();
		$syncuserarr[$user_ids[0]] = array('project_head'=>true, 'percent'=>$percents[0],'created_at'=>$tbp->created_at,'updated_at'=>$tbp->updated_at);


		for ($i = 1; $i < $countuserids; $i++){
			
			$syncuserarr[$user_ids[$i]] = array('percent'=>$percents[$i],'created_at'=>$tbp->created_at,'updated_at'=>$tbp->updated_at);
			
		}

		$tbp->users()->sync($syncuserarr);
	}

	public static function editProject($id){
		//return $id;
		$tbp = ProjectModel::find($id);
		return $tbp;
		
	}

	public static function updateProject(){
		
		$input = Input::all();
		$tbp = ProjectModel::find($input['project_id']);

		$tbp->project_contract =  $input['project_contract'];
		$tbp->project_name = $input['project_name']; 
		$tbp->project_year = $input['project_year']; 
		$tbp->project_budget = $input['project_budget']; 
		$tbp->project_period = $input['project_period']; 
		$tbp->project_start = $input['project_start']; 
		$tbp->project_finish = $input['project_finish']; 
		$tbp->project_extend = $input['project_extend']; 
		$tbp->project_memo = $input['project_memo']; 
		$tbp->project_join_external = $input['project_join_external']; 
		$tbp->save();// not completed

		$user_ids = $input['user_id'];
		$percents = $input['percent'];
		$countuserids = count($user_ids);
		
		$syncuserarr = array();
		$syncuserarr[$user_ids[0]] = array('project_head'=>true, 'percent'=>$percents[0],'created_at'=>$tbp->created_at,'updated_at'=>$tbp->updated_at);


		for ($i = 1; $i < $countuserids; $i++){
			
			$syncuserarr[$user_ids[$i]] = array('percent'=>$percents[$i],'created_at'=>$tbp->created_at,'updated_at'=>$tbp->updated_at);
			
		}

		$tbp->users()->sync($syncuserarr);

	}

	public static function delProject($id){

		ProjectModel::find($id)->delete();
	}

	public function users()
    {
        return $this->belongsToMany('User','project_user','project_id','user_id')->withPivot('percent')->withPivot('project_head');
    }

}
?>