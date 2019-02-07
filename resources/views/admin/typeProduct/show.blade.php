@extends('admin.layouts.index')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" >List Type Products</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="panel panel-default">
    	<div class="panel-heading">
    		<i class="fa fa-list-alt"></i> <span id="title">List Type Products</span>
    		<div class="pull-right">
    			<div class="btn-group">
    				<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
    					Action
    					<span class="caret"></span>
    				</button>
    				<ul class="dropdown-menu pull-right" role="menu">
    					<li>
                            <a href="{{ route('admin.typeProduct.add') }}">Add Type Product</a>
    					</li>
    				</ul>
    			</div>
    		</div>
    	</div>
    	<!-- /.panel-heading -->
    	<div class="panel-body">
    		<div class="row">
                @foreach($type_products as $type_product)
    			<div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa-2x">{{ $type_product->name }}</i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
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