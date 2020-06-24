	$(function () {

	// Base path to maps
	var showDataLabels = false, // Switch for data labels enabled/disabled
		mapCount = 0,
		searchText,
		mapOptions = '';
	  searchText = 'Search ' + mapCount + ' maps';
	  mapOptions = '<option value="custom/world.js">' + searchText + '</option>' + mapOptions;
	$("#mapDropdown").append(mapOptions).combobox();
	// Change map when item selected in dropdown
	$("#mapDropdown").change(function () {
		var $selectedItem = $("option:selected", this),
			mapDesc = $selectedItem.text(),
			mapKey = this.value.slice(0, -3),
			geojsonPath = 'geojson.json',
			javascriptPath = 'static/js/world.js',
			isHeader = $selectedItem.hasClass('option-header');

		// Show loading
		if ($("#container").highcharts()) {
			$("#container").highcharts().showLoading('<i class="fa fa-spinner fa-spin fa-2x"></i>');
		}
		// When the map is loaded or ready from cache...
		function mapReady() {
			var mapGeoJSON = Highcharts.maps[mapKey],
				data = [],
				parent,
				match;

			// Generate non-random data for the map
			$.each(mapGeoJSON.features, function (index, feature) {
				data.push({
					key: feature.properties['hc-key'],
					value: showdata(feature.properties['iso-a3'])
				});
			});

			// Is there a layer above this?
			match = mapKey.match(/^(countries\/[a-z]{2}\/[a-z]{2})-[a-z0-9]+-all$/);
			if (/^countries\/[a-z]{2}\/[a-z]{2}-all$/.test(mapKey)) { // country
				parent = {
					desc: 'World',
					key: 'custom/world'
				};
			} else if (match) { // admin1
				parent = {
					desc: $('option[value="' + match[1] + '-all.js"]').text(),
					key: match[1] + '-all'
				};
			}
			$('#up').html('');
			if (parent) {
				$('#up').append(
					$('<a><i class="fa fa-angle-up"></i> ' + parent.desc + '</a>')
					.attr({
						title: parent.key
					})
					.click(function () {
						$('#mapDropdown').val(parent.key + '.js').change();
					})
				);
			}
			// Instantiate chart
			$("#container").highcharts('Map', {
				title: {
					text: null
				},
				mapNavigation: {
					enabled: true
				},
				colorAxis: {
					min: 0,
					stops: [
						[0, '#EFEFFF'],
						[0.5, Highcharts.getOptions().colors[0]],
						[1, Highcharts.Color(Highcharts.getOptions().colors[0]).brighten(-0.5).get()]
					]
				},
				legend: {
					layout: 'vertical',
					align: 'left',
					verticalAlign: 'bottom'
				},
				series: [{
					data: data,
					mapData: mapGeoJSON,
					joinBy: ['hc-key', 'key'],
					name: 'CO2 emission',
					states: {
						hover: {
							color: Highcharts.getOptions().colors[2]
						}
					},
					dataLabels: {
						enabled: showDataLabels,
						formatter: function () {
							return mapKey === 'custom/world' || mapKey === 'countries/us/us-all' ?
								(this.point.properties && this.point.properties['hc-a2']) :
							this.point.name;
						}
					},
					point: {
						events: {
						}
					}
				}, {
					type: 'mapline',
					name: "Separators",
					data: Highcharts.geojson(mapGeoJSON, 'mapline'),
					nullColor: 'gray',
					showInLegend: false,
					enableMouseTracking: false
				}]
			});
			showDataLabels = $("#chkDataLabels").attr('checked');
		}
		// Check whether the map is already loaded, else load it and
		// then show it async
		if (Highcharts.maps[mapKey]) {
			mapReady();
		} else {
			$.getScript(javascriptPath, mapReady);
		}
	});
	// Trigger change event to load map on startup
	if (location.hash) {
		$('#mapDropdown').val(location.hash.substr(1) + '.js');
	} else { // for IE9
		$($('#mapDropdown option')[0]).attr('selected', 'selected');
	}
	$('#mapDropdown').change();



});

function showdata(data){
	var res = 0;

	$.ajax({
			url: "getData.php?data=" + data,
			async : false,
	    success: function(result){
				 var obj = JSON.parse(result);
				 var ddata = obj.data;
         var restring = JSON.stringify(ddata);
				 if(restring != "0"){
					 restring = restring.substring(1,restring.length);
	         res = parseInt(restring,10);
				 }
		  }
		});
 return res;
}
