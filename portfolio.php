<?php
//function to input header
function writeHead($title) {
$headText = <<<HTML
    <!Doctype html>
    <html lang="en">
    <head>
        <title>$title</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="slides/responsiveslides.css">
        <link rel="stylesheet" href="popup/magnific-popup.css">
        <link rel="stylesheet" href="portfolio.css">
        <meta name="description" content="One of a kind dog delivery company. Bringing your new best friend to your door step!">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="slides/responsiveslides.min.js"></script>
        <script src="popup/jquery.magnific-popup.min.js"></script>
        <script src="project1.js" type="text/javascript"></script>
        <script></script>
    </head>
    <body>
    <div id="wrapper">
        <header>
            <h1>Pawsitive Delivery</h1>
            <!-- 1200x400 banner-->
            <ul class="rslides" id="slider1">
                <li><img src="photos/banner/1200450slide1.jpg" alt="Man playing with a Golden Lab in a park"></li>
                <li><img src="photos/banner/1200450slide2.jpg" alt="French Bulldog puppy sleeping in a woman's arms"></li>
                <li><img src="photos/banner/1200450slide3.jpg" alt="Goldendoole being carried by a woman facing away from the camera"></li>
                <li><img src="photos/banner/1200450slide4.jpg" alt="Young boy cuddling his face into a St. Bernard's face"></li>
                <li><img src="photos/banner/1200450slide5.jpg" alt="Older woman kneeling in front of a Golden Lab in the park"></li>
                <li><img src="photos/banner/1200450slide6.jpg" alt=""></li>
            </ul>
            <!-- 960x320 banner -->
            <ul class="rslides" id="slider2">
                <li><img src="photos/banner/960400slide1.jpg" alt="Man playing with a Golden Lab in a park"></li>
                <li><img src="photos/banner/960400slide2.jpg" alt="French Bulldog puppy sleeping in a woman's arms"></li>
                <li><img src="photos/banner/960400slide3.jpg" alt="Goldendoole being carried by a woman facing away from the camera"></li>
                <li><img src="photos/banner/960400slide4.jpg" alt="Young boy cuddling his face into a St. Bernard's face"></li>
                <li><img src="photos/banner/960400slide5.jpg" alt="Older woman kneeling in front of a Golden Lab in the park"></li>
                <li><img src="photos/banner/960400slide6.jpg" alt="Little girl running towards her Great Dane outside"></li>
            </ul>
            <!-- 720x240 banner-->
            <ul class="rslides" id="slider3">
                <li><img src="photos/banner/720300slide1.jpg" alt="Man playing with a Golden Lab in a park"></li>
                <li><img src="photos/banner/720300slide2.jpg" alt="French Bulldog puppy sleeping in a woman's arms"></li>
                <li><img src="photos/banner/720300slide3.jpg" alt="Goldendoole being carried by a woman facing away from the camera"></li>
                <li><img src="photos/banner/720300slide4.jpg" alt="Young boy cuddling his face into a St. Bernard's face"></li>
                <li><img src="photos/banner/720300slide5.jpg" alt="Older woman kneeling in front of a Golden Lab in the park"></li>
                <li><img src="photos/banner/720300slide6.jpg" alt="Little girl running towards her Great Dane outside"></li>
            </ul>
            <!-- 600x250 banner-->
            <ul class="rslides" id="slider4">
                <li><img src="photos/banner/600250slide1.jpg" alt="Man playing with a Golden Lab in a park"></li>
                <li><img src="photos/banner/600250slide2.jpg" alt="French Bulldog puppy sleeping in a woman's arms"></li>
                <li><img src="photos/banner/600250slide3.jpg" alt="Goldendoole being carried by a woman facing away from the camera"></li>
                <li><img src="photos/banner/600250slide4.jpg" alt="Young boy cuddling his face into a St. Bernard's face"></li>
                <li><img src="photos/banner/600250slide5.jpg" alt="Older woman kneeling in front of a Golden Lab in the park"></li>
                <li><img src="photos/banner/600250slide6.jpg" alt="Little girl running towards her Great Dane outside"></li>
            </ul>
            <!-- 460x200 banner-->
            <ul class="rslides" id="slider5">
                <li><img src="photos/banner/460200slide1.jpg" alt="Man playing with a Golden Lab in a park"></li>
                <li><img src="photos/banner/460200slide2.jpg" alt="French Bulldog puppy sleeping in a woman's arms"></li>
                <li><img src="photos/banner/460200slide3.jpg" alt="Goldendoole being carried by a woman facing away from the camera"></li>
                <li><img src="photos/banner/460200slide4.jpg" alt="Young boy cuddling his face into a St. Bernard's face"></li>
                <li><img src="photos/banner/460200slide5.jpg" alt="Older woman kneeling in front of a Golden Lab in the park"></li>
                <li><img src="photos/banner/460200slide6.jpg" alt="Little girl running towards her Great Dane outside"></li>
            </ul>
            <!-- mobile button-->
            <div id="nav" class="hamNav">
                <div class="menu-btn" id="menu-btn">
                    <div></div>
                    <span class="bar top"></span>
                    <span class="bar middle"></span>
                    <span class="bar bottom"></span>
                </div>
                <nav>
                    <div class="dropdownNav">
                    <ul>
                        <div class="logo"><a href="index.php"><img src="photos/logo/thirdLogoSm.png" alt="Pawsitive Delivery logo"></a></div>
                        <li class="nav"><a class="sliding-u-l-r" href="dogs.php">Dogs</a></li>
                        <li class="nav"><a class="sliding-u-l-r" href="adopt.php">Adopt</a></li>
                        <li class="nav"><a class="sliding-u-l-r" href="reviews.php">Reviews</a></li>
                        <li class="nav"><a class="sliding-u-l-r" href="team.php">Our Team</a></li>
                    </ul>
                    </div>
                </nav>
            </div>
        </header>
HTML;
echo $headText;
}
//writes footer html
function writeFoot() {
    $footText = <<<HTML
        <footer>
            <div class="contact">
                <h2><a class="popup-with-zoom-anim" href="#contact">Contact us!</a></h2>
                <h3>469-733-PAWS</h3>
            </div>
            <div id="contact" class="zoom-anim-dialog mfp-hide">
                <form id="contactForm" class="contactForm" method="post" action="">
                <h2>Contact us!</h2>
                    <p>
                        <label for="fname">First name:</label>
                        <input type="text" name="fname" id="fname">
                    </p>
                    <p>
                        <label for="lname">Last name:</label>
                        <input type="text" name="lname" id="lname">
                    </p>
                    <p>
                        <label for="email">Email address:</label>
                        <input type="email" name="email" id="email">
                    </p>
                    <p>
                        <label for="comments">Comments:</label>
                        <textarea name="comments" id="comments">Say Something!
                        </textarea>
                    </p>
                    <p class="submit3">
                        <label for="submit"></label>
                        <button type="submit" name="submit">Send</button>
                    </p>
                </form>
            </div>
            <div class="icons">
                <a href="www.facebook.com"><i class="fa fa-facebook-square"></i></a>
                <a href="www.twitter.com"><i class="fa fa-twitter-square"></i></a>
                <a href="www.instagram.com"><i class="fa fa-instagram"></i></a>
            </div>
            <p>Copyright &copy; Amanda Mayfield</p>
        </footer>
    </div>
    </body>
    </html>
HTML;
echo $footText;
}
?>