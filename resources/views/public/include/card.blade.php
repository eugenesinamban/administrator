<div class="card border-dark mb-4">
    <h5 class="card-header bg-danger text-light">{{ $product['text'] }}</h5>
    <div class="card-body">
        <a href="{{ route('external.show', [$type, $product]) }}">
            <img src="{{ imageUrl($product['image_url']) }}" class="image card-image mb-4">
        </a>
        <div class="row">
            <div class="col-6">
                <p class="mb-4 text-left">
                    いいね数 : {{ $product['likes'] }}
                </p>
            </div>
            <div class="col-6">
                <p class="text-danger text-right">{{ session($product->slug) }}</p>
            </div>
        </div>
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