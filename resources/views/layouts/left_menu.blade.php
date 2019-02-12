<div class="container">
			<div class="row">	
				<div class="col-xs-12 col-md-3 left-menu">
					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="#" class="first">Danh Mục Sản Phẩm</a></li>
					  @foreach($types as $type)
					  <li role="presentation">					  	
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="{{ route('menu.typeProduct',['id' => $type->id ]) }}">Laptop {{ $type->name }}</a>
					  </li>
					  @endforeach
					</ul>
					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="#" class="first">Nhà Sản Xuất</a></li>
					  @foreach($manufacturers as $manufacturer)
					  <li role="presentation">
					  	<span class="glyphicon glyphicon-triangle-right left-font"></span>
					  	<a href="{{ route('index') }}">{{ $manufacturer->name }}</a>
					  </li>
					  @endforeach
					</ul>

					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" class="active"><a href="#" class="first">Liên Kết Facebook.com</a></li>
					  
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