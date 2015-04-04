@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<div id="profile" class="post">
			<h2>หน้าจัดการข่าวประชาสัมพันธ์</h2>
			<h2><a href="{{ URL::to('testAdmin'); }}">หน้าหลัก Admin</a></h2>
			<h2><a href="{{ action('AdminNewsController@getAddNews'); }}">เพิ่มข่าว</a></h2>
			
	<div class="datalist">
		
		<table id="" class="">
			<thead>
				<tr>
					<th>id</th>
					<th>หัวข้อข่าวประชาสัมพันธ์</th>
					<th>แก้ไข</th>
					<th>ลบ</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tbn as $tbnews)

	            <tr>
					<td>{{ $tbnews->id; }}</td>
					<td>{{ $tbnews->titleNews; }}</td>
					<td><a href="{{ action('AdminNewsController@getEditNews', $tbnews->id); }}">แก้ไข</a></td>
					<td><a href="{{ action('AdminNewsController@getDelNews', $tbnews->id); }}">ลบ</a></td>
				</tr>	
				@endforeach
	        </tbody>
        </table>
	</div>
		</div>
	</div>
</div>
@stop