@extends('admin.layouts.index')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Products</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Add Product
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" action="{{ route('admin.product.doAdd', ['id'=>$manufacturer->id]) }}" method="POST" enctype='multipart/form-data'>
							@csrf
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" type="text" value="{{ old('name') }}" name="name" placeholder="Enter Name">
							</div>
							<div class="form-group">
								<label>Type Product</label>
								<select class="form-control" name="type_product" id="">
									<option value="">--- Select ---</option>
									@foreach($types as $type)
									<option value="{{ $type->id }}">{{ $type->name }}</option>		
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Images 1</label>
								<input type="file" id="img_1" name="image1">
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control ckeditor" rows="10" name="description" placeholder="Enter Description"></textarea>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</form>
					</div>
@stop