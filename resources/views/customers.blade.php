@extends('master')

@section('content')
<div id="dashboard-container">
	<h3 class="section-title" style="margin-left:10px">Top Customers</h3>
	<div class="section-container canvas-container">
		<canvas id="topCustomersChart" height="100%" width="100%"></canvas>
	</div>
	<h3 class="section-title" style="margin-left:10px">Customer Age Breakdown</h3>
	<div class="section-container canvas-container">
		<canvas id="ageChart" height="100%" width="100%"></canvas>
	</div>
</div>
<script>
	var ctx = $("#topCustomersChart");
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["Johnny M.","Clara R.", "Eddie B.", "Jimmy D.", "Karen R.", "Diblasio S.","Celine B.","Brock L.","Chuck L.","Joe R."],
	        datasets: [

		       {
		       		backgroundColor: "rgba(0,250,199,1)",
		            label: '# Redemptions',
		            data: [11,10,8,7,7,4,3,2,2,2]
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
	            	ticks: {
	                    beginAtZero:true
	                }
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
	var ctx = $("#ageChart");
	var myChart = new Chart(ctx, {
	    type: 'line',
	    data: {
	        labels: ["0-12","12-14", "14-16","16-18","18-25","25-30","30-35","36+"],
	        datasets: [

		       {
		       		backgroundColor: "rgba(0,250,199,1)",
		            label: 'Age Group',
		            data: [1,3,5,8,12,11,15,3]
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
	            	ticks: {
	                    beginAtZero:true
	                }
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