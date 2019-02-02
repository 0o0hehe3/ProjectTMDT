@foreach($products as $product)
	<tr>
		<td>{{ $product->id }}</td>
		<td style="width: 15%">{{ $product->name }}</td>
		<td style="width: 15%">{{ $product->product_type->name }}</td>
		<td style="text-align: center;"><img src="{{ $product->url_image_1 }}" alt="" width="45%"></td>
		<td style="text-align: center;"><img src="{{ $product->url_image_2}}" alt="" width="45%"></td>
		<td style="text-align: center;"><img src="{{ $product->url_image_3 }}" alt="" width="45%"></td>
		<td style="width: 10%; text-align: center;">
			<a href="{{ route('admin.product.edit', ['id'=>$product->id]) }}"><span><i class="fa fa-edit fa-2x"></i></span></a> |
			<a href=""><span><i class="fa fa-trash fa-2x"></i></span></a>
		</td>
	</tr>
@endforeach
