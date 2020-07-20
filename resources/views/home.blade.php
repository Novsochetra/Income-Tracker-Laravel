@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    {{ __('You are logged in!') }}
                    <!-- Chart's container -->
                    <canvas id="canvas" style="display: block; height: 666px; width: 1332px;" width="2664" height="1332" class="chartjs-render-monitor"></canvas>
                    <canvas id="chart-0" style="display: block; height: 666px; width: 1332px;" width="2664" height="1332" class="chartjs-render-monitor"></canvas>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
    <script>
		let MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		let lineChartConfig = {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [{
					label: 'My First dataset',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
					fill: false,
				}, {
					label: 'My Second dataset',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Chart.js Line Chart'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				}
			}
        };
        
        let PIE_DATA_COUNT = 5;

        let utils = Samples.utils;

        utils.srand(110);

        function colorize(opaque, hover, ctx) {
            let v = ctx.dataset.data[ctx.dataIndex];
            let c = v < -50 ? '#D60000'
                : v < 0 ? '#F46300'
                : v < 50 ? '#0358B6'
                : '#44DE28';

            let opacity = hover ? 1 - Math.abs(v / 150) - 0.2 : 1 - Math.abs(v / 150);

            return opaque ? c : utils.transparentize(c, opacity);
        }

        function hoverColorize(ctx) {
            return colorize(false, true, ctx);
        }

        function generateData() {
            return utils.numbers({
                count: PIE_DATA_COUNT,
                min: -100,
                max: 100
            });
        }

        let data = {
            datasets: [{
                data: generateData(),
            }]
        };

        let options = {
            legend: false,
            tooltips: false,
            elements: {
                arc: {
                    backgroundColor: colorize.bind(null, false, false),
                    hoverBackgroundColor: hoverColorize
                }
            }
        };

		window.onload = function() {
			let ctxLine = document.getElementById('canvas').getContext('2d');
            window.myLine = new Chart(ctxLine, lineChartConfig);
            
            let ctxPie = document.getElementById('chart-0').getContext('2d');
            
            let pieChart = new Chart(ctxPie, {
                type: 'pie',
                data: data,
                options: options
            });
		};
    </script>
   
@endsection
