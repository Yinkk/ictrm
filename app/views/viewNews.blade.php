@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<h2>ระบบบริหารงานวิจัย</h2>
			<div class="box-container ui-sortable">
				    <div id="summary-count" class="box">
						<h3 class="box-title">ข่าวสารประชาสัมพันธ์</h3>
				            <div>
				                <table class="table">                 
				                    <tbody>
				                        <tr>
				                           
				                            <td>{{ $tbn->titleNews; }}</td>
				                            
				                        </tr>
				                        <tr>
				                           
				                            <td>{{ $tbn->detailNews; }}</td>
				                        </tr>
				                    </tbody>
				                </table>
				            </div>
					</div>
			</div>
	</div>
</div>
		
@stop