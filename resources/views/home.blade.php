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
    <!--Hero-->
    <div class="hero">
        <div class="overlay">
            <div class="container">
                <div class="header">
                    <div class="logo">
                        <h1><a href="">Q9Production</a></h1>
                    </div>
                    <div class="menu">
                        <a href="">Home</a>
                        <a href="">About</a>
                        <a href="">Gallery</a>
                        <a href="">Contact Us</a>
                    </div>
                </div>
                <div class="hero-center">
                <h2>Let's Make a Great Event With Us</h2> 
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, error. Optio voluptatum molestias in expedita eveniet, perferendis molestiae repellat officiis veritatis, nemo natus rerum, corporis suscipit ducimus atque fugiat aperiam?</p>
                <a href="" class="btn">Explore more..</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero-->
    <!--About Us-->
    <div class="about">
        <div class="container">
            <div class="wrapper">
                <div class="about-image">
                    <div class="imageone">
                        <img class="img-responsive" src="{{asset('img/foto-about.jpeg')}}">
                    </div>
                    <div class="imagetwo">
                        <img src="img/foto-about2.JPG" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="about-desc">
                    <h4>About Us</h4>
                    <h2>Q9 Production</h2>
                    <p>each member's experience of more than 10-20 years, we founded a company, Q9 Production (PT Suara Abadi Indonesia), which will be proud to provide solutions to our Clients and Customers beyond what they expect.</p> 
                    <a href="{{route('about-us')}}" class="btn">Learn More</a>
                </div>
            </div>
            
        </div>
    </div>
    <!--End About Us-->
    <!--Our Event-->
    <div class="events">
        
        <div class="container"> 
            <div class="wrapper" style="justify-content: center;">
                <div class="events-title">
                    <h2>Our Events</h2>
                </div>
            </div>
            <div class="swiper mySwiper container">
           
                <div class="swiper-wrapper wrapper">
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="img/image1.png" alt="">
                                
                            </div>
                            <div class="name-event"><h5>Nama Event 1</h5>
                            </div>
                            <div class="date-event">
                                <p style="font-size: 20px;">Tanggal Event 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="img/image2.png" alt="">
                                
                            </div>
                            <div class="name-event"><h5>Nama Event 2</h5>
                            </div>
                            <div class="date-event">
                                <p style="font-size: 20px;">Tanggal Event 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="img/image3.png" alt="">
                                
                            </div>
                            <div class="name-event"><h5>Nama Event 3</h5>
                            </div>
                            <div class="date-event">
                                <p style="font-size: 20px;">Tanggal Event 3</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="img/image4.png" alt="">
                                
                            </div>
                            <div class="name-event"><h5>Nama Event 4</h5>
                            </div>
                            <div class="date-event">
                                <p style="font-size: 20px;">Tanggal Event 4</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="img/image5.png" alt="">
                                
                            </div>
                            <div class="name-event"><h5>Nama Event 5</h5>
                            </div>
                            <div class="date-event">
                                <p style="font-size: 20px;">Tanggal Event 5</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="img/image6.jpg" alt="">
                                
                            </div>
                            <div class="name-event"><h5>Nama Event 6</h5>
                            </div>
                            <div class="date-event">
                                <p style="font-size: 20px;">Tanggal Event 6</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        
    </div>
    <!--End Our Event-->
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

<script>
    //  Initialize Swiper
    let swiper = new Swiper(".mySwiper", {
    spaceBetween: 20,
    slidesPerView: 4,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable:true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    });



</script>
</html>