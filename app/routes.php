<?php



// Route::get('testgraph', function(){
// 	$budgets = DB::table('tbbudget')->select('budget_year','budget')->get();
// 	$line1 = '';
// 	foreach ($budgets as $obj) {
// 		$line1 = $line1."[".$obj->budget_year.",".$obj->budget."],";
// 	}
// 	echo $line1;
// });

Route::get('getuser', function(){
	print_r(Auth::user());
	//$user = Auth::user();
	//echo $user->email;
});

Route::get('/', function()
{
	$tbnews = NewsModel::all();;
    return View::make('home', array('tbnews' => $tbnews));
});
 
//------login-----//
Route::get('login', function(){
	return View::make('login');
});
Route::post('login','LoginController@login');

//------logout-----//
Route::get('logout','LoginController@getLogout');
Route::get('test','loginController@test');

//------register-----//
Route::get('register', function(){
	return View::make('register');
});
Route::post('register','LoginController@register');

//------general-----//
// listUser/edit/10

Route::controller('user', 'UserController');
Route::controller('news', 'NewsController');

Route::get('docDownload', function(){
	return View::make('docDownload');
});

Route::get('listProject', function(){
	return View::make('listProject');
});

Route::get('report', function(){
	return View::make('report');
});

Route::get('manual', function(){
	return View::make('manual');
});

//------test admin-----//
Route::get('adminPage', function(){
	return View::make('admin/adminPage');
});

Route::controller('admin/news', 'AdminNewsController');
Route::controller('admin/user', 'AdminUserController');
Route::controller('admin/budget', 'AdminBudgetController');
Route::controller('admin/project', 'AdminProjectController');
Route::controller('admin/upload', 'AdminUploadFileController');

//-------------management News-----------------------
/*Route::get('admin/adminListNews', 'adminNewsController@getListNews');

Route::get('admin/adminEditNews/{id}', 'adminNewsController@getEditNews');

Route::post('admin/adminListNews', 'adminNewsController@postEditNews');
//Route::get('viewUser/{id}', 'UserController@getShowUsers');

Route::get('admin/adminDelNews/{id}', 'adminNewsController@getDelNews');

//-------------management User-----------------------

//Route::controller('admin/user','adminUserController');

 Route::get('admin/adminListUser', 'adminUserController@getListUsers');

 Route::get('admin/adminEditUser/{id}', 'adminUserController@getEditUsers');

 Route::post('admin/adminListUser', 'adminUserController@postEditUsers');
//Contact Page
Route::get('contact', 'ContactController@getContact');

//Form request:: POST action will trigger to controller
Route::post('contact_request','ContactController@getContactUsForm');*/

// Route::get('testEro', function(){
// 	$user = User::find(10);
// 	print_r($user);
// 	$projects = $user->projects;
// 	foreach ($projects as $project) {
// 		print_r($project);
// 	}
// });
// Route::get('testEro', function(){
// 	foreach (User::find(8)->projects as $project) {
// 		var_dump($project->pivot->toArray());
// 	}
// });
// Route::get('upload', function(){
// 	return View::make('admin/adminUploadFile');
// });
// Route::post('photo', function(){

// 	if(Input::hasFile('photo')){
// 		$file = Input::file('photo');
// 		$name = $file->getClientOriginalName();
// 		//print_r($name);
// 		$file->move('file',$name);
// 	}
// });

// Route::get('session', function(){
// 	return Session::put('laravel.test','japan');
// });
// Route::get('check', function(){
// 	return Session::get('laravel.a');
// });