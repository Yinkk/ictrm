@extends('layout.master')
@section('content')

@if(Auth::check())
	<div id="content">
		<div id="full-main">
			<div id="login" class="post">
				<h2>เข้าสู่ระบบ</h2>

		<div style="margin-left:270px;border-left: 1px solid #ddd;padding-left:30px;">

			คุณเข้าสู่ระบบเรียบร้อยแล้ว
		{{ Form::close()}}
		</div>
		<div class="clear"></div>

@else
<div id="content">
	<div id="full-main">
		<div id="login" class="post">
			<h2>เข้าสู่ระบบ</h2>

	<div style="margin-left:270px;border-left: 1px solid #ddd;padding-left:30px;">

	{{ Form::open(array('action'=>'LoginController@login'))}}
	{{ Form::token()}}

						@if($errors->count() > 0)
							<p>มีข้อผิดพลาดเกิดขึ้น:</p>
							<ul>
								@foreach($errors->all() as $message)
									<li>{{ $message }}</li>
								@endforeach
							</ul>
						@endif

		<input type="hidden" name="submit" value="login-form" />
		<p><label for="username">Username : </label><input type="text" id="username" name="username" class="txtbox" /></p>
		<p><label for="password">Password : </label><input type="password" id="password" name="password" class="txtbox" /></p>
		
		<p><button id="btn-submit" type="submit">เข้าสู่ระบบ</button></p>
	{{ Form::close()}}
	</div>
	<div class="clear"></div>
@endif
		</div>
	</div>
</div>
@stop
