<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Global Industrial</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header class="with-background">
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

                    {{ menu('main', 'partials.menus.main') }}
                </div>
                </div>
                <div class="top-nav-right">
                    @include('partials.menus.main-right')
                </div>
            </div> <!-- end top-nav -->
            <div class="hero container">
                <div class="hero-copy">
                    <h1>One-Stop Solution for All Industrial Needs</h1>
                    <p>Bolts, Sockets, Screws, Nuts, Gaskets, Bearings, Rings, Rivets and more...</p>
                    <div class="hero-buttons">
                        <a href="{{ route('shop.index') }}" class="button button-white">Shop Now</a>
                        <a href="{{ route('contact.index') }}" class="button button-white">Visit Us</a>
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="img/mainpic.png" alt="hero image">
                </div> <!-- end hero-image -->
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">

            <div class="container">
                <h1 class="text-center">Welcome to Global Industrial Sdn Bhd</h1>

                <p class="section-description"><strong>Global Industrial Sdn Bhd</strong> is a company that provides a wide range of industrial products by collaborating with highly skilled SMEs. These SMEs are professionals in the industrial sector inclduing fasteners, seals, gaskets, bearings and other types of mechanical products. Our main office is located in Johor Jaya, Johor Bahru (JB). We mainly supply our products to factories such as networking-louvre service, jigs and fabrication, automation, tooling maker, food industries for conveyor and packing, furniture and renovation, marine oil and gas, etc.</p>

                <h1 class="text-center">Our Products</h1>

                <div class="products text-center">
                    @foreach ($products as $product)
                        <div class="product">
                            <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                            <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                            <div class="product-price">{{ $product->presentPrice() }}</div>
                        </div>
                    @endforeach

                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="{{ route('shop.index') }}" class="button">View more products</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

        @include('partials.footer')


    </body>
</html>
