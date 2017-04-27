<?php
$site = $_SERVER["SERVER_NAME"];
$from_mail = "admin@$site";
$to = "nyagnyuk@ukr.net";
$subject = "Заявка c сайта $site";



if (isset($_POST['name']) && isset($_POST['email'])){

    $message  =' Имя: ' . $_POST['name'];
    $message .= '<br/>Email: ' . $_POST['email'];

    if(isset($_POST['message'])){
        $message .= '<br>Сообщение: ' .$_POST['message'];
    }

    if(isset($_POST['site'])){
        $message .= '<br>Сообщение: ' .$_POST['site'];
    }

    $message .= "<br>Проверочная ссылка: ".$site.$_SERVER["REQUEST_URI"];

    $headers  = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n";
    $headers .= "From: $from_mail\r\n";
    mail($to, $subject, $message, $headers);


}
?>
<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="MobileOptimized" content="320">
    <meta name="description" content="">
    <meta name='copyright' content="">
    <meta name="og:title" content="">
    <meta name="og:image" content="">
    <meta name="og:description" content="">
    <meta name="og:email" content="">
    <meta name="og:phone_number" content="+380">
    <meta name="fb:page_id" content="">

    <title>Author</title>

    <!--[if IE]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="css/swiper.min.css">

    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<!--[if lt IE 9]>
<p class="browserupgrade" style="color: #fff;background: #000;padding: 20px 15px; text-align: center;">You are using an
    <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your
    experience.</p>
<![endif]-->



<!-- HEADER -->
<header class="header" id="header">
    <div class="container">
        <div class="top_header">
            <div class="container">

                <div class="header_wrapper main_menu  ">

                    <div class="logo_wrap">
                        <a href="#" class="header__logo">Author
                        </a>
                    </div>

                    <div class="hamburger">
                        <div class="line_hum"></div>
                        <div class="line_hum"></div>
                        <div class="line_hum"></div>
                    </div>

                    <nav class="header__nav">
                        <ul class="header__nav-list menu" id="menu">
                            <li class="header__nav-list-item">
                                <a href="#header" class="header__nav-link anchor">Home</a>
                            </li>
                            <li class="header__nav-list-item">
                                <a href="#service" class="header__nav-link anchor">Service</a>
                            </li>
                            <li class="header__nav-list-item">
                                <a href="#" class="header__nav-link anchor">Portfolio</a>
                            </li>
                            <li class="header__nav-list-item">
                                <a href="#team" class="header__nav-link anchor">Team</a>
                            </li>
                            <li class="header__nav-list-item">
                                <a href="#" class="header__nav-link anchor">Blog</a>
                            </li>
                            <li class="header__nav-list-item">
                                <a href="#contact_us" class="header__nav-link anchor">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header><!-- HEADER [END] -->





<section class="slider">

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-slide_1">
                    <div class="container">
                        <div class="cont_wrap">
                            <h1 class="slider__h1">This is a main heading</h1>
                            <h3 class="slider__h4">Lorem Ipsum is simply dummy text of the printing</h3>
                            <div class="slider_wrap">
                                <a href="#" class="slider_but">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide_2">
                    <div class="container">
                        <div class="cont_wrap">
                            <h1 class="slider__h1">This is a main heading</h1>
                            <h3 class="slider__h4">Lorem Ipsum is simply dummy text of the printing</h3>
                            <div class="slider_wrap">
                                <a href="#" class="slider_but">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide_3">
                    <div class="container">
                        <div class="cont_wrap">
                            <h1 class="slider__h1">This is a main heading</h1>
                            <h3 class="slider__h4">Lorem Ipsum is simply dummy text of the printing</h3>
                            <div class="slider_wrap">
                                <a href="#" class="slider_but">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide_4">
                    <div class="container">
                        <div class="cont_wrap">
                            <h1 class="slider__h1">This is a main heading</h1>
                            <h3 class="slider__h4">Lorem Ipsum is simply dummy text of the printing</h3>
                            <div class="slider_wrap">
                                <a href="#" class="slider_but">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>


</section>


