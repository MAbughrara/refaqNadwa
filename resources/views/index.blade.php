@extends('app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">كل الزوار</div>
					<div class="panel-body">
						<table class="table table-striped table-condensed">
							<thead>
								<tr>
									<th>رقم</th>
									<th>الاسم</th>
									<th>الفئة العمرية</th>
									<th></th>
								</tr>
							</thead>
							@foreach($gusts as $gust)
								<tr>
									<td>

									</td>
									<td>
										{{$gust->name}}
									</td>
									<td>
										{{$gust->age}}
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