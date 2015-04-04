<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>ระบบบริหารงานวิจัย คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยพะเยา</title>
<meta name="keywords" content="ระบบบริหารงานวิจัย,คณะเทคโนโลยีสารสนเทศและการสื่อสาร,มหาวิทยาลัยพะเยา">
<meta name="description" content="ระบบบริหารงานวิจัย คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยพะเยา">
<!-- 
{{ HTML::style('css/bootstrap-responsive.css') }}
{{ HTML::style('css/bootstrap-responsive.min.css') }}
{{ HTML::style('css/bootstrap.css') }} -->
{{ HTML::style('css/default.css') }}
{{ HTML::style('css/jquery-ui-1.8.16.custom.css') }}
{{ HTML::style('css/jquery.jqplot.min.css') }}

<!--{{ HTML::style('css/bootstrap.min.css') }}-->

{{ HTML::script('js/jquery-1.6.2.min.js') }}
{{ HTML::script('js/jquery-ui-1.8.16.custom.min.js') }}
{{ HTML::script('js/jquery.cookie.js') }}
{{ HTML::script('js/global.js') }}
{{ HTML::script('js/jquery.jqplot.min.js') }}
{{ HTML::script('js/jqplot.canvasTextRenderer.min.js') }}
{{ HTML::script('js/jqplot.highlighter.min.js') }}
{{ HTML::script('js/jqplot.canvasAxisLabelRenderer.min.js') }}
{{ HTML::script('js/jqplot.categoryAxisRenderer.min.js') }}
{{ HTML::script('js/home.js') }}
{{ HTML::script('js/bootstrap.js') }}
<!--{{ HTML::script('js/bootstrap.min.js') }}-->

<!-- js for viewProfile -->
{{ HTML::script('js/profile-detail.js') }}

<!-- js for profileList -->
{{ HTML::style('css/ColVis.css') }}
{{ HTML::script('js/jquery.dataTables.min.js') }}
{{ HTML::script('js/ColVis.min.js') }}
{{ HTML::script('js/profile-list.js') }}


<script type="text/javascript">
$(document).ready(function(){
	<?php
	$objs = DB::table('project')->select('project_year',DB::raw('count(*) as project_count'))->groupBy('project_year')->get();
	// select project_year , count(*) as project_count from project group by project_year
	$line2 = '';
	foreach ($objs as $obj) {
		$line2 = $line2."[".$obj->project_year.",".$obj->project_count."],";
		
	}

	$budgets = DB::table('tbbudget')->select('budget_year','budget')->get();
	$line1 = '';
	foreach ($budgets as $obj) {
		$line1 = $line1."[".$obj->budget_year.",".$obj->budget."],";
	}
	
	?>
	
	//var line1=[["n/a",1000000.00],["2549",1000000.00],["2550",1000000.00],["2551",1000000.00],["2552",1000000.00],["2553",1000000.00],["2554",1000000.00],["2555",1000000.00],["2556",1000000.00],["2557",1000000.00]];
	//var line2=[["n/a",35],["2549",5],["2550",6],["2551",13],["2552",16],["2553",56],["2554",114],["2555",136],["2556",118],["2557",131]];
	
	var line1 = [{{$line1}}];
	var line2 = [{{$line2}}];

	var plot1 = $.jqplot ("chart-amount-per-year", [line2, line1], {
		axesDefaults: {
			// labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
			tickOptions: {
				fontSize: "9pt"
			}
		},
		seriesDefaults: {
			rendererOptions: {smooth: true, animation: {show: true}}
        },
		series:[{label:"จำนวนโครงการ", xaxis:"xaxis", yaxis:"y2axis"}, {label:"งบประมาณ (บาท)"}],
		axes: {
			xaxis: {
				label: "ปีงบประมาณ",
				renderer: $.jqplot.CategoryAxisRenderer
			},
			yaxis:{
				tickOptions:{ formatString: "%.2f บาท" },
				tickInterval: 1000000,
				min: 0
			},
			y2axis:{
				autoscale:true,
				min: 0,
				tickInterval: 1,
				tickOptions:{ formatString:"%i โครงการ", showGridline: false}
			}
		}, 
		highlighter: {
			show: true,
			tooltipAxes: "y"
		},
		legend:{show:true}
	});
	
});
</script>

</head>
<body>
<div id="header">
	<div id="logo">
		<div id="txt">
			  	ระบบบริหารงานวิจัย
				<div id="txt2">คณะเทคโนโลยสารสนเทศและการสื่อสาร มหาวิทยาลัยพะเยา</div>
		</div>
	</div>
</div>
<div id="menu">
	<ul>
		<li class="first"><a href="{{ URL::to('/') }}" title="Home">หน้าหลัก</a></li>

		<li><a href="{{ URL::to('login') }}" title="เข้าสู่ระบบ">เข้าสู่ระบบ</a></li>

		<li><a href="{{ action('UserController@getListUsers') }}" title="ข้อมูลนักวิจัย">ข้อมูลนักวิจัย</a></li>
		<li><a href="{{ URL::to('listProject') }}" title="ข้อมูลงานวิจัย">ข้อมูลงานวิจัย</a></li>
		<li><a href="{{ URL::to('docDownload') }}" title="เอกสารดานว์โหลด">เอกสารดาวน์โหลด</a></li>
		<li><a href=""  title="คู่มือการใช้งาน">คู่มือการใช้งาน</a></li>
		<li>
			<!-- {{ $user_id = Session::get('user_id') }} -->

			@if(Auth::check())
				<li><a href="{{ URL::to('adminPage') }}"  title="ผู้ดูแลระบบ">ผู้ดูแลระบบ</a></li>
				<a>{{ Auth::user()->user_fname }}</a>
				<a href="{{ action('LoginController@getLogout') }}">ออกจากระบบ</a>
			@endif
		</li>
		<li></li>
	</ul>
</div>


		@yield('content')
	

<div id="footer">
	<p id="legal">ระบบบริหารงานวิจัย คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยพะเยา</p>
	<p id="links"><a href="">ICTMR</a></p>
</div>

</body>
</html>