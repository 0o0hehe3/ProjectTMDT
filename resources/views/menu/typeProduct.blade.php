@extends('layouts.index')
@section('content')
<div class="col-xs-12 col-md-9 center">
	<h3><a href="#">{{ $type->name }}</a></h3>
	<div class="row">
		@foreach($products as $product)
		<div class="col-sm-6 col-xs-12 col-md-4">
			<div class="thumbnail img-center" style="height: 450px">
				<img src="{{ $product->url_image }}" alt="..." width="100%">
				<div class="caption">
					<h4 style="text-align: center;">
						{{ $product->manufacturer->name }} {{ $product->name }}
					</h4>

					<div class="costs">
						<span>Giá gốc:</span> {{ $product->price }} VNĐ 
					</div>
					<div class="promotion_price">Giảm: <span>{{ $product->promotion }}%</span> </div>
					<div class="price">Chỉ Còn: {{ $product->promotion_price }} VNĐ</div>

					<p class="btn-costs">
						<a href="" class="btn btn-default" role="button">Chi Tiết</a> 
						<a href="#" class="btn btn-success" role="button">Mua Ngay</a>
					</p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@stop