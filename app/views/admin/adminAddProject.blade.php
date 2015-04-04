
@extends('layout.master')
@section('content')

{{ Form::open(array('action' => 'AdminProjectController@postAddProject', 'files' => 'true')) }}
{{ Form::token(); }}

<div id="content">
	<div id="main">

		<div id="profile-detail" class="post form-edit">
			<h2>หน้าเพิ่มข้อมูลโครงการวิจัย</h2>			

			<div class="profile-detail-form">
				<ul>
					<li><a href="#tabs-1">โครงการวิจัย</a></li>
					<!--<li><a href="#tabs-2">โครงการวิจัยที่เกี่ยวข้อง</a></li>
					<li><a href="#tabs-3">ผลงาน</a></li>-->
				</ul>
				<div id="tabs-1">
				
					<div style="padding: 10px 0;position:relative;">
						<table class="detailtb">
						<tr>
							<td class="label" style="width:150px;">สัญญาเลขที่</td>
							<td><input type="text" name="project_contract" value=""></td>
						</tr>
						<!-- <tr>
							<td class="label" style="width:150px;">ประเภทโครงการวิจัย</td>
							<td><input type="text" name="type_id" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">สถานะของโครงการวิจัย</td>
							<td><input type="text" name="status_id" value=""></td>
						</tr> -->
						<tr>
							<td class="label" style="width:150px;">ชื่อโครงการวิจัย</td>
							<td><input type="text" name="project_name" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ปีงบประมาณ</td>
						    <td>
						    	<?php $tbbs = BudgetModel::all(); ?>
						    	<select name="project_year">

						    	@foreach($tbbs as $tbb)
						    		
						    	<option value="<?php echo $tbb->budget_year;?>">{{ $tbb->budget_year; }}</option>
						    		
						    	@endforeach
						         </select>
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">งบประมาณดำเนินงาน</td>
							<td><input type="text" name="project_budget" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ระยะเวลาดำเนินโครงการวิจัย</td>
							<td><input type="text" name="project_period" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">เริ่มโครงการวิจัย</td>
							<td><input type="text" name="project_start" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">สิ้นสุดโครงการโครงการวิจัย</td>
							<td><input type="text" name="project_finish" value=""></td>
						</tr>
						
						<tr>
							<td class="label" style="width:150px;">ขยายเวลาโครงการวิจัย</td>
							<td><input type="text" name="project_extend" value=""></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">รายละเอียดโครงการ</td>
							<td><textarea name="project_memo" cols="30" rows="4"></textarea></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ชื่อหัวหน้าโครงการผู้รับทุน</td>
							<td>
								<select name="user_id[]">
									<option>--ชื่อหัวหน้าโครงการ--</option>
									@foreach($tbus as $tbu)

										<option value="{{ $tbu->id; }}">{{ $tbu->user_prefix." ".$tbu->user_fname." ".$tbu->user_lname; }}</option>

									@endforeach
								</select>
								
								คิดเป็นร้อยละ<input type="text" name="percent[]" value="100">	
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ผู้ร่วมโครงการวิจัยภายใน(ถ้ามี)</td>
							<td>
								<select name="user_id[]">
									<option>--ชื่อผู้ร่วมโครงการ--</option>
									@foreach($tbus as $tbu)
									
									<option value="{{ $tbu->id; }}">{{ $tbu->user_prefix." ".$tbu->user_fname." ".$tbu->user_lname; }}</option>

									@endforeach
								</select>
								คิดเป็นร้อยละ<input type="text" name="percent[]" value="100">	
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ผู้ร่วมโครงการวิจัยภายนอก</td>
							<td><textarea name="project_join_external" cols="30" rows="4"></textarea></td>
						</tr>
					</table>
					
				                       
				        {{ Form::label('อัพโหลดไหล์') }}{{ Form::file('project_file', array('class'=>'form-control')) }}</td>

				        {{ Form::submit('อัพโหลด', array('class'=>'btn-lg btn-success')) }}</td>
					
					</div>
					 {{ Form::submit('ตกลง'); }}
        			<input type="button" name="cancel" value="cancel" onClick="window.location='http://localhost/ictrm/admin/project/list-project';" />			
				</div>
			</div>
		</div>
	</div>

{{ Form::close(); }}
@stop

