
<div>
@foreach($products as $product)

          {{ $product->name }}


@endforeach
{{ $products->links() }} 
</div>
            

