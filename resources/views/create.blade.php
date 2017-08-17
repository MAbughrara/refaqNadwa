@extends('app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-success">
					<div class="panel-heading">تسجيل زائر</div>
					<div class="panel-body">
						<table class="table table-striped table-condensed">
							<form method="post" action="/gust"  class="form-horizontal">
								{{csrf_field()}}
								<div class="form-group">
									<label for="name" class="col-sm-3  control-label">الاسم الثلاثي</label>
									<div class="col-sm-9">
									<input name="name" type="text" class="form-control small"  placeholder="الاسم الثلاتي">
								</div>
								</div>
								<div class="form-group">
									<label for="age" class="col-sm-3  control-label">معدل العمر</label>
									<div class="col-sm-9">
									<select name="age" id=""  class="form-control">
										<option value="15-25">15-25</option>
										<option value="25-45">25-45</option>
										<option value="45-65">45-65</option>
									</select>
								</div>
								</div>

								<div class="form-group">
								<div class="col-sm-offset-3 col-sm-8">
									<button type="submit" class="btn btn-primary">تسجيل</button>
								</div>
								</div>

							</form>


						</table>
					</div>
				</div>
			</div>
			</div>
		</div>
@endsection