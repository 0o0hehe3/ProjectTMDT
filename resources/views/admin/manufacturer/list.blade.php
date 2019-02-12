@extends('admin.layouts.index')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Manufacturer</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-list-alt"></i> <span id="title">List Manufacturer</span>
				<div class="pull-right">
					<div class="btn-group">
						<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
							Action
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="{{ route('admin.manufacturer.add') }}">Add manufacturer</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Address</th>
									<th>Phone Number</th>
									<th colspan="2" style="text-align: center;">Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach($manufacturers as $manufacturer)
								<tr>
									<td>{{ $manufacturer->id }}</td>
									<td>{{ $manufacturer->name }}</td>
									<td>{{ $manufacturer->address }}</td>
									<td>{{ $manufacturer->phone_number }}</td>
									<td style="text-align: center;">
										<a href="">
											<i class="fa fa-edit fa-2x"></i>
										</a>
									</td>
									<td style="text-align: center;">
										<a href="">
											<i class="fa fa-trash fa-2x"></i>
										</a>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop