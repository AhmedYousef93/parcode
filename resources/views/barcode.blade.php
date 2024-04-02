<style>
    .barcode-number{
        margin-top: 0;
    }
</style>
@foreach($products as $product)
    <div class="product-barcode">
        <div class="barcode">
            {!! DNS1D::getBarcodeHTML("$product->product_code", "C128", 1.4, 22) !!}
        </div>
        <p class="barcode-number">alashab-{{$product->product_code}}</p>
    </div>
@endforeach

