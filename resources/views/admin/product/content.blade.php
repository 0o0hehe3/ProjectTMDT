@foreach($products as $product)
<tr id="show_product">
	<td>{{ $product->id }}</td>
	<td>{{ $product->name }}</td>
	<td>{{ $product->product_type->name }}</td>
	<td>{{ $product->amount }}</td>
	<td>{{ $product->price }}</td>
	<td>{{ $product->promotion }}</td>
	<td>{{ $product->promotion_price }}</td>
	<td><a href="{{ $product->url_image_1 }}"><img src="{{ $product->url_image_1 }}" alt=""></a></td>
	<td id="config">{!! $product->description !!}</td>
	<td id="action_id">
		<a href="{{ route('admin.product.edit', [ 'id'=>$product->id ]) }}">
			<span><i class="fa fa-edit fa-2x"></i></span>
		</a>
	</td>
	<td>
		<a href="">
			<span><i class="fa fa-trash fa-2x"></i></span>
		</a>
	</td>
</tr>
@endforeach