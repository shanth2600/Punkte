@extends('master')

@section('content')
<div id="dashboard-container" style="height:1200px">
	<h1>Offers Dashboard</h1>
	<h3 class="section-title" style="margin-left:10px">Free Hamburger</h3>
	<div class="table-container">	
		<table style="color:white">
				<th style="color:#00FAC7;width:150px">Total Redemptions:</th>
				<th style="color:#00FAC7;width:150px">Offer Lifetime:</th>
				<th style="color:#00FAC7;width:150px">% Completed</th>
				<tr>
					<td>62</td>
					<td>7 months</td>
					<td>76</td>
				</tr>			
		</table>
	</div>
	<div class="section-container canvas-container">
		<canvas id="burgerChart" height="100%" width="100%"></canvas>
	</div>
	<h3 class="section-title" style="margin-left:10px">Free Small Fries</h3>
	<div class="table-container">	
		<table style="color:white">
				<th style="color:#00FAC7;width:150px">Total Redemptions:</th>
				<th style="color:#00FAC7;width:150px">Offer Lifetime:</th>
				<th style="color:#00FAC7;width:150px">% Completed</th>
				<tr>
					<td>54</td>
					<td>7 months</td>
					<td>34</td>
				</tr>			
		</table>
	</div>
	<div class="section-container canvas-container">
		<canvas id="friesChart" height="100%" width="100%"></canvas>
	</div>
	<h3 class="section-title" style="margin-left:10px">Free Soda</h3>
	<div class="table-container">	
		<table style="color:white">
				<th style="color:#00FAC7;width:150px">Total Redemptions:</th>
				<th style="color:#00FAC7;width:150px">Offer Lifetime:</th>
				<th style="color:#00FAC7;width:150px">% Completed</th>
				<tr>
					<td>73</td>
					<td>7 months</td>
					<td>21</td>
				</tr>			
		</table>
	</div>	
	<div class="section-container canvas-container">
		<canvas id="sodaChart" height="100%" width="100%"></canvas>
	</div>		
	
</div>
<script>
	var ctx = $("#burgerChart");
	var myChart = new Chart(ctx, {
	    type: 'line',
	    data: {
	        labels: ["December","January", "February", "March", "April", "May"],
	        datasets: [
		        {
		        	backgroundColor: "rgba(206,88,69,1)",
		            label: '# Burger Redemptions',
		            data: [12,13, 20, 4, 5, 2]
		        }
	        ]
	    },
		options : {
			scaleLabel: {
				display:false,
				fontSize: 0
			},
	        scales: {        	
	            yAxes: [{
	                gridLines: {
	                    lineWidth: 0,
	                    color: "rgba(255,255,255,0)"
	                },
	                scaleLabel : {
	            		display: false
	            	}, 
	            }],
	            xAxes: [{
	                gridLines: {
	                    lineWidth: 0,
	                    color: "rgba(255,255,255,0)"
	                },
					scaleLabel : {
	            		display: false
	            	},                
	            }]                
	        }
	    }
	});

	var ctx = $("#friesChart");
	var myChart = new Chart(ctx, {
	    type: 'line',
	    data: {
	        labels: ["December","January", "February", "March", "April", "May"],
	        datasets: [

		       {
		       		backgroundColor: "rgba(95,141,172,1)",
		            label: '# of Fries Redemptions',
		            data: [6,14, 22, 12, 11, 6]
		        }
	        ]
	    },
		options : {
			scaleLabel: {
				display:false,
				fontSize: 0
			},
	        scales: {        	
	            yAxes: [{
	                gridLines: {
	                    lineWidth: 0,
	                    color: "rgba(255,255,255,0)"
	                },
	                scaleLabel : {
	            		display: false
	            	}, 
	            }],
	            xAxes: [{
	                gridLines: {
	                    lineWidth: 0,
	                    color: "rgba(255,255,255,0)"
	                },
					scaleLabel : {
	            		display: false
	            	},                
	            }]                
	        }
	    }
	});	
	var ctx = $("#sodaChart");
	var myChart = new Chart(ctx, {
	    type: 'line',
	    data: {
	        labels: ["December","January", "February", "March", "April", "May"],
	        datasets: [

		       {
		       		backgroundColor: "rgba(203,170,62,1)",
		            label: '# of Drink Redemptions',
		            data: [18,25, 19, 28, 20, 23]
		        }
	        ]
	    },
		options : {
			scaleLabel: {
				display:false,
				fontSize: 0
			},
	        scales: {        	
	            yAxes: [{
	                gridLines: {
	                    lineWidth: 0,
	                    color: "rgba(255,255,255,0)"
	                },
	                scaleLabel : {
	            		display: false
	            	}, 
	            }],
	            xAxes: [{
	                gridLines: {
	                    lineWidth: 0,
	                    color: "rgba(255,255,255,0)"
	                },
					scaleLabel : {
	            		display: false
	            	},                
	            }]                
	        }
	    }
	});		
</script>
@stop