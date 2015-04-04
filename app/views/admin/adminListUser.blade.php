@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<div id="profile" class="post">
			<h2>หน้าจัดการข้อมูลักวิจัย</h2>
			<h2><a href="{{ action('AdminUserController@getAddUsers'); }}">เพิ่มนักวิจัย</a></h2>
			
	<div class="datalist">
		
		<table id="profile_list" class="datatb">
		<thead>
			<tr>
				<th>#</th>
				<th>คำนำหน้า</th>
				<th>ชื่อ</th>
				<th>นามสกุล</th>
				<th>ตำแหน่งวิขาการ</th>
				<th>คณะ/หน่วยงาน</th>
				<th>โทรศัพท์</th>
				<th>e-mail</th>
				<th>แก้ไข</th>
				<th>ลบ</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tbu as $tbu)
            <tr>
				<td class="acenter">{{ $tbu->id; }}</td>
				<td>{{ $tbu->user_prefix; }}</td>
				<td>{{ $tbu->user_fname; }}</td>
				<td>{{ $tbu->user_lname; }}</td>
				<td>{{ $tbu->user_position; }}</td>
				<td class="small-txt">{{ $tbu->user_faculty; }}</td>
				<td class="small-txt">{{ $tbu->user_tel; }}</td>
				<td class="small-txt">{{ $tbu->email; }}</td>
				<td class="acenter">
					<a href="{{ action('AdminUserController@getEditUsers', $tbu->id); }}">แก้ไข</a>
				</td>
				<td class="acenter">
					<a href="{{ action('AdminUserController@getDelUsers', $tbu->id); }}">ลบ</a>
				</td>
			</tr>
			@endforeach
        </tbody>
        </table>
	</div>

		</div>
	</div>
</div>
@stop
