@extends('admin.layouts.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Type Products</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Add Type-product
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<form role="form" action="{{ route('post.AddTypeProduct') }}" method="POST">
								@csrf
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" type="text" name="name" placeholder="Enter Name">
								</div>
								<div class="form-group">
									<label for="sel">Manufacturer</label>
									<select class="form-control" name="manufacterer" id="sel">
										<option value="">--- Select list ---</option>
									@foreach($manufacterers as $manufacterer)
										<option value="{{ $manufacterer->id }}">{{ $manufacterer->name }}</option>
									@endforeach
									</select>
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