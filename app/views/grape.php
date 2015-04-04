<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/js/highcharts.js" type="text/javascript"></script>
</head>


<body>
<div id="container" style="width: 100%; height: 400px">

<script type="text/javascript">

var chart1; // กำหนดให้เป็นตัวแปลโกลบอลของ Javascript 
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'line'
         },
         title: {
            text: 'Fruit Consumption'
         },
         xAxis: {
            categories: ['Apples', 'Bananas', 'Oranges']
         },
         yAxis: {
            title: {
               text: 'Fruit eaten'
            }
         },
         series: [{
            name: 'จำนวนโครงการ',
            data: [10, 20, 30]
         }, {
            name: 'งบประมาณ (บาท)',
            data: [1000, 7000, 10000]
         }]
      });
   });
</script>
</div>
<body>
</html>