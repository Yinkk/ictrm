@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<div id="profile-list" class="post">
			<h2>Admin Page</h2>		
				<div class="datalist">		
					<table id="profile_list" class="datatb">
						<tbody>
							<tr>
								<td><a href="{{ action('AdminBudgetController@getListBudget'); }}">ปีงบประมาณ</a></td>
							</tr>
				            <tr>
								<td><a href="{{ action('AdminNewsController@getListNews'); }}">ข่าวประชาสัมพันธ์</a></td>
							</tr>
							<tr>
								<td><a href="{{ action('AdminUserController@getListUsers'); }}">ข้อมูลนักวิจัย</a></td>
							</tr>
							<tr>
								<td><a href="{{ action('AdminProjectController@getListProject'); }}">โครงการวิจัย</a></td>
							</tr>
							<tr>
								<td><a href="{{ action('AdminUploadFileController@getListUpload'); }}">ไฟล์ดาวน์โหลด</a></td>
							</tr>
				        </tbody>
			        </table>
				</div>

		</div>
	</div>
</div>
@stop
