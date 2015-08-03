@extends('smphtemplate')

	@section('content')
		<div id="container" style="width:100%; height:400px;"></div>

		<script>
			$(function () { 
			    $('#container').highcharts({
			        chart: {
			            type: 'bar'
			        },
			        title: {
			            text: 'Space by Building - Whole School'
			        },
			        xAxis: {
			            categories: ['']
			        },
			        yAxis: {
			            title: {
			                text: 'Total SF'
			            }
			        },
			        series: [{
			            name: 'WARF',
			            data: [43153.799]
			        }, {
			            name: 'WIMR',
			            data: [315033.09]
			        }]
			    });
			});
		</script>

	@stop