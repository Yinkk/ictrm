@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<div id="profile" class="post">
			<h2>ดาวน์โหลดแบบฟอร์ม สำหรับบุคลากร</h2>
			
				<div class="datalist">
					
					<table>
						<ul>
							<?php $tbuploads = UploadModel::all(); ?>
							@foreach($tbuploads as $tbupload)


								<li><a href="fileUpload/document_file/{{ $tbupload->file_name }}">{{ $tbupload->title_upload_file }}</a></li>
							
							@endforeach
						<ul>
			        </table>
				</div>
		</div>
	</div>
</div>
@stop
