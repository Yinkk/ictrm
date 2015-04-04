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
                    <tr>
				<td class="acenter">464</td>
				<td>นางสาว</td>
				<td>ณภัทร</td>
				<td>ชาธิรัตน์</td>
				<td>อาจารย์</td>
				<td class="small-txt">คณะวิทยาศาสตร์และเทคโนโลยี</td>
				<td class="small-txt">+66 9132424 ext. 195 0922596188</td>
				<td class="small-txt">naphat.cha@rmutp.ac.th</td>
				<td class="acenter">
					<a href="{{ URL::to('viewProfile'); }}">ดูข้อมูล</a>
					
				</td>
			</tr>
                </tbody>
                </table>
	</div>

		</div>
	</div>
</div>
@stop
