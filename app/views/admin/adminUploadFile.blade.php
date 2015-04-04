@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<h2>ระบบบริหารงานวิจัย</h2>
			<div class="box-container ui-sortable">
				    <div id="summary-count" class="box">
						<h3 class="box-title">อัพโหลดไฟล์</h3>
				            <div>
				            	{{ Form::open(array('action' => 'AdminUploadFileController@postUpload', 'files'=>true)) }}
				            	<table class="table">                 
				                    <tbody>
				                        <tr>
				                            <td>{{ Form::label('ชื่อไฟล์ดาวน์โหลด') }}{{ Form::text('titleUploadFile') }}</td>
				                        </tr>
				                        <tr>
				                            <td>{{ Form::label('Upload photo') }}{{ Form::file('photo', array('class'=>'form-control')) }}</td>
				                        </tr>
				                         <tr>
				                            <td>{{ Form::submit('อัพโหลด', array('class'=>'btn-lg btn-success')) }}</td>
				                        </tr>
				                    </tbody>
				                </table>
								{{ Form::close() }}
							</div>
					</div>
			</div>
	</div>
</div>
@stop