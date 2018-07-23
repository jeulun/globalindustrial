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
        <header class="with-background cbipage">
            <div class="top-nav container">
                <div class="top-nav-left">
                    <div class="logo"><a href="/"><img src="{{ asset('img/CBIlogo.png') }}" alt="logo image"></a></div>
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
                    <h1>Providing solutions for Engineering Businesses</h1>
                    
                    <div class="hero-buttons">
                        <a href="{{ route('shop.index') }}" class="button button-white">Shop Now</a>
                        
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="img/bearingsheadpic.png" alt="hero image">
                </div> <!-- end hero-image -->
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">

            <div class="container">
                <h1 class="text-center">Welcome to Century Bearing Industrial Sdn Bhd</h1>

                <p class="section-description"><strong>Century Bearing Industrial Sdn Bhd</strong> is an industrial products supplier company. Our main office is located in Puchong, Selangor, Malaysia. We take pride in providing a complete range of industrial products to meet customer's needs from bearing to fasteners, socket to lock.</p>

                <p class="section-description">Here at Century Bearing Industrial Sdn Bhd, we source only the best and high quality products from the major supplier in worldwide. Our high quality products include bearing, belt, bolt, coupling, pulley, roller chain, fasteners, socket cap screw, sprocket gear, double pitch conveyor, stainless steel, cotton pin, power lock, brake lining, exhaust pipe, lock pin, circlips, 0-ring, general hardware, etc.</p>


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
                <h1 class="text-center">Why Choose Us</h1>
            
                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <img class="blog-post-img" src="/img/team.png" alt="Blog Image">
                        <h2 class="blog-title"><u>Experienced Team</u></h2>
                        <div class="blog-description">
                            <p>Our knowledgeable sales people have an average of 10 years of industry experience. They take the time to understand your needs, make recommendations to help you make a better buying decision and are committed to building stronger relationships. Everyone is empowered to source product from wherever necessary, and make decisions that will expedite your orders. They are your trusted advisors, not just order takers. You choose the sales associate you want to deal with every time. Now that’s <strong>“customer intimacy”</strong> at its best!</p>
                        </div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <img class="blog-post-img" src="/img/qualityassurance.png" alt="Blog Image">
                        <h2 class="blog-title"><u>Quality Assurance</u></h2>
                        <div class="blog-description"><strong><abbr title="Century Bearing Industrial Sdn Bhd">CBI</abbr></strong> is <strong>ISO 9001 Certified</strong>. We are committed to meeting the highest standards of product performance and providing outstanding service to our customers by using our Quality Management System (QMS). We strive to continually improve the effectiveness of our QMS to ensure full compliance with ISO 9001:2008. Our standards and processes are driven by your needs and not some rigid policy. You get the peace of mind from our repeatable quality and accuracy with a documented error rate of less than 1%.
        
  
                        </div>
                    </div>
                    
                </div>
            </div> <!-- end container -->
        </div> <!-- end blog-section -->
        @include('partials.footer')


    </body>
</html>
