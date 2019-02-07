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
					Add Manufacturer
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<form role="form" action="{{ route('admin.manufacturer.doAdd') }}" method="POST">
								@csrf
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" type="text" name="name" placeholder="Enter Name">
								@if($errors->has('name'))
									<span style="color:red">
										{{ $errors->first('name') }}
 									</span>		
								@endif
								</div>
								<div class="form-group">
									<label>Address</label>
									<input class="form-control" type="text" name="address" placeholder="Enter Address">
								@if($errors->has('address'))
									<span style="color:red">
										{{ $errors->first('address') }}
									</span>		
								@endif
								</div>
								<div class="form-group">
									<label>Phone number</label>
									<input class="form-control" type="text" name="phone_number" placeholder="Enter Phone number">
								@if($errors->has('phone_number'))
									<span style="color:red">
										{{ $errors->first('phone_number') }}
									</span>		
								@endif
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" rows="10" name="description" placeholder="Enter Description"></textarea>
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</form>
						</div>
@stop