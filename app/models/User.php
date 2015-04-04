<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $softDelete = true;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		//return $this->remember_token;
		return null;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		//$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		//return 'remember_token';
		return null;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public static function validateLogin($input){
		$rules = array(
			'username' => 'Required|Between:3,5',
			'password' => 'Required',
		);

		$message = array(
			'username.required' => 'คุณไม่ได้กรอก Username',
			'username.between' => 'username ต้องมี 3-5 ตัว',
			'password.required' => 'คุณไม่ได้กรอก Password'
		);

		return Validator::make($input,$rules,$message);
	}

	public static function validateUser($input){
		$rules = array(
			'username' => 'Required|Between:3,5',
			'password' => 'Required',
			'user_prefix' => 'Required',
			'user_fname' => 'Required',
			'user_lname' => 'Required',
			'user_faculty' => 'Required',
			'user_major' => 'Required',
			'user_position' => 'Required',
			'user_gender'  => 'Required',
			'user_nation' => 'Required',
			'user_level_education' => 'Required',
			'user_degree' => 'Required',
			'user_education' => 'Required',
			'user_tel' => 'Required',
			'email' => 'Required|Email'
			
		);

		$message = array(
			'username.required' => 'คุณไม่ได้กรอก Username',
			'username.between' => 'username ต้องมี 3-5 ตัว',
			'password.required' => 'คุณไม่ได้กรอก Password',
			'user_prefix.required' => 'คุณไม่ได้กรอกคำนำหน้า',
			'user_fname.required' => 'คุณไม่ได้กรอกชื่อ',
			'user_lname.required' => 'คุณไม่ได้กรอกนามสกุล',
			'user_faculty.required' => 'คุณไม่ได้กรอกคณะ/หน่วยงาน',
			'user_major.required' => 'คุณไม่ได้กรอกสาขาวิชา',
			'user_position.required' => 'คุณไม่ได้กรอกตำแหน่ง',
			'user_gender.required'  => 'คุณไม่ได้กรอกเพศ',
			'user_nation.required' => 'คุณไม่ได้กรอกสัญชาติ',
			'user_level_education.required' => 'คุณไม่ได้กรอกระดับการศึกษา',
			'user_degree.required' => 'คุณไม่ได้กรอกวุฒิการศึกษา',
			'user_education.required' => 'คุณไม่ได้กรอกสถานที่สำเร็จการศึกษา',
			'user_tel.required' => 'คุณไม่ได้กรอกเบอร์โทรศัพท์',
			'email.required' => 'คุณไม่ได้กรอกอีเมล์'
			
		);

		return Validator::make($input,$rules,$message);
	}

	public static function listUsers(){
		$tbusers = User::all();
		return $tbusers;
	}

	public static function showUsers($id){
		$tbusers = User::find($id);
		return $tbusers;
	}

	public static function addUsers(){
			$input = Input::all();
			$tbusers = new User;
			$tbusers->user_prefix = $input['user_prefix'];
			$tbusers->user_fname = $input['user_fname'];
			$tbusers->user_lname = $input['user_lname'];
			$tbusers->user_faculty = $input['user_faculty'];
			$tbusers->user_major = $input['user_major'];
			$tbusers->user_position = $input['user_position'];
			$tbusers->user_gender = $input['user_gender'];
			$tbusers->user_nation = $input['user_nation'];
			$tbusers->user_level_education = $input['user_level_education'];
			$tbusers->user_degree = $input['user_degree'];
			$tbusers->user_education = $input['user_education'];
			$tbusers->user_tel = $input['user_tel'];
			$tbusers->user_email = $input['email'];
			$tbusers->user_username = $input['username'];
			$tbusers->user_password = Hash::make($input['password']);
			//$tbusers->level = 2;
			
			$tbusers->save();
	}

	public static function editUsers($id){
		
		$tbu = User::find($id);
		return $tbu;
		//$tbnews->titleNews = 'update';
		//$tbnews->save();// not completed
	}

	public static function updateUsers(){
		$input = Input::all();
		//print_r($input);
		$tbusers = User::find($input['id']);
		$tbusers->user_prefix = $input['user_prefix'];
		$tbusers->user_fname = $input['user_fname'];
		$tbusers->user_lname = $input['user_lname'];
		$tbusers->user_faculty = $input['user_faculty'];
		$tbusers->user_major = $input['user_major'];
		$tbusers->user_position = $input['user_position'];
		$tbusers->user_gender = $input['user_gender'];
		$tbusers->user_nation = $input['user_nation'];
		$tbusers->user_level_education = $input['user_level_education'];
		$tbusers->user_degree = $input['user_degree'];
		$tbusers->user_education = $input['user_education'];
		$tbusers->user_tel = $input['user_tel'];
		$tbusers->email = $input['email'];
		$tbusers->username = $input['username'];
		$tbusers->password = Hash::make($input['password']);
		$tbusers->level = 2;
		
		$tbusers->save();
	}

	public static function delUsers($id){

		User::find($id)->delete();
	}

	public function projects()
    {
        return $this->belongsToMany('ProjectModel','project_user','user_id','project_id')->withPivot('percent')->withPivot('project_head');
    }

}
