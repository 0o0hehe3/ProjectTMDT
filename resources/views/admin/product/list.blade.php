@extends('admin.layouts.index')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" >List Products</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="panel panel-default">
    	<div class="panel-heading">
    		<i class="fa fa-bar-chart-o fa-fw"></i> {{ $manufacturer->name }}
    		<div class="pull-right">

    			<a href="{{ route('admin.product.add',['id'=>$manufacturer->id]) }}">
    				<i class="fa fa-plus fa-2x" aria-hidden="true"></i>
    			</a>
    		</div>
    	</div>
    	<!-- /.panel-heading -->
    	<div class="panel-body">
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="table-responsive">
    					<table class="table table-bordered table-hover table-striped">
    						<thead>
    							<tr>
    								<th>Id</th>
    								<th>Name</th>
    								<th>Type</th>
    								<th>Amount</th>
    								<th>Price</th>
    								<th>Promotion Price (%)</th>
    								<th>Image 1</th>
    								<th>Image 2</th>
    								<th>Image 3</th>
    								<th>Description</th>
    								<th id="action_td">Action</th>
    							</tr>
    						</thead>
    						<tbody>
    						@include('admin.product.content')
    						</tbody>
    					</table>
    					<button id="btn_loadmore" class="btn btn-primary pull-right" data-href="{{$products->nextPageUrl()}}">Load more</button>
    				</div>
    				<!-- /.table-responsive -->
    			</div>
    			<!-- /.col-lg-4 (nested) -->
    			<div class="col-lg-8">
    				<div id="morris-bar-chart"></div>
    			</div>
    			<!-- /.col-lg-8 (nested) -->
    		</div>
    		<!-- /.row -->
    	</div>
    	<!-- /.panel-body -->
    </div>
    <!-- /.panel -->
@stop
@section('js')
<script>
	$('#btn_loadmore').on('click',function(){
		var url = $(this).data('href');
		$.ajax({
			url: url,
			type: "GET",
			success: function(data){

			},
			error: function(data){
				alert('Xin chào, có lỗi rồi');
			}
		});
	});
</script>
@stop