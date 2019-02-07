@extends('layouts.index')
@section('content')
<!-- Phần center có thể bị thay đổi -->
<div class="col-xs-12 col-md-9 center">
	<h3><a href="#">Sản Phẩm Đang Khuyến Mãi</a></h3>
	<div class="row">
		@foreach($products as $product)
		@if($product->promotion > 0)
		<div class="col-sm-6 col-xs-12 col-md-4">
			<div class="thumbnail img-center" style="height: 450px">
				<img src="{{ $product->url_image_1 }}" alt="..." width="100%">
				<div class="caption">
					<h4 style="text-align: center;">
						Laptop {{ $product->manufacturer->name }} {{ $product->name }}
					</h4>
					<div class="costs">
						<span>Giá gốc:</span> {{ $product->price }} VNĐ 
					</div>
					<div class="promotion_price">Giảm: <span>{{ $product->promotion }}%</span> </div>
					<div class="price">Chỉ Còn: {{ $product->promotion_price }} VNĐ</div>
					<p class="btn-costs"><a href="#" class="btn btn-default" role="button">Chi Tiết</a> <a href="#" class="btn btn-success" role="button">Mua Ngay</a></p>
				</div>
			</div>
		</div>
		@endif
		@endforeach
	</div>

	<div class="row center">
		<h3><a href="#">Thông Tin Guitar</a></h3>
		<div class="col-xs-12 col-sm-12 col-md-6">
			<div class="media div-tt-img">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="vendor/images/tt1.jpg" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Tìm hiểu các lọai gỗ làm đàn Guitar điện</h4>
					Như các bạn đã biết, âm thanh đàn Guitar điện phụ thuộc rất nhiều vào thiết bị điện tử của đàn nhưng gỗ làm đàn cũng là một yếu tố ảnh hưởng lớn đến âm thanh.
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="media div-tt-img">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="vendor/images/tt2.jpg" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Chọn đàn Guitar cho người thuận tay trái</h4>
					Trong quá trình tư vấn chọn đàn Guitar, tôi có gặp một số bạn trẻ hỏi về đàn Guitar cho người thuận tay trái. Tuy con số này không nhiều nhưng trong bài.
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="media div-tt-img">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="vendor/images/tt3.jpg" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Mới học Guitar nên mua Classic hay Acoustic?</h4>
					Trong quá trình tư vấn về Guitar và học Guitar, tôi nhận được rất nhiều câu hỏi của các bạn mới học đàn.
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="media div-tt-img">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="vendor/images/tt4.jpg" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Cách phát hiện đàn Guitar giả, đàn Guitar nhái</h4>
					Khi mua một cây đàn Guitar, bạn có thể chọn mua trực tuyến, mua tại các cửa hàng nhỏ lẻ.
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="media div-tt-img div-tt-img-last-child">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="vendor/images/tt5.jpg" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Tư vấn mua đàn Guitar điện (Guitar Electric)</h4>
					Đa số người mới tập chơi Guitar đều thích chọn đàn Guitar Acoustic là chiếc đàn đầu tiên, rất ít người chọn Guitar điện.
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="media div-tt-img div-tt-img-last-child">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="vendor/images/tt6.jpg" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Làm sạch dây đàn Guitar như thế nào?</h4>
					Dây đàn Guitar cũng quan trọng như các bộ phận khác của đàn và bạn không thể chơi đàn mà không có chúng.
				</div>
			</div>
		</div>
	</div>
</div> <!-- /.col-xs-12.col-md-3.center -->
@stop