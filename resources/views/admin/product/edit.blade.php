@extends('admin.layouts.index')
@section('js')
	<script>
		$('#promotion').on('blur',function(){
			var price = $('#price').val();
			var promotion = $('#promotion').val();
			var promotion_price = price - (price*(promotion/100));
			
			$('#promotion_price').attr('value',promotion_price);
		});
	</script>
@stop
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
				Edit Product
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" action="{{ route('admin.product.update',['id' => $product->id]) }}" method="POST" enctype='multipart/form-data'>
							@csrf
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" value="{{old('name') ? old('name') : $product->name }}" type="text" name="name" placeholder="Enter Name">
								@if($errors->has('name'))
								<span style="color:red">
									{{ $errors->first('name')}} 
								</span>
								@endif
							</div>
							<div class="form-group">
								<label>Type Product</label>
								<select class="form-control" name="type_product" id="">
									<option value="">--- Select ---</option>
									@foreach($types as $type)
									<option @if($type->id == $product->type_id) selected @endif value="{{ $type->id }}">{{ $type->name }}</option>		
									@endforeach
								</select>
								@if($errors->has('type_product'))
								<span style="color:red">
									{{ $errors->first('type_product')}} 
								</span>
								@endif
							</div>
							<div class="form-group">
								<label>Images</label>
								<input type="file" id="img_1" name="image1">
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control ckeditor" rows="10" name="description" placeholder="Enter Description">{!! old('description') ? old('description') : $product->description !!}</textarea>
								@if($errors->has('description'))
								<span style="color:red">
									{{ $errors->first('description')}} 
								</span>
								@endif
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</form>
					</div>
@stop