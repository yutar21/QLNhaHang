<?php include_once("layout.php") ?>
<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8" />
	<title>How to Create Dynamic Chart in PHP using Chart.js</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
	<link rel="stylesheet" href="../css/statistical.css">
	<script src="../js/statistical.js"></script>
</head>

<body>
	<div class="container">
		<select class="slibar_button" id="gender" onchange="genderChanged(this)">
			<option value="month">Theo tháng</option>
			<option value="year">Theo năm</option>
			<option value="all">Tất cả</option>
		</select>
		
		<div id="div1">
			<div class="wrapper">
				<div class="chart-container1">
					<canvas id="bar1" class="bar_chart1" style="max-height:217px; width:100%; max-width:80%; margin: 20px auto;"></canvas>
					<p>Biểu đồ cột doanh thu của nhà hàng theo ngày trong tháng</p>
				</div>
				<div class="chart-container2 ">
					<canvas id="doughnut_chart1" style="width:100%;  max-height:253px;"></canvas>
					<p>Biểu đồ tròn về số lượng tỷ lệ số lượng các món</p>
				</div>
				<div class="chart-container3">
					<canvas id="pie_chart1" style="width:100%; max-height:253px;"></canvas>
					<p>Biểu đồ tròn về thu nhập từng món mang lại</p>
				</div>
			</div>
		</div>

		<div id="div2">
			<div class="wrapper">
				<div class="chart-container1">
					<canvas id="bar2" class="bar_chart1" style="max-height:217px; width:100%; max-width:80%; margin: 20px auto; color: #ccc"></canvas>
					<p>Biểu đồ cột doanh thu của nhà hàng theo tháng trong năm</p>
				</div>
				<div class="chart-container2">
					<canvas id="doughnut_chart2" style="width:100%"></canvas>
					<p>Biểu đồ tròn về số lượng tỷ lệ số lượng các món</p>
				</div>
				<div class="chart-container3">
					<canvas id="pie_chart2" style="width:100%"></canvas>
					<p>Biểu đồ tròn về thu nhập từng món mang lại</p>
				</div>
			</div>
		</div>

		<div id="div3">
			<div class="wrapper">
				<div class="chart-container1">
					<canvas id="bar3" class="bar_chart1" style="max-height:217px; width:100%; max-width:80%; margin: 20px auto;"></canvas>
					<p>Biểu đồ cột doanh thu của nhà hàng theo các năm</p>
				</div>
				<div class="chart-container2">
					<canvas id="doughnut_chart3" style="width:100%"></canvas>
					<p>Biểu đồ tròn về số lượng tỷ lệ số lượng các món</p>
				</div>
				<div class="chart-container3">
					<canvas id="pie_chart3" style="width:100%"></canvas>
					<p>Biểu đồ tròn về thu nhập từng món mang lại</p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

<script>
	$(document).ready(function() {
		$x = "";
		$y = "";
		makechart("data1", "bar1");
		makechart("data2", "bar2");
		makechart("data3", "bar3");
		makechart("data4", "doughnut_chart1");
		makechart("data5", "doughnut_chart2");
		makechart("data6", "doughnut_chart3");
		makechart("data7", "pie_chart1");
		makechart("data8", "pie_chart2");
		makechart("data9", "pie_chart3");

		function makechart(x, y) {
			$.ajax({
				url: "../controller/dataController.php",
				method: "POST",
				data: {
					action: 'fetch' + x[x.length - 1]
				},
				dataType: "JSON",
				success: function(x) {
					var language = [];
					var total = [];
					var color = [];
					for (var count = 0; count < x.length; count++) {
						language.push(x[count].language);
						total.push(x[count].total);
						color.push(x[count].color);
					}
					var chart_data = {
						datasets: [{
							legend: {
								display: false
							},
							backgroundColor: color,
							color: '#fff',
							data: total
						}],
						labels: language,
					};

					var options = {
						legend: {display: false},
						scales: {
							yAxes: [{
								ticks: {
									min: 0
								}
							}]
						},
					};
					if (y[0] == 'b') {
						var group_chart = $('#' + y);
						var graph = new Chart(group_chart, {
							type:"bar",
							data: chart_data,
							options: options
						});
					} else if (y[0] == 'd') {
						var group_chart = $('#' + y);
						var graph = new Chart(group_chart, {
							type: "doughnut",
							data: chart_data,
						});
					} else {
						var group_chart = $('#' + y);
						var graph = new Chart(group_chart, {
							type: "pie",
							data: chart_data
						});
					}
				}
			})
		}
	});
</script>