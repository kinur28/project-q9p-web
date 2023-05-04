<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>HOME-q9production</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <p>q9p</p>
        </div>
        <nav>
            <ul>
                <li><a class="nav-color" href="#">Home</a></li>
                <li><a class="nav-color"href="#">About</a></li>
                <li><a class="nav-color"href="#">Gallery</a></li>
                <li><a class="nav-color"href="#">Contact Us</a></li>
            </ul>
        </nav>
       
    </header>
    <!--About Us-->
    <div class="about">
        <div class="fade-in container">
            <div class="wrapper">
                <div class="flip about-image">
                    <div class="imageone">
                        <img class="img-responsive" src="img/foto-about.jpeg">
                    </div>
                    <div class="imagetwo">
                        <img src="img/foto-about2.JPG" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="about-desc">
                    <h4>About Us</h4>
                    <h2>Q9 Production</h2>
                    <p>each member's experience of more than 10-20 years, we founded a company, Q9 Production (PT Suara Abadi Indonesia), which will be proud to provide solutions to our Clients and Customers beyond what they expect.</p> 
                    <a href="" class="btn">Learn More</a>
                </div>
            </div>
            
        </div>
    </div>
    <!--End About Us-->
     <!--Service-->
     <div class="service">
        <div class="container">
            <div class="wrapper">
                <div class="service-choice">
                    <h1>The justify-content Property</h1>

                    <p>The "justify-content: space-between;" displays the flex items with space between the lines:</p>

                    <div class="grid-container">
                        <div class="grid-item">Sound System</div>
                        <div class="grid-item">Lighting</div>
                        <div class="grid-item">Multimedia & Multicamera</div>
                        <div class="grid-item">Generator</div>
                        <div class="grid-item">LED</div>
                        <div class="grid-item">Stage, Rigging, & Tent</div>  
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--End Service-->
    <!--footer-->
    <footer class="footer">
        <div class="container">
            <div class="wrapper">
                <div class="row-footer">
                    <div class="col-1-footer">
                        <img class="logo-footer" src="img/Logo.png" height="100" width="100">
                        <h2>PT Suara Abadi Indonesia</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates, deleniti?</p>
                    </div>
                    <div class="col-2-footer">
                        <h4>Product</h4>
                        <a href="">Sound System</a>
                        <br>
                        <a href="">Lighting</a>
                        <br>
                        <a href="">Multimedia & Multicamera</a>
                        <br>
                        <a href="">LED</a>
                        <br>
                        <a href="">Stage, Ringging, & Tent</a>
                        <br>
                        <a href="">Generator</a>
                    </div>
                    <div class="col-3-footer">
                        <h4>Connect</h4>
                        <a href="">Instagram</a>
                        <br>
                        <a href="">Facebook</a>
                    </div>
                    <div class="col-4-footer">
                        <h4>Contact</h4>
                        <a href="">Email@gmail.com</a>
                        <br>
                        <a href="">+62812xxxxxxxx</a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--End Footer-->
</body>
<script type="text/javascript">
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".navbar").addClass("active");
            $(".nav-color").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
        $(".navbar").removeClass("active");
        $(".nav-color").removeClass("active");
        }
    });

</script>
</html>