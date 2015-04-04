@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<div id="profile" class="post">
			<h2>รายการโครงการวิจัย</h2>
				<div class="datalist">
					<table>
						<ul>
						<?php $tbbs = BudgetModel::all(); ?>
					    	@foreach($tbbs as $tbb)

								<?php $projects = ProjectModel::where('project_year', '=', $tbb->budget_year)->get();?>

								<li>ปีงบประมาณ {{ $tbb->budget_year }}</li>
									<ul>
										@foreach($projects as $project)
											<li><a href="fileUpload/project_file/{{ $project->project_file_name }}"> {{ $project->project_name }} </a></li>
										@endforeach						
									</ul>
							@endforeach
						</ul>
			        </table>
				</div>
		</div>
	</div>
</div>
@stop
