@extends('app')
@section('content')
	<div class="col-sm-1">
	<img src="logo.png" alt="">
</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-1">
				<a href="/gust/create"> <button class="btn btn-default ">إضافة زائر <i class="fa fa-plus-square" aria-hidden="true"></i></button> </a>
				<hr>
				<div class="panel panel-success">
					<div class="panel-heading">كل الزوار</div>
					<div class="panel-body">
						<table class="table table-striped table-condensed">
							<thead>
								<tr>
									<th>رقم</th>
									<th>الاسم</th>
									<th>الفئة العمرية</th>
									<th>الجنس</th>
									<th></th>
								</tr>
							</thead>
							@foreach($gusts as $no=>$gust)
								<tr>
									<td>
										{{$no+1}}
									</td>
									<td>
										{{$gust->name}}
									</td>
									<td>
										{{$gust->age}}
									</td>
									<td>
										{{$gust->gender}}
									</td>
								</tr>
								<tr>
								</tr>
								@endforeach
						</table>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div>
					<canvas id="pie-chart" /></div>
					<hr>
				<div  style="width:90%">
					<canvas id="pie-chart-gender" />
				</div>
			</div>
			</div>
		</div>
	<script>
        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
                labels: ["15-25", "25-45", "45-65"],
                datasets: [{
                    label: "الفئة العمرية",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                    data: [<?php echo $x.','. $y.','. $z?>]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'احصائية حسب الفئة العمرية'
                }
            }
        });

        new Chart(document.getElementById("pie-chart-gender"), {
            type: 'pie',
            data: {
                labels: ["ذكر", "أنثى"],
                datasets: [{
                    label: "حسب الجنس",
                    backgroundColor: ["#3cba9f","#e8c3b9"],
                    data: [<?php echo $male.','. $female ?>]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'احصائية حسب الجنس'
                }
            }
        });
	</script>

@endsection