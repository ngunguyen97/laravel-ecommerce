<ul>
  @foreach ($items as $menu_item)
      <li>
        <a href="{{ $menu_item->link() }}">
          {{ $menu_item->title }}
          @if ($menu_item->title === 'Cart')
            @if (Cart::instance('default')->count() > 0 )
            <span class="cart-count">{{ Cart::instance('default')->count() }}</span><span></span>
            @else 
            <span class="cart-count">0</span><span></span>
            @endif            
          @endif
        </a>
      </li>
  @endforeach
</ul>
