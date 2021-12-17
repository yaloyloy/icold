<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>I COLD Cambodia</title>
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/bootstrap.min.css">
    <link rel="stylesheet" href="/style/all.css">
    <link rel="stylesheet" href="/style/fontawesome.min.css">
    <link rel="stylesheet" href="/style/owl.carousel.min.css">
    <link rel="stylesheet" href="/style/owl.theme.default.min.css">

    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/> -->

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-3.2.1.min.js"></script>
    

</head>
<body>
    <!-- Top Bar -->
    <div class="container-fluid full-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <div class="logo-box">
                        <a href="#"> <img src="/img/614007083e429_logo.jpg" alt="logo"> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Bar -->
    <!-- Slide -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12 slide-container">
                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item"><img src="/img/613956793dc7f_1.jpg" alt=""></div>
                            <div class="owl-item"><img src="/img/6139567fb507e_2.jpg" alt=""></div>
                            <div class="owl-item"><img src="/img/613956b14937e_3.jpg" alt=""></div>
                        </div>
                    </div>
                    
                </div>
            </div>              
        </div>
    </div>
    <!-- End Slide -->
    <!-- Main Products -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12 title-content">
                <h2>ផលិតផលរបស់យើង</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 item-box">
                <a href="#" class="box">
                    <div class="img-box">
                        <img src="/img/product/6139db342c45c_ss-p688.jpg" alt="item">
                    </div>
                    <div class="text-box">
                        <h3>SS-P688</h3>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 item-box">
                <a href="#" class="box">
                    <div class="img-box">
                        <img src="/img/product/6139dbccddeaa_ss-p1500.jpg" alt="item">
                    </div>
                    <div class="text-box">
                        <h3>SS-P1500</h3>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 item-box">
                <a href="#" class="box">
                    <div class="img-box">
                        <img src="/img/product/6139dcda51666_bcd-90-1.jpg" alt="item">
                    </div>
                    <div class="text-box">
                        <h3>BCD-90</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Main Products -->
    <!-- Footer -->
    <div class="container-fluid footer-box">
        <div class="container">
            <div class="row">
                <div class="footer-title">
                    <h2>អាសយដ្ឋាន</h2>
                    <P>Sang Khat Spar Deom Kor Khant Toul Kork Phnom Penh <br>
Phone: 017 322 456 (service) / 092 322 456 (Repaire)</P>
                    <h2>ទំនាក់ទំនងបណ្តាញសង្គម</h2>
                    <a href="#"> <i class="fab fa-facebook-square icon-fb"></i> </a>
                    <P>© រក្សា​សិទ្ធិ​គ្រប់​យ៉ាង​ដោយ​ I Cold Camboida ឆ្នាំ​២០២១</P>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- Initialize Swiper -->
    
</body>
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

<script>
$(document).ready(function(){

    $('.owl-carousel').owlCarousel({
    loop:true,
    // navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    responsiveClass:true,
    responsive:{
            0:{
                items:1,
                nav:false,
                dots:false,
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:true,   
            }
            
        }
    
    });    
    $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');




});
</script>

</html>