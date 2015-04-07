@extends('store.app') 
@section('content')
<form role="form">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">ยืม-คืนอุปกรณ์</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">ฟอร์มยืม-คืนอุปกรณ์</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label>เลขที่การยืม : </label>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
						<div class="col-lg-4 col-lg-offset-4">
							<div class="form-group">
								<label>วันที่ : </label>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
					</div>
					<!-- /.row (nested) -->
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label>Purpose of use : </label>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
					</div>
					<!-- /.row (nested) -->
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label>Rent person : </label>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
						<div class="col-lg-4 col-lg-offset-2">
							<div class="form-group">
								<label>Email address : </label>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">List of rent</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>Item No.</th>
													<th>Items</th>
													<th>Date/Time</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>123</td>
													<td>อุปกรณ์ 123</td>
													<td>25/02/2015 - 29/02/2015</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- /.table-responsive -->
								</div>
								<!-- /.panel-body -->
							</div>
						</div>
					</div>
					<!-- /.row (nested) -->
					<div class="row">
						<div class="col-lg-5">
							<div class="row">
								<div class="col-lg-5">
									<div class="form-group">
										<label>Approvement : </label>
									</div>
								</div>
								<div class="col-lg-6">
									<select class="form-control">
										<option>OK</option>
										<option>CANCEL</option>
									</select>
								</div>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
						<div class="col-lg-4">
							<div class="form-group">
								<label>Remark : </label>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
					</div>
					<!-- /.row (nested) -->
					<div class="row">
						<div class="col-lg-offset-11">
							<div class="form-group">
								<button type="button" class="btn btn-primary">OK</button>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
					</div>
					<!-- /.row (nested) -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
</form>
@stop
