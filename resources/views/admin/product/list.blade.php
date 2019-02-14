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
                        @if(Session::has('product_delete'))
                            <p class="alert {{ Session::has('product_delete') ? 'alert-info' : '' }}">{{ Session::get('product_delete') }}</p>
                        @endif
    					<table class="table table-bordered table-hover table-striped">
    						<thead>
    							<tr>
    								<th>#</th>
    								<th style="width:20%" class="width_td">Name</th>
    								<th class="width_td">Type</th>
    								<th class="width_td">Amount</th>
    								<th class="width_td">Image</th>
    								<th id="description">Description</th>
    								<th colspan="2" style="text-align: center;">Action</th>
    							</tr>
    						</thead>
    						<tbody>
    						@include('admin.product.content')
    						</tbody>
    					</table>
    					<div id="load_more_div">
    						{{ $products->links() }}
    						<button onclick="load_more()" id="btn_loadmore" class="btn btn-primary pull-right" data-href="{{$products->nextPageUrl()}}">Load more</button>
    					</div>
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
	$(document).ready(function(){
		var btn = $('#btn_loadmore').data('href');
		if(btn == ''){
			$('#load_more_div').html('');
		}
	});
	function load_more(){
		var url = $('#btn_loadmore').data('href');
		if(url == ''){
			$('#load_more_div').html('');
		} else{
			$.ajax({
				url: url,
				type: "GET",
				success: function(data){
					$('tbody').append(data.html);
					console.log(data.hasMore);
					if(data.hasMore){
						var data = '<button onclick="load_more()" id="btn_loadmore" class="btn btn-primary pull-right" data-href="'+ data.url +'">Load more</button>';
						$('#load_more_div').html(data);
					}
					else{
						$('#load_more_div').html('');
					}
				},
				error: function(data){
					alert('Xin chào, có lỗi rồi');
				}				
			});
		}		
	}	
</script>
@stop