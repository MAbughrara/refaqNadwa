@extends('app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
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
									<th>رقم الهاتف</th>
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
									<td>
										{{$gust->phone}}
									</td>

								</tr>
								<tr>
								</tr>
								@endforeach
						</table>
					</div>
				</div>
			</div>
			</div>
		</div>
@endsection