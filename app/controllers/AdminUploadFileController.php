<?php

class AdminUploadFileController extends BaseController{

	public function getListUpload(){
		$tbuploads = UploadModel::all();
		//print_r($tbuploads);
		return View::make('admin/adminListUpload', array('tbuploads' => $tbuploads));
	}

	public function getUpload(){
			
			return View::make('admin/adminUploadFile');
	}

	public function postUpload(){

		if(Input::file('photo')){
			$file = Input::file('photo');
			$name = $file->getClientOriginalName();
			$file->move('fileUpload/document_file',$name);
			$input = Input::all();

			$fileupload = new UploadModel;
			$fileupload->title_upload_file = $input['titleUploadFile'];
			$fileupload->file_name = $name;
			$fileupload->save();
		}
		$tbuploads = UploadModel::all();
		return View::make('admin/adminListUpload', array('tbuploads' => $tbuploads));
	}

	public function getDelUpload($id){
		//return $id;
		UploadModel::find($id)->delete();
		$tbuploads = UploadModel::all();
		return View::make('admin/adminListUpload', array('tbuploads' => $tbuploads));
	}	
}
?>