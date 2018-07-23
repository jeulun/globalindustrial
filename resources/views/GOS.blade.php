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
        <header class="with-background gospage">
            <div class="top-nav container">
                <div class="top-nav-left">
                    <div class="logo"><a href="/"><img src="{{ asset('img/GOSlogo.png') }}" alt="logo image"></a></div>
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
                    <h1>A Leading Provider of High Quality Sealing Products</h1>
                    <p>O-rings, Oil Seals, Backup Rings, Cords, Kits and more...</p>
                    <div class="hero-buttons">
                        <a href="{{ route('shop.index') }}" class="button button-white">Shop Now</a>
                        
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="img/sealheadpic.png" alt="hero image">
                </div> <!-- end hero-image -->
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">

            <div class="container">
                <h1 class="text-center">Welcome to Global O-Ring & Seal</h1>

                <p class="section-description"><strong>Global O-Ring & Seal</strong> is the All-Around Better choice when purchasing o-rings, oil seals, and sealing accessories, and we work hard to prove that to our customers every day. Therefore, we pride ourselves on exceptional customer service, an experienced and knowledgeable sales team and a commitment to getting every order out on time. Our ultimate goal is to make the entire purchasing process as simple, flexible, efficient and pleasant as possible for our customers as a result.</p>

                <p class="section-description">We serve many different industries including oil and gas, industrial, automotive, food and beverage, aerospace, semiconductor, water purification, military, medical, pool and spa, solar, sporting equipment, and more.</p>

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
                        <h2 class="blog-title"><u>Extensive Inventory</u></h2>
                        <img class="blog-post-img" src="/img/inventoryview.jpg" alt="Blog Image">
                        
                        <div class="blog-description">
                            <p><strong><abbr title="Global O-Ring & Seal">GOS</abbr></strong> is a major stocking distributor of O-Rings, O-Ring Cord Stock, O-Ring Assortment & Splice Kits, Spliced and Hot-Vulcanized O-Rings, Oil Seals, Hydraulic and Pneumatic Seals, and other sealing products. We carry one of the largest inventories in North America in our 25,000 sq. ft. distribution facility.</p><br>  

                        </div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <h2 class="blog-title"><u>Same Day Shipping</u></h2>
                        <img class="blog-post-img" src="/img/samedayshipping.png" alt="Blog Image">
                        
                        <div class="blog-description"><p>Orders received by 3pm CST will ship in the <strong>Same Day</strong>. This includes most orders, however, large orders or those requiring vulcanizing/assembly may take longer. If your order is urgent and must be shipped same day, please call to verify. <em>Terms & Conditions apply</em>.</p>
        
       
                        </div>
                    </div>
                    
                </div>
            </div> <!-- end container -->
        </div> <!-- end blog-section -->
        @include('partials.footer')


    </body>
</html>
