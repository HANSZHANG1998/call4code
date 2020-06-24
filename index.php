<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- 所有地图数据详情见：https://img.hcharts.cn/mapdata/index.html -->

<link rel="icon" href="https://jscdn.com.cn/highcharts/images/favicon.ico">
<link href="https://img.hcharts.cn/libs/jquery-ui/themes/base/jquery-ui.css" rel="stylesheet">
<link href="https://img.hcharts.cn/libs/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<script src="https://code.highcharts.com.cn/jquery/jquery-1.8.3.min.js"></script>
<script src="https://code.highcharts.com.cn/highmaps/highmaps.js"></script>
<script src="https://code.highcharts.com.cn/highcharts/modules/exporting.js"></script>
<script src="https://img.hcharts.cn/mapdata/index.js"></script>
<script src="https://img.hcharts.cn/libs/jquery-ui/jquery-ui.js"></script>
<script src="https://img.hcharts.cn/static/common/jquery.combobox.js"></script>
<script src="main.js"></script>

</head>
<body>

<div id="demo-wrapper">
	<div id="mapBox">
		<div id="up"></div>
		<div class="selector">
			<button id="btn-prev-map" class="prev-next"><i class="fa fa-angle-left"></i></button>
			<select id="mapDropdown" class="ui-widget combobox"></select>
			<button id="btn-next-map" class="prev-next"><i class="fa fa-angle-right"></i></button>
		</div>
		<div id="container"></div>
	</div>
</div>
</body>
</html>
