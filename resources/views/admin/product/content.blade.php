@foreach($products as $product)
<tr id="show_product">
	<td>{{ $product->id }}</td>
	<td>{{ $product->name }}</td>
	<td>{{ $product->product_type->name }}</td>
	<td>{{ $product->amount }}</td>
	<td><a href="{{ $product->url_image }}"><img src="{{ $product->url_image }}" alt=""></a></td>
	<td id="config">
		{!! str_limit($product->description,100,'...') !!}
	</td>
	<td id="action_id" style="text-align: center;">
		<a href="{{ route('admin.product.edit', [ 'id'=>$product->id ]) }}">
			<span><i class="fa fa-edit fa-2x"></i></span>
		</a>
	</td>
	<td style="text-align: center;">
		<a href="{{ route('admin.product.delete', ['id_manu' => $product->manufacturer->id, 'id' => $product->id]) }}">
			<span><i class="fa fa-trash fa-2x"></i></span>
		</a>
	</td>
</tr>
@endforeach