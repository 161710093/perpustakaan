@extends('layouts.app')

@section('content') 
<div class="container"> 
	<div class="row"> 
		<div class="col-md-12"> 
			<div class="panel panel-default"> 
				<div class="panel-heading"> 
					<h2 class="panel-title">Dashboard</h2> 
				</div>
<div class="panel-body"> 
Selamat datang di Menu Administrasi Larapus. Silahkan pilih menu administrasi yang diinginkan. 
<hr> 
<h4>Statistik Penulis</h4> 
<canvas id="chartPenulis" width="400" height="150"></canvas> 
</div> 
	</div> 
</div> 
</div> 
</div> 
@endsection

@section('scripts') 
<script src="/js/Chart.min.js"></script> 
<script> 
	var data = {
	 labels: {!! json_encode($authors) !!}, 
	 datasets: [{ 
	 	label: 'Jumlah buku', 
	 	data: {!! json_encode($books) !!}, 
	 	backgroundColor: ['red','blue','green','purple'], 
	 	borderColor: ['red','blue','green','purple'], 
	 }] 
	};
var options = { 
	scales: { 
		yAxes: [{ 
			ticks: { 
				beginAtZero:true, 
				stepSize: 1 
			} 
		}] 
	} 
};

var ctx = document.getElementById("chartPenulis").getContext("2d");

var authorChart = new Chart(ctx, { 
	type: 'pie', 
	data: data, 
	options: options 
});
</script> 
@endsection
