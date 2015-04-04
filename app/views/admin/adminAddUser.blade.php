
@extends('layout.master')
@section('content')

{{ Form::open(array('action' => 'AdminUserController@postAddUsers')) }}
{{ Form::token(); }}
<div id="content">
	<div id="main">
	
		<div id="profile-detail" class="post form-edit">
			<h2>หน้าเพิ่มข้อมูลประวัตินักวิจัย</h2>			

			<div class="profile-detail-form">
				<ul>
					<li><a href="#tabs-1">ประวัตินักวิจัย</a></li>
					<!--<li><a href="#tabs-2">โครงการวิจัยที่เกี่ยวข้อง</a></li>
					<li><a href="#tabs-3">ผลงาน</a></li>-->
				</ul>
				<div id="tabs-1">
				
					<div style="padding: 10px 0;position:relative;">
						@if($errors->count() > 0)
							<p>มีข้อผิดพลาดเกิดขึ้น:</p>
							<ul>
								@foreach($errors->all() as $message)
									<li>{{ $message }}</li>
								@endforeach
							</ul>
						@endif

						<h4>ข้อมูลทั่วไป</h4>
						<table class="detailtb">
						<tr>
							<td class="label" style="width:150px;">username</td>
							<td><input type="text" name="username" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">password</td>
							<td><input type="password" name="password" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">คำนำหน้า</td>
							<td>
								<input type="radio" name="user_prefix" value="นาย">นาย
								<input type="radio" name="user_prefix" value="นาง">นาง
								<input type="radio" name="user_prefix" value="นางสาว">นางสาว
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ชื่อ</td>
							<td><input type="text" name="user_fname" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">นามสกุล</td>
							<td><input type="text" name="user_lname" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">คณะ/หน่วยงาน</td>
							<td><input type="text" name="user_faculty" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">สาขาวิชา</td>
							<td><input type="text" name="user_major" value=""></td>
						</tr>
						
						<tr>
							<td class="label" style="width:150px;">ตำแหน่งวิชาการ</td>
							<td><input type="text" name="user_position" value=""></td>
						</tr>
						
						<tr>
							<td class="label" style="width:150px;">เพศ</td>
							<td>
								<input type="radio" name="user_gender" value="ชาย">ชาย
								<input type="radio" name="user_gender" value="หญิง">หญิง
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">สัญชาติ</td>
							<td><input type="text" name="user_nation" value=""></td>
						</tr>
						
						</table>
						
						<h4>การศึกษาสูงสุด</h4>
						<table class="detailtb">
						
						<tr>
							<td class="label" style="width:150px;">ระดับการศึกษา</td>
							<td>
								<input type="radio" name="user_level_education" value="Bachelor">ปริญญาตรี
								<input type="radio" name="user_level_education" value="Master">ปริญญาโท
								<input type="radio" name="user_level_education" value="PhD.">ปริญญาเอก
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ชื่อปริญญา</td>
							<td><input type="text" name="user_degree" value=""></td>
						</tr>
						
						<tr>
							<td class="label" style="width:150px;">สถานศึกษาที่สำเร็จ</td>
							<td><input type="text" name="user_education" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">เบอร์โทรศัพท์ติดต่อ</td>
							<td><input type="text" name="user_tel" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">Email</td>
							<td><input type="email" name="email" value=""></td>
						</tr>
						</table>
	
						<div style="position:absolute;top:10px;right:10px;">
							<img src="lib-phpthumb?src=&w=120" alt="" style="border:4px solid #ddd;" />
						</div>
						
					</div>
					
				</div>
					 {{ Form::submit('ตกลง'); }}
        			<input type="button" name="cancel" value="cancel" onClick="window.location='http://localhost/ictrm/admin/user/list-users';" />			
				</div>
			</div>
		</div>
	</div>

{{ Form::close(); }}
@stop
