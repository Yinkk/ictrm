@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
	
		<div id="profile-detail" class="post form-edit">
			<h2>ข้อมูลประวัตินักวิจัย: {{ $tbu->user_fname; }} {{ $tbu->user_lname; }}</h2>			

			<div class="profile-detail-form">
				<ul>
					<li><a href="#tabs-1">ประวัตินักวิจัย</a></li>
					<li><a href="#tabs-2">โครงการวิจัยที่เกี่ยวข้อง</a></li>
					
				</ul>
				<div id="tabs-1">
				
					<div style="padding: 10px 0;position:relative;">
					
						<h4>ข้อมูลทั่วไป</h4>
						<table class="detailtb">

						<tr>
							<td class="label" style="width:150px;">ชื่อ - นามสกุล (th)</td>
							<td><span class="datavalue">{{ $tbu->user_fname; }} {{ $tbu->user_lname; }}</span></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">คณะ/หน่วยงาน</td>
							<td><span class="datavalue">{{ $tbu->user_faculty; }}</span></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">สาขาวิชา</td>
							<td><span class="datavalue">{{ $tbu->user_major; }}</span></td>
						</tr>
						
						<tr>
							<td class="label" style="width:150px;">ตำแหน่งวิชาการ</td>
							<td><span class="datavalue">{{ $tbu->user_position; }}</span></td>
						</tr>
						
						<tr>
							<td class="label" style="width:150px;">เพศ</td>
							<td><span class="datavalue">{{ $tbu->user_gender; }}</span></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">สัญชาติ</td>
							<td><span class="datavalue">{{ $tbu->user_nation; }}</span></td>
						</tr>
						
						</table>
						
						<h4>การศึกษาสูงสุด</h4>
						<table class="detailtb">
						
						<tr>
							<td class="label" style="width:150px;">ระดับการศึกษา</td>
							<td><span class="datavalue">{{ $tbu->user_level_education; }}</span></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ชื่อปริญญา</td>
							<td><span class="datavalue">{{ $tbu->user_degree; }}</span></td>
						</tr>
						
						<tr>
							<td class="label" style="width:150px;">สถานศึกษาที่สำเร็จ</td>
							<td><span class="datavalue">{{ $tbu->user_education; }}</span></td>
						</tr>
						</table>
						
						
						<div style="position:absolute;top:10px;right:10px;">
							<img src="lib-phpthumb?src=&w=120" alt="{{ $tbu->user_fname; }} {{ $tbu->user_lname; }}" style="border:4px solid #ddd;" />
						</div>
						
					</div>
					
				</div>

				<div id="tabs-2">
					
					<div style="padding: 10px 0;">
						
						<h4>โครงการวิจัยที่เกี่ยวข้อง</h4>
						<ol class="list-menu">
							<?php
									$headProjects = $tbu->projects->filter(function($project){
										return $project->pivot->project_head;
									});
							?>
							@foreach ( $headProjects as $project)
								<li><a href="/laravelProject/ictrm/fileUpload/project_file/{{ $project->project_file_name }}"> {{ $project->project_name; }}</a></li>
							@endforeach
						</ol>

						<h4>ผู้ร่วมวิจัย</h4>
						<ol class="list-menu">
							<?php
									$headProjects = $tbu->projects->filter(function($project){
										return $project->pivot->project_head != true;
									});
							?>
							@foreach ( $headProjects as $project)
								<li><a href="/laravelProject/ictrm/fileUpload/project_file/{{ $project->project_file_name }}">{{ $project->project_name; }}</a></li>
							@endforeach
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

