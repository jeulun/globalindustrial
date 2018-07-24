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
        <header class="with-background mainpage">
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
            <h1 style="margin: 0px">Visit Us at</h2>
            </div> <!-- end hero -->
        </header>

    <div class="container">
    <div class="row contact">
    
    <div class="column middle contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3839633820667!2d103.79226231532603!3d1.5363943613742586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6c3ee62ec011%3A0x7017989b22b40e9!2sGlobal+Bolts+and+Nuts+Sdn+Bhd!5e0!3m2!1sen!2smy!4v1513576175812" width="1200" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
    <div class="column middle contact">
        <form action="contact.html" method="post">
        <h2>Contact Us</h2>
        <p>Thank You for visiting our website. For any enquiries, please leave your message here.</p>
        <hr>
        <h4>Name:</h4>
        <input type="text" required="required">
        
        <h4>Company Name:</h4>
        <input type="text">
        
        <h4>Email:</h4>
        <input type="email" required="required">
        
        <h4>Contact No. :</h4>
        <input type="text">
        
        <h4>Handphone No. :</h4>
        <input type="text">
        
        <h4>Enquiry:</h4>
        <textarea id="enquiry" type="text" required="required"></textarea>
        <br>
        <br>
        <button id="button" type="submit">Submit</button>
        </form>
    </div>
  
    
</div>
</div>
        @include('partials.footer')


    </body>
</html>