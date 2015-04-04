<?php
class LoginController extends BaseController{

	public function login()
	{
		
		$credential = Input::only('username','password');

		$validate = User::validateLogin(Input::all());

		if($validate->passes()){
			
			if(Auth::attempt(array('username'=>Input::get('username'),'password'=>Input::get('password')))){
				$userlogin = Auth::User();

				Session::put('user_id', $userlogin->id);

				if($userlogin->level == 1){
					return View::make('admin/adminPage', array('userlogin' => $userlogin));
				}else{
					$tbnews = NewsModel::all();;
	    			return View::make('home', array('tbnews' => $tbnews));
				}
				
			}else{
				return View::make('login')->withErrors('username หรือ password ไม่ถูกต้อง');
			}

		}else{
			return View::make('login')
					->withErrors($validate->messages());
		}		
			
	} 

	public function getLogout(){
		Auth::logout();
		Session::forget('user_id');
		return View::make('login');
	}
}
?>