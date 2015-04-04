
@extends('layout.master')
@section('content')

{{ Form::open(array('action' => 'AdminProjectController@postEditProject')) }}
{{ Form::token(); }}
<div id="content">
	<div id="main">

		<div id="profile-detail" class="post form-edit">
			<h2>หน้าแก้ไขข้อมูลโครงการวิจัย</h2>			

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
							<input name="project_id" type="hidden" value="{{ $tbp->id; }}">
							<td class="label" style="width:150px;">เลขที่สัญญา</td>
							<td><input type="text" name="project_contract" value="{{ $tbp->project_contract; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ชื่อโครงการวิจัย</td>
							<td><input type="text" name="project_name" value="{{ $tbp->project_name; }}"></td>
						</tr>
						<tr>
						<td class="label" style="width:150px;">ปีงบประมาณ</td>
						    <td>
						        <?php $tbbs = BudgetModel::all();?>

						    	<select name="project_year">

							    	@foreach($tbbs as $tbb)
							    		<?php $selected = "";
											if ($tbb->budget_year == $tbp->project_year){
												$selected = 'selected';

											}
										?>
							    		<option value="{{ $tbb->budget_year; }}" {{ $selected }}>{{ $tbb->budget_year; }}</option>
							    		
							    	@endforeach

						         </select>
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">งบประมาณดำเนินงาน</td>
							<td><input type="text" name="project_budget" value="{{ $tbp->project_budget; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ระยะเวลาดำเนินโครงการวิจัย</td>
							<td><input type="text" name="project_period" value="{{ $tbp->project_period; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">เริ่มโครงการวิจัย</td>
							<td><input type="text" name="project_start" value="{{ $tbp->project_start; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">สิ้นสุดโครงการโครงการวิจัย</td>
							<td><input type="text" name="project_finish" value="{{ $tbp->project_finish; }}"></td>
						</tr>
						
						<tr>
							<td class="label" style="width:150px;">ขยายเวลาโครงการวิจัย</td>
							<td><input type="text" name="project_extend" value="{{ $tbp->project_extend; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">รายละเอียดโครงการ</td>
							<td><input type="text" name="project_memo" value="{{ $tbp->project_memo; }}"></td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ชื่อหัวหน้าโครงการผู้รับทุน</td>
							<td>
								<?php
					
									$headProjects = $tbp->users->filter(function($user){
										return $user->pivot->project_head;
									});
									$headProject = $headProjects[0];
						
									//print_r($headProjects);
								
								?>
								
								<select name="user_id[]">
									<option>--ชื่อหัวหน้าโครงการ--</option>
									

									@foreach($users as $tbu)

										<?php
											$selected = "";
											if ($tbu->id == $headProject->id){
												$selected = 'selected';
											}
										 ?>
									
										<option value="{{ $tbu->id; }}" {{ $selected }} >{{ $tbu->user_prefix." ".$tbu->user_fname." ".$tbu->user_lname; }}</option>

									@endforeach
								</select>
								
								คิดเป็นร้อยละ<input type="text" name="percent[]" value="{{ $headProject->pivot->percent}}">	
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ผู้ร่วมโครงการวิจัยภายใน(ถ้ามี)</td>
							<td>

								<?php
									$index_percent =0;
									$percent = array();
									$headProjects = $tbp->users->filter(function($user){
										return $user->pivot->project_head != true;
									});

									foreach ($headProjects as $user){
										$percent[$index_percent++] = $user->pivot->percent;
									}

									//$headProject = $headProjects[0];
									//print_r($headProjects);
								?>

								<select name="user_id[]">
									<option>--ชื่อผู้ร่วมโครงการ--</option>
									
									@foreach($users as $tbu)

										<?php
											$selected = "";
											if ($headProjects->contains($tbu->id)){
												$selected = 'selected';

											}
										 ?>

										<option value="{{ $tbu->id; }}" {{ $selected }}>{{ $tbu->user_prefix." ".$tbu->user_fname." ".$tbu->user_lname; }}</option>

									@endforeach

								</select>
								@foreach($percent as $p)
								คิดเป็นร้อยละ<input type="text" name="percent[]" value="{{$p}}">	
								@endforeach
							</td>
						</tr>
						<tr>
							<td class="label" style="width:150px;">ผู้ร่วมโครงการวิจัยภายนอก</td>
							<td><textarea name="project_join_external" cols="30" rows="4">{{ $tbp->project_join_external; }}</textarea></td>
						</tr>

					</table>
					
					</div>
					 {{ Form::submit('ตกลง'); }}
        			<input type="button" name="cancel" value="cancel" onClick="window.location='http://localhost/ictrm/admin/project/list-project';" />			
				</div>
			</div>
		</div>
	</div>

{{ Form::close(); }}
@stop

