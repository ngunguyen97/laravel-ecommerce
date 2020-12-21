<ul>
  @guest
    <li><a href="{{ route('register') }}">Sign up</a></li>
    <li><a href="{{ route('login') }}">Log in</a></li>
  @else
    <li>
      <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
          Logout
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
  </li>
  @endguest

  <li>
    <a href="{{ route('cart.index') }}">Cart</a>
    @if (Cart::instance('default')->count() > 0 )
      <span class="cart-count">{{ Cart::instance('default')->count() }}</span><span></span>
      @else 
      <span class="cart-count">0</span><span></span>
    @endif    
  </li>
  {{-- @foreach ($items as $menu_item)
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
  @endforeach --}}
</ul>

