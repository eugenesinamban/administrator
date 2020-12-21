<div class="card border-dark mb-3">
    <h5 class="card-header">{{ $product['text'] }}</h5>
    <div class="card-body">
        <p class="card-text"></p>
        <img src="{{ imageUrl($product['image_url']) }}" class="image mb-3">
        <div class="row">
            <div class="col-6 text-left">
                <a href="{{ route('external.show', [$type, $product]) }}" class="btn btn-danger">ページへ</a>
            </div>
            <div class="col-6 text-right">
                @include('public.include.like', $product)
            </div>
        </div>
    </div>
</div>