<div class="container">
			<div class="row">	
				<div class="col-xs-12 col-md-3 left-menu">
					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="#" class="first">Danh Mục Sản Phẩm</a></li>
					  @foreach($products as $product)
					  <li role="presentation">					  	
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Laptop {{ $product->product_type->name }}</a>
					  </li>
					  @endforeach
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Đàn Guitar VALOTE</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Đàn Guitar Việt Nam</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Đàn Guitar Phổ Thông</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Đàn Guitar Dành Cho Trẻ Em</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Trống UKulete</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Trống Cajon</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Phụ Kiện Đàn Guitar</a>
					  </li>
					</ul>
					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="#" class="first">Nhà Sản Xuất</a></li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Các Hãng Khác</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Việt Nam</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Takavood</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Kriens</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Yamaha</a>
					  </li>
					</ul>
									
					<!-- <ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="#" class="first">Tin Tức</a></li>
					  <div class="newspaper">					  	
					  <li class="img-newspaper1"><a href="#">Phân loại các loại đàn guitar hiện hành</a></li>					  
					  <li class="img-newspaper2"><a href="#">Thông tin, xuất xứ guitar điện cao cấp</a></li>
					  <li class="img-newspaper3"><a href="#">Guitar gồm có những loại đàn nào?</a></li>
					  <li class="img-newspaper4"><a href="#">Khuyến mãi Giảm giá Đàn gutiar</a></li>
					  <li class="img-newspaper5"><a href="#">Khuyến mãi đặc biệt nhân dịp Khai trương Showroom</a></li>
					  <li class="img-newspaper7"><a href="#">Thông báo lịch Nghỉ Tết Nguyên Đán năm 2016</a></li>
					  </div>					  
					</ul> -->

					<!-- <div class="mayquetthe">
						<a href="#"><img src="vendor/images/mayquetthe.jpg" alt="" width="100%"></a>
					</div> -->

					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="#" class="first">Liên Kết Facebook.com</a></li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Các Hãng Khác</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Việt Nam</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Takavood</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Kriens</a>
					  </li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Yamaha</a>
					  </li>
					</ul>
					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="javascript:void(0)" class="first">Hỗ Trợ Trực Tuyến</a></li>
					  <div class="pd-help">
						  <li class="colo-phia"><strong>Phía Bắc</strong></li>
						  <li>Mr: Cường - <strong>0978.402.904</strong><br/>Mr: Cường - <strong>0978.402.904</strong><br/>Mr: Cường - <strong>0978.402.904</strong></li>
						  <li class="colo-phia"><strong>Phía Nam</strong></li>
						  <li>Mr: Năng - <strong>0978.701.116</strong><br/>Mr: Năng - <strong>0978.701.116</strong></li>
					  </div>
					</ul>	
					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="#" class="first">Thống Kê Truy Cập</a></li>
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Đang online</a>
					  </li>
					  <!-- <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="#">Làm Việc Với File</a>
					  </li> -->
					</ul>
				</div> <!-- /.col-xs-12.col-md-3 -->