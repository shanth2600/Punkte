Chart.defaults.global.responsive = true;
Chart.defaults.global.maintainAspectRatio = false;
Chart.defaults.global.title.display = false;
Chart.defaults.global.legend.display = false;
Chart.defaults.global.legend.labels.boxWidth = 0;

console.log(Chart.defaults.global);


$(document).ready(function(){

	var ctx = $("#myChart");
	var myChart = new Chart(ctx, {
	    type: 'line',
	    data: {
	        labels: ["December","January", "February", "March", "April", "May"],
	        datasets: [
		        {
		        	backgroundColor: "rgba(206,88,69,.5)",
		            label: '# Burger Redemptions',
		            data: [12,13, 20, 4, 5, 2]
		        },
		       {
		       		backgroundColor: "rgba(95,141,172,.5)",
		            label: '# of Fries Redemptions',
		            data: [6,14, 22, 12, 11, 6]
		        },
		        {
		        	backgroundColor: "rgba(203,170,62,.5)",
		            label: '# of Drink Redemptions',
		            data: [18,25, 19, 28, 20, 23]
		        },
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

	var ctx = $("#completionChart");
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["Free Cheeseburger","Free Small Fries", "Free Soda"],
	        datasets: [
		        {
		        	backgroundColor: "rgba(0,250,199,0.4)",
		            label: '% Completed',
		            data: [76,34, 21]
		        },
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


	// new Vue({
	//   el: '#dashboard-container',
	//   ready: function(){

	//   },
	//   data: {
	    
	//   }
	// })

});

