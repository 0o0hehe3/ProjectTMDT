<header>
		<div class="topMenu">
			<nav class="navbar navbar-inverse brMenu">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand bglogo" href="{{ route('index') }}">Laptop</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="#">Trang Chủ <span class="sr-only">(current)</span></a></li>
			        <li><a href="#">Giới Thiệu</a></li>
			        <li><a href="#">Tin Tức</a></li>
			        <li class="dropdown txtMenu bd-bottom-product">
			          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản Phẩm <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li>
				            	<a href="#">
				            		<span class="glyphicon glyphicon-triangle-right left-font-product"></span>
				            		Sản Phẩm Khuyến Mại
				            	</a>
				            </li>
				            <li>
				            	<a href="#">
				            		<span class="glyphicon glyphicon-triangle-right left-font-product"></span>
				            		Sản Phẩm Bán Chạy Nhất
				            	</a>
				            </li>
			          	</ul>
			        </li>
			        <li><a href="#">Địa Chỉ</a></li>
			      </ul>
			      <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Tìm Kiếm</button>
			      </form>
			      <ul class="nav navbar-nav navbar-right">
			      	<li class="gio-hang"><a href="#">Giỏ Hàng(2)</a></li>
			        <li class="dropdown txtMenu">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thông Tin <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">LogIn</a></li>
			            <li><a href="#">Register</a></li>
			            <li><a href="#">Change password</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">LogOut</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div> <!-- /.topMenu -->
	</header>