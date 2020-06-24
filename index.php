<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- 所有地图数据详情见：https://img.hcharts.cn/mapdata/index.html -->

<link rel="icon" href="static/img/favicon.ico">
<link href="static/css/jquery-ui.css" rel="stylesheet">
<link href="static/css/font-awesome.css" rel="stylesheet">
<link href="static/css/index.css" rel="stylesheet">
<script src="static/js/jquery.min.js"></script>
<script src="static/js/highmaps.js"></script>
<script src="static/js/exporting.js"></script>
<script src="static/js/index.js"></script>
<script src="static/js/jquery-ui.js"></script>
<script src="static/js/jquery.combobox.js"></script>
<script src="static/js/main.js"></script>

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
