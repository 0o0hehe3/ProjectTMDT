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
								<label>Amount</label>
								<input class="form-control" value="{{ $product->amount }}" type="text" name="amount" placeholder="Enter Amount">
								@if($errors->has('amount'))
								<span style="color:red">
									{{ $errors->first('amount')}} 
								</span>
								@endif
							</div>
							<div class="form-group">
								<label>Price</label>
								<input class="form-control" id="price" value="{{ $product->price }}" type="text" name="price" placeholder="Enter Price">
								@if($errors->has('price'))
								<span style="color:red">
									{{ $errors->first('price')}} 
								</span>
								@endif
							</div>
							<div class="form-group">
								<label>Promotion (%)</label>
								<input type="text" name="promotion" id="promotion" value="{{ $product->promotion }}" class="form-control">
								@if($errors->has('promotion'))
								<span style="color:red">
									{{ $errors->first('promotion')}} 
								</span>
								@endif
							</div>
							<div class="form-group">
								<label>Promotion Price</label>
								<input class="form-control" id="promotion_price" value="{{ $product->promotion_price }}" type="text" name="promotion_price" placeholder="Enter Promotion Price" readonly >
								@if($errors->has('promotion_price'))
								<span style="color:red">
									{{ $errors->first('promotion_price')}} 
								</span>
								@endif
							</div>
							<div class="form-group">
								<label>Images 1</label>
								<input type="file" id="img_1" name="image1">
							</div>
							<div class="form-group">
								<img src="{{ $product->url_image_1 }}" alt="">
							</div>
							<div class="form-group">
								<label>Images 2</label>
								<input type="file" name="image2">
							</div>
							<div class="form-group">
								<img src="{{ $product->url_image_2 }}" alt="">
							</div>
							<div class="form-group">
								<label>Images 3</label>
								<input type="file" name="image3">
							</div>
							<div class="form-group">
								<img src="{{ $product->url_image_3 }}" alt="">
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control ckeditor" rows="10" name="description" placeholder="Enter Description">{!! $product->description !!}</textarea>
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