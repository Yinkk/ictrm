@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<div id="profile" class="post">
			<h2>หน้าจัดการโครงการวิจับ</h2>
			<h2><a href="{{ URL::to('testAdmin'); }}">หน้าหลัก Admin</a></h2>
			<h2><a href="{{ action('AdminProjectController@getAddProject'); }}">เพิ่มโครงการวิจัย</a></h2>
			
	<div class="datalist">
		
		<table id="profile_list" class="">
			<thead>
				<tr>
					<th>เลขที่สัญญา</th>
					<!-- <th>ประเภทโครงการวิจัย</th>
					<th>สถานะของโครงการวิจัย</th> -->
					<th>ชื่อโครงการวิจัย</th>
					<th>งบประมาณดำเนินงาน</th>
					<th>ระยะเวลาดำเนินโครงการวิจัย</th>
					<th>เริ่มโครงการวิจัย</th>
					<th>สิ้นสุดโครงการโครงการวิจัย</th>
					<th>ขยายเวลาโครงการวิจัย</th>
					<th>บทคัดย่อ</th>
					<th>รายละเอียดโครงการ</th>
					<th>ชื่อหัวหน้าโครงการผู้รับทุน</th>
					<th>แก้ไข</th>
					<th>ลบ</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tbp as $tbp)
	            <tr>
	            	<td>{{ $tbp->project_contract; }}</td>
					<!-- <td>{{ $tbp->type_id; }}</td>
					<td>{{ $tbp->status_id; }}</td> -->
					<td>{{ $tbp->project_name; }}</td>
					<td>{{ $tbp->project_budget; }}</td>
					<td>{{ $tbp->project_period; }}</td>
					<td>{{ $tbp->project_start; }}</td>
					<td>{{ $tbp->project_finish; }}</td>
					<td>{{ $tbp->project_extend; }}</td>
					<td>{{ $tbp->project_abs; }}</td>
					<td>{{ $tbp->project_memo; }}</td>
					<td>{{ $tbp->user_id; }}</td>
					<td><a href="{{ action('AdminProjectController@getEditProject', $tbp->id); }}">แก้ไข</a></td>
					<td><a href="{{ action('AdminProjectController@getDelProject', $tbp->id); }}">ลบ</a></td>
				</tr>	
				@endforeach
	        </tbody>
        </table>
	</div>
		</div>
	</div>
</div>
@stop

