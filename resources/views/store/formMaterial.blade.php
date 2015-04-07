@extends('store.app')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">จัดการวัสดุ</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-4">
						<form role="form">
							<div class="form-group">
								<label>ชื่ออุปกรณ์ : </label>
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
							<div class="panel-heading">Items</div>
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
												<td>วัสดุ 123</td>
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
