@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                    <div class="mt-3">

                    <canvas id="chart-0" style="display: block; height: 666px; width: 1332px;" width="2664" height="1332" class="chartjs-render-monitor"></canvas>
                    </div>
    
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
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', "Argust", "September", "October", "November", "December"],
				datasets: [{
					label: 'Expense',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
						500,
						700,
						300,
						200,
						300,
                        300,
                        400,
                        900,
                        100,
                        200,
                        200,
                        500
					],
					fill: false,
				}, {
					label: 'Income',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						1000,
						1000,
						1500,
						2000,
						1000,
                        2000,
                        1000,
                        1000,
                        1200,
                        1300,
                        1200,
                        1100
					],
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: '2019 Expense & Income'
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
							display: false,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Amount ($)'
						}
					}]
				}
			}
        };
        
        let PIE_DATA_COUNT = 3;
        let PIE_DATA = [600, 400, 1000]

        let utils = Samples.utils;

        utils.srand(360);

        function colorize(opaque, hover, ctx) {
            let v = ctx.dataset.data[ctx.dataIndex];
            let colors = ["#679b9b", "#e36387", "#a6dcef"]
            let c = colors[ctx.dataIndex];


            let opacity = hover ? 1 - Math.abs(v / 150) - 0.2 : 1 - Math.abs(v / 150);

            return opaque ? c : utils.transparentize(c, opacity);
        }

        function hoverColorize(ctx) {
            return colorize(false, true, ctx);
        }

        function generateData() {
            return utils.numbers({
                count: PIE_DATA_COUNT,
                min: 0,
                max: 5000
            });
        }

        let data = {
            datasets: [{
                data: PIE_DATA
            }],
            labels: [
                'Saving',
                'Expense',
                'Income'
            ]
        };

        let options = {
            legend: {labels: { fontSize: 15}},
            tooltips: { enabled: true, titleFontSize: 13},
            elements: {
                arc: {
                    backgroundColor: colorize.bind(null, false, false),
                    hoverBackgroundColor: hoverColorize
                }
            },
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
