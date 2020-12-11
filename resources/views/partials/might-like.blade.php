<div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
            @foreach ($mightAlsoLike as $item)
            <a href="#" class="might-like-product">
                <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
            <div class="might-like-product-name">{{ $item->name }}</div>
            <div class="might-like-product-price">{{ $item->presentPrice() }}</div>
            </a>
                
            @endforeach
            
        </div>
    </div>
</div>
