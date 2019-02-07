@extends('layouts.index')
@section('content')
<div class="col-md-9 col-xs-12">
	<h3><a href="index.php?view=ChitietSanPham">Tên Theo Từng Loại Sản Phẩm</a></h3>
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div>
				<img src="{{ $product->url_image_1 }}" alt="..." width="100%" data-zoom-image="" id="zoom_01">
			</div>
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="">
				<h3><p>Giá: {{ $product->price }} VNĐ (Chưa VAT)</p></h3>
				<p>
					Tình trạng:  <span class="glyphicon glyphicon-ok"></span>
					@if($product->amount>0)
					Có hàng
					@else
					Hết hàng
					@endif
				</p>
				<p>Nhà sản xuất: <a href="#">Yamaha</a></p>
				<a href="" class="btn btn-default"><span class='glyphicon glyphicon-shopping-cart'></span>Thêm vào giỏ hàng</a><br /><br />
				<!-- <span class="glyphicon glyphicon-print"></span>  <a href="#">In báo cáo</a> -->
			</div>
			<h4>Chi tiết sản phẩm</h4>
			<p>
				{!! $product->description !!}
			</p>
		</div>
	</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
   $("#zoom_01").elevateZoom();
  });
</script>@stop