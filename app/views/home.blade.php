@extends('layout.master')
@section('content')

<div id="content">
	<div id="main">
		<div id="home" class="post">
			<h2>ระบบบริหารงานวิจัย</h2>
                                  
	<div class="box-container ui-sortable">
                <div id="summary-count" class="box">
					<h3 class="box-title">ข่าวสารประชาสัมพันธ์</h3>
                        <div>
                            <table class="table">
                              
                                <tbody>
                                    @foreach($tbnews as $tbn)
   
                                    <tr>
                                        <td>{{ $tbn->id }}</td>
                                        <td><a href="{{ action('NewsController@getShowNews', $tbn->id) }}" title="">{{ $tbn->titleNews }}</a>{{ $tbn->created_at }}<!-- {{ $tbn->created_at }} --></td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
				</div>
		
		<div id="amount-per-year" class="box">
			<h3 class="box-title">งบประมาณจำแนกตามปี</h3>
			<div class="box-content">
			<!-- <div id="chart-amount-per-year" class="jqplot-target" style="position: relative; height: 300px;"><canvas width="1044" height="300" class="jqplot-base-canvas" style="position: absolute; left: 0px; top: 0px;"></canvas><div class="jqplot-title" style="height: 0px; width: 0px;"></div><div class="jqplot-axis jqplot-xaxis" style="position: absolute; width: 1044px; height: 46px; left: 0px; bottom: 0px;"><canvas width="76" height="16" class="jqplot-xaxis-label" style="position: absolute; left: 496.5px; bottom: 0px;"></canvas><div class="jqplot-xaxis-tick" style="position: absolute; font-size: 9pt; left: 142.05px;">n/a</div><div class="jqplot-xaxis-tick" style="position: absolute; font-size: 9pt; left: 224.65px;">2549</div><div class="jqplot-xaxis-tick" style="position: absolute; font-size: 9pt; left: 309.75px;">2550</div><div class="jqplot-xaxis-tick" style="position: absolute; font-size: 9pt; left: 394.85px;">2551</div><div class="jqplot-xaxis-tick" style="position: absolute; font-size: 9pt; left: 479.95px;">2552</div><div class="jqplot-xaxis-tick" style="position: absolute; font-size: 9pt; left: 565.05px;">2553</div><div class="jqplot-xaxis-tick" style="position: absolute; font-size: 9pt; left: 650.15px;">2554</div><div class="jqplot-xaxis-tick" style="position: absolute; font-size: 9pt; left: 735.25px;">2555</div><div class="jqplot-xaxis-tick" style="position: absolute; font-size: 9pt; left: 820.35px;">2556</div><div class="jqplot-xaxis-tick" style="position: absolute; font-size: 9pt; left: 905.45px;">2557</div></div><div class="jqplot-axis jqplot-yaxis" style="position: absolute; height: 300px; width: 99px; left: 0px; top: 0px;"><div class="jqplot-yaxis-tick" style="position: absolute; font-size: 9pt; top: 234px;">0.00 บาท</div><div class="jqplot-yaxis-tick" style="position: absolute; font-size: 9pt; top: 175.5px;">8,540,867.50 บาท</div><div class="jqplot-yaxis-tick" style="position: absolute; font-size: 9pt; top: 117px;">17,081,735.00 บาท</div><div class="jqplot-yaxis-tick" style="position: absolute; font-size: 9pt; top: 58.5px;">25,622,602.50 บาท</div><div class="jqplot-yaxis-tick" style="position: absolute; font-size: 9pt; top: 0px;">34,163,470.00 บาท</div></div><div class="jqplot-axis jqplot-y2axis" style="position: absolute; height: 300px; width: 64px; right: 0px; top: 0px;"><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 234px;">0 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 218.4px;">10 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 202.8px;">20 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 187.2px;">30 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 171.6px;">40 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 156px;">50 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 140.4px;">60 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 124.80000000000001px;">70 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 109.2px;">80 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 93.6px;">90 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 78px;">100 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 62.400000000000006px;">110 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 46.80000000000001px;">120 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 31.19999999999999px;">130 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 15.599999999999994px;">140 โครงการ</div><div class="jqplot-y2axis-tick" style="position: absolute; font-size: 9pt; top: 0px;">150 โครงการ</div></div><canvas width="1044" height="300" class="jqplot-grid-canvas" style="position: absolute; left: 0px; top: 0px;"></canvas><canvas width="851" height="234" class="jqplot-series-shadowCanvas" style="position: absolute; left: 109px; top: 10px; display: block;"></canvas><canvas width="851" height="234" class="jqplot-series-shadowCanvas" style="position: absolute; left: 109px; top: 10px; display: block;"></canvas><canvas width="851" height="234" class="jqplot-series-canvas" style="position: absolute; left: 109px; top: 10px; display: block;"></canvas><canvas width="851" height="234" class="jqplot-series-canvas" style="position: absolute; left: 109px; top: 10px; display: block;"></canvas><table class="jqplot-table-legend" style="right: 84px; top: 10px;"><tbody><tr class="jqplot-table-legend"><td class="jqplot-table-legend jqplot-table-legend-swatch" style="text-align: center; padding-top: 0px;"><div class="jqplot-table-legend-swatch-outline"><div class="jqplot-table-legend-swatch" style="background-color: rgb(75, 178, 197); border-color: rgb(75, 178, 197);"></div></div></td><td class="jqplot-table-legend jqplot-table-legend-label" style="padding-top: 0px;">จำนวนโครงการ</td></tr><tr class="jqplot-table-legend"><td class="jqplot-table-legend jqplot-table-legend-swatch" style="text-align: center;"><div class="jqplot-table-legend-swatch-outline"><div class="jqplot-table-legend-swatch" style="background-color: rgb(234, 162, 40); border-color: rgb(234, 162, 40);"></div></div></td><td class="jqplot-table-legend jqplot-table-legend-label">งบประมาณ (บาท)</td></tr></tbody></table><canvas width="851" height="234" class="jqplot-highlight-canvas" style="position: absolute; left: 109px; top: 10px;"></canvas><div class="jqplot-highlighter-tooltip" style="position: absolute; display: none;"></div><canvas width="851" height="234" class="jqplot-lineRenderer-highlight-canvas" style="position: absolute; left: 109px; top: 10px;"></canvas><canvas width="851" height="234" class="jqplot-lineRenderer-highlight-canvas" style="position: absolute; left: 109px; top: 10px;"></canvas><canvas width="851" height="234" class="jqplot-event-canvas" style="position: absolute; left: 109px; top: 10px;"></canvas></div>
			</div> -->
			<div id='chart-amount-per-year'></div>
		</div>
	</div>
</div>
</div>
</div>
</div>
@stop