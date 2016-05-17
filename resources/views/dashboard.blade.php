@extends('master')

@section('content')
<div id="dashboard-container">
	<h1>Johnny's Burgers BI Dashboard</h1>
	<h3 class="section-title" style="margin-left:10px">Total Redemptions</h3>
	<div class="section-container canvas-container">
		<canvas id="myChart" height="100%" width="100%"></canvas>
	</div>
	<div class="col-xs-6">	
	<h3 class="section-title"><a href="/customers">Customers</a></h3>
		<div class="section-container" >
		@for($i = 0; $i < 6; $i++)
			<div class="profile-image" style="background-image: url('https://randomuser.me/api/portraits/{{ $i%2 == 0 ? 'wo' : '' }}men/{{ 80 + $i }}.jpg')"></div>
		@endfor
		</div>
	<h3 class="section-title"><a href="/offers">Offers</a></h3>
		<div class="section-container" >
			<div class="profile-image" style="background-image: url('https://d13yacurqjgara.cloudfront.net/users/145072/screenshots/1554559/hamburger.png')"></div>
			<div class="profile-image" style="background-image: url('https://cdn2.iconfinder.com/data/icons/food-and-kitchen/512/8-512.png')"></div>
			<div class="profile-image" style="background-image: url('https://cdn2.iconfinder.com/data/icons/food-ink/512/cola-512.png')"></div>
		</div>		
	</div>
	<div class="col-xs-6">	
		<h3 class="section-title">Offer Completion
		</h3>
		<div class="canvas-container" style="height:320px">
			<canvas id="completionChart" height="100%" width="100%"></canvas>
		</div>
	</div>

</div>
@stop