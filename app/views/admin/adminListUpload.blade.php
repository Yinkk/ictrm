
@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<div id="profile" class="post">
			<h2>หน้าจัดไฟล์ดาวน์โหลด</h2>
			<h2><a href="{{ action('AdminUploadFileController@getUpload'); }}">เพิ่มไฟล์ดาวน์โหลด</a></h2>
			
	<div class="datalist">
		
		<table id="" class="">
		<thead>
			<tr>
				<th>ชื่อหัวข้อไฟล์</th>
				<th>ชื่อไฟล์</th>
				<th>ลบ</th>
			</tr>	
		</thead>
		<tbody>
			@foreach($tbuploads as $tbupload)
            <tr>
				<td>{{ $tbupload->title_upload_file; }}</td>
				<td>{{ $tbupload->file_name; }}</td>
				<td class="acenter">
					<a href="{{ action('AdminUploadFileController@getDelUpload', $tbupload->id); }}">ลบ</a>
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
