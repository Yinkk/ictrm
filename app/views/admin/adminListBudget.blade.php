
@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<div id="profile" class="post">
			<h2>หน้าจัดการปีงบประมาณ</h2>
			<h2><a href="{{ action('AdminBudgetController@getAddBudget'); }}">เพิ่มปีงบประมาณ</a></h2>
			
	<div class="datalist">
		
		<table id="" class="">
		<thead>
			<tr>
				<th>ปีงบประมาณ</th>
				<th>งบประมาณ</th>
				<th>แก้ไข</th>
				<th>ลบ</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tbb as $tbb)
            <tr>
				<td>{{ $tbb->budget_year; }}</td>
				<td>{{ $tbb->budget; }}</td>
				<td class="acenter">
					<a href="{{ action('AdminBudgetController@getEditBudget', $tbb->id); }}">แก้ไข</a>
				</td>
				<td class="acenter">
					<a href="{{ action('AdminBudgetController@getDelBudget', $tbb->id); }}">ลบ</a>
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
