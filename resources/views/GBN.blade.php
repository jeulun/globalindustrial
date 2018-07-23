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
        <header class="with-background gbnpage">
            <div class="top-nav container">
                <div class="top-nav-left">
                    <div class="logo"><a href="/"><img src="{{ asset('img/companylogo1.png') }}" alt="logo image"></a></div>
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
                    <h1>Let Us Streamline Your Fastener Needs</h1>
                    <p>Bolts, Sockets, Screws, Nuts, Washers, Set Screws, Pins, Studs, Anchors, Plugs, Rivets and more...</p>
                    <div class="hero-buttons">
                        <a href="{{ route('shop.index') }}" class="button button-white">Shop Now</a>
                        
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="img/headpic.png" alt="hero image">
                </div> <!-- end hero-image -->
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">

            <div class="container">
                <h1 class="text-center">Welcome to Global Bolts & Nuts Sdn Bhd</h1>

                <p class="section-description"><strong>Global Bolts And Nuts Sdn Bhd</strong> is a company that specializes in bolts, nuts, screw, washers and other types of fasteners. Our main office is located in Johor Jaya, Johor Bahru (JB). We mainly supply our products to factories such as networking-louvre service, jigs and fabrication, automation, tooling maker, food industries for conveyor and packing, furniture and renovation, marine oil and gas, etc.</p>

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

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">Our Services</h1>
            
                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <img class="blog-post-img" src="/img/otherscover.jpg" alt="Blog Image">
                        <h2 class="blog-title"><u>Screw Customization</u></h2>
                        <div class="blog-description">
                            <p><strong><abbr title="Global Bolts And Nuts Sdn Bhd">GBN</abbr></strong> offers screw customization to all clients with special orders.</p><br>  

                            <p>Our team is committed to modifying and producing the best products available that fit your exact specifications. Our comprehensive inventory could provide you with nearly any genre of screws. On top of that, we are specilized in providing fasteners with special dimensions by modifying screws using your choice of materials from our extensive inventory. </p><br>
                            <p>Moreover, our retail store is stocked with countless products covering heat-treated, threaded and various plating and finishing screws ready to be bought off the shelves.</p>
                        </div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <img class="blog-post-img" src="/img/servicescover.jpg" alt="Blog Image">
                        <h2 class="blog-title"><u>Customized Packaging</u></h2>
                        <div class="blog-description"><strong><abbr title="Global Bolts And Nuts Sdn Bhd">GBN</abbr></strong> offers customized packaging options to help increase your efficiency and productivity (prevent down time & cost saving).
        
        <br><br>
        Whether for manufacturing or service departments, our highly experienced packaging experts will work closely with you to customize a solution to meet your packaging needs. 
        <br><br>
        Currently we provide custom packaging kits for an amazing range of industries, such as:
        <br>
        <br>
        <ul>
            <li>Pet cages</li>
            <li>Industrial mould sets</li>
            <li>Industrial part by models & design</li>
            <li>Prefabricated machines</li>
        </ul>
        <br>
        If you need to keep it together or get it assembled, our hand assembly departments are ready to service base on your requests.
        </p>
    </div>
                    </div>
                    
                </div>
            </div> <!-- end container -->
        </div> <!-- end blog-section -->
        @include('partials.footer')


    </body>
</html>
