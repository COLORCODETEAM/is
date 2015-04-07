@extends('store.app')
@section('content')
<form>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">จองห้อง และอุปกรณ์</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">ฟอร์มจองห้อง และอุปกรณ์</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label>เลขที่ใบจอง : </label>
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
								<label>Events : </label>
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
								<label>Description </label>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
					</div>
					<!-- /.row (nested) -->
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label>Contact person : </label>
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
						<div class="col-lg-4">
							<div class="form-group">
								<label>Date of Event : </label>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
						<div class="col-lg-4">
							<div class="form-group">
								<label>Start time : </label>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
						<div class="col-lg-4">
							<div class="form-group">
								<label>Finish time : </label>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label>Space needed (please select) : </label>
									</div>
								</div>
								<div class="col-lg-2">
									<select class="form-control">
										<option>ห้องแลป 1</option>
										<option>ห้องแลป 2</option>
									</select>
								</div>
							</div>
						</div>
						<!-- /.col-lg-4 (nested) -->
					</div>
					<!-- /.row (nested) -->
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">Service/equipment needed</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>Item No.</th>
													<th>Items</th>
													<th>Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>123</td>
													<td>อุปกรณ์ 123</td>
													<td>2</td>
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
