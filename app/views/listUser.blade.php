@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<div id="profile" class="post">
			<h2>รายชื่อนักวิจัย</h2>
			
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
				<th>จัดการข้อมูล</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tbusers as $tbu)
            <tr>
				<td class="acenter">{{ $tbu->id; }}</td>
				<td>{{ $tbu->user_prefix; }}</td>
				<td>{{ $tbu->user_fname; }}</td>
				<td>{{ $tbu->user_lname; }}</td>
				<td>{{ $tbu->user_position; }}</td>
				<td class="small-txt">{{ $tbu->user_faculty; }}</td>
				<td class="small-txt">{{ $tbu->user_tel; }}</td>
				<td class="small-txt">{{ $tbu->user_email; }}</td>
				<td class="acenter">
					<a href="{{ action('UserController@getShowUsers', $tbu->id); }}">ดูข้อมูล</a>
					
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
