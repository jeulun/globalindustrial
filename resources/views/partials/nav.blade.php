<header>
    <div class="top-nav container">
      <div class="top-nav-left">
                <div class="logo"><a href="/"><img src="{{ asset('img/GIlogo.png') }}" alt="logo image"></a></div>
                
                <div class="top-nav-right">
                <ul>
                    <li><a href="{{ route('shop.index') }}">Products</a></li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Brands</button>
                                <div class="dropdown-content">
                                        <a href="{{ route('GBN.index') }}">GBN</a>
                                        <a href="{{ route('GOS.index') }}">GOS</a>
                                        <a href="{{ route('CBI.index') }}">CBI</a>
                                </div>
                        </div>

                    </li>
                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                </ul>

          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          {{ menu('main', 'partials.menus.main') }}
          @endif
                </div>
                </div>

          

      <div class="top-nav-right">
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          @include('partials.menus.main-right')
          @endif
      </div>
    </div> <!-- end top-nav -->
</header>