<section class="team" id="team">
    <div class="container">
        <h2 class="team_h2">The Team</h2>
        <ul class="team__list">
            <li class="team__list-item">
                <div class="circle"></div>
                <h4>Adrian Thomas </h4>
                <h5>CEO & Founder</h5>
                <p class="team__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been
                </p>
            </li>
            <li class="team__list-item">
                <div class="circle"></div>
                <h4>Narate Ketram </h4>
                <h5>Creative Director</h5>
                <p class="team__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been
                </p>
            </li>
            <li class="team__list-item">
                <div class="circle"></div>
                <h4>Fernando Comet </h4>
                <h5>CEO & Founder</h5>
                <p class="team__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been
                </p>
            </li>
            <li class="team__list-item">
                <div class="circle"></div>
                <h4>Adedayo saheed </h4>
                <h5>Creative Director</h5>
                <p class="team__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been
                </p>
            </li>
        </ul>

    </div>


</section>


<section class="service" id="service">
    <div class="container">
        <ul class="service__list">
            <li class="service__list-item">
                <ul class="service__inside">
                    <li class="service__inside-item-1 one">Basic</li>
                    <li class="service__inside-item-2">$5.01/ Month</li>
                    <li class="service__inside-item-3">Lorem ipsum</li>
                    <li class="service__inside-item-3">Dolor sit amet, consect</li>
                    <li class="service__inside-item-3">Adipiscing elit</li>
                    <li class="service__inside-item-3">Proin commodo turpis</li>
                    <li class="service__inside-item-3">lacus pulvinarvel</li>
                    <li class="service__inside-item-3">Prnare nisi pretium.</li>
                    <li class="service__inside-item-4">
                        <div class="service_wrap buy_one">
                            <a href="" class="service_wrap_link">Buy now</a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="service__list-item">
                <ul class="service__inside">
                    <li class="service__inside-item-1 second">Pro</li>
                    <li class="service__inside-item-2">$10.01/ Month</li>
                    <li class="service__inside-item-3">Lorem ipsum</li>
                    <li class="service__inside-item-3">Dolor sit amet, consect</li>
                    <li class="service__inside-item-3">Adipiscing elit</li>
                    <li class="service__inside-item-3">Proin commodo turpis</li>
                    <li class="service__inside-item-3">lacus pulvinarvel</li>
                    <li class="service__inside-item-3">Prnare nisi pretium.</li>
                    <li class="service__inside-item-4">
                        <div class="service_wrap buy_second">
                            <a href="" class="service_wrap_link">Buy now</a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="service__list-item">
                <ul class="service__inside">
                    <li class="service__inside-item-1 third">Premium</li>
                    <li class="service__inside-item-2">$20.01/ Month</li>
                    <li class="service__inside-item-3">Lorem ipsum</li>
                    <li class="service__inside-item-3">Dolor sit amet, consect</li>
                    <li class="service__inside-item-3">Adipiscing elit</li>
                    <li class="service__inside-item-3">Proin commodo turpis</li>
                    <li class="service__inside-item-3">lacus pulvinarvel</li>
                    <li class="service__inside-item-3">Prnare nisi pretium.</li>
                    <li class="service__inside-item-4">
                        <div class="service_wrap buy_third">
                            <a href="" class="service_wrap_link">Buy now</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>



<!-- FOOTER -->
<footer class="footer" id="contact_us">
    <div class="container">
        <h2 class="footer_h2">Contact Us</h2>
        <div class="left">
            <h5 class="left_h5">Get in touch with us</h5>
            <p class="left_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
            <ul class="left__list">
                <li class="left__list-item"><a href="https://vk.com/vinfy"><img src="img/facebook.png" alt="facebook"></a></li>
                <li class="left__list-item"><a href="#"><img src="img/twitter.png" alt="twitter"></a></li>
                <li class="left__list-item"><a href="#"><img src="img/google.png" alt="google"></a></li>
            </ul>
            <ul class="left_down__list">
                <li class="left_down__list-item">Posted by Dospel & GanjaParker</li>
                <li class="left_down__list-item"><a class="left-down__link" href="tel:+XXXXXXXXXXXX">+XX-XXXX - XXXX - XX</a></li>
                <li class="left_down__list-item">info@mail.com</li>
            </ul>
        </div>
        <div class="right">
            <form action="index.php" method="post">
                <input type="text" name="name" required placeholder="Имя">
                <input type="email" name="email" required placeholder="Email">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                <button class="but" type="submit" value="Send">Send</button>
            </form>

        </div>
    </div>
</footer><!-- FOOTER END -->



<!-- Scripts load -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>
