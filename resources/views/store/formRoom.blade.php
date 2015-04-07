@extends('store.app') 
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">จัดการห้อง และอุปกรณ์</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">จัดการห้อง และอุปกรณ์</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-4">
						<form role="form">
							<div class="form-group">
								<label>ชื่อห้อง : </label>
							</div>
						</form>
					</div>
					<!-- /.col-lg-4 (nested) -->
				</div>
				<!-- /.row (nested) -->
				<div class="row">
					<div class="col-lg-4">
						<form role="form">
							<div class="form-group">
								<label>Description : </label>
							</div>
						</form>
					</div>
					<!-- /.col-lg-4 (nested) -->
				</div>
				<!-- /.row (nested) -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">Service/equipment</div>
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
						<form role="form">
							<div class="form-group">
								<button type="button" class="btn btn-primary">OK</button>
							</div>
						</form>
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
@stop
