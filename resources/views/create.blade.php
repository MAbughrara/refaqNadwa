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
									<input name="name" type="text" class="form-control small"  placeholder="الاسم الثلاتي" required>
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

								<div class="form-row">
									<label for="age" class="col-sm-3  control-label">رقم الهاتف</label>
									<div class="form-group col-md-6">
										<input type="text" name="phone" class="form-control "  placeholder="رقم الهاتف">
									</div>
									<div class="form-group col-md-2">
									<select name="pre" id=""  class="form-control">
											<option value="091">091</option>
											<option value="092">092</option>
											<option value="094">094</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<label for="gender" class="col-sm-3  control-label">الجنس</label>
									<div class="form-group col-md-9">
										<input id="radio1" name="gender" type="radio" class="custom-control-input" value="ذكر">
										<label class="custom-control custom-radio">
											<span class="control-description">ذكر</span>
										</label>
										<input id="radio2" name="gender" type="radio" class="custom-control-input" value="أنثى">
										<label class="custom-control custom-radio">
											أنثى
										</label>
								</div>
								</div>

								<hr>
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