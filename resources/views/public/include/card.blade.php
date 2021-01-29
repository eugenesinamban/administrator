<div class="card border-dark mb-4">
    <h5 class="card-header bg-danger text-light">{{ $product['text'] }}</h5>
    <div class="card-body">
        <a href="{{ route('external.show', [$type, $product]) }}">
            <img src="{{ $product['image_url'] }}" class="image card-image mb-4">
        </a>
        <like-bar 
            :likes="{{ json_encode($product->likes) }}"
            :route="{{ json_encode(route('external.like', [$type, $product]))}}"
            :product="{{ collect($product)->toJson() }}"
        />
    </div>
</div>