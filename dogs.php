<?php
require_once 'portfolio.php';
// variables for form validation
$fname = NULL;
$lname = NULL;
$email = NULL;
$phone = NULL;
$city = NULL;
$state = NULL;
$zip = NULL;
$pup = NULL;
$time = NULL;
//start of form validation PHP
if(isset($_POST['submit'])) {
    //var_dump($_POST);
    $valid = true;
    // validate first name
    $fname = htmlspecialchars(trim($_POST['fname']));
    if (empty($fname)) {
        $fnameError = "<p class='error'>Please enter your first name.</p>";
        $valid = false;
    }
    // validate last name
    $lname = htmlspecialchars(trim($_POST['lname']));
    if (empty($lname)) {
        $lnameError = "<p class='error'>Please enter your last name.</p>";
        $valid = false;
    }
    $fname = ucfirst(strtolower($fname));
    $lname = ucfirst(strtolower($lname));
    // validate email
    $email = htmlspecialchars(trim($_POST['email']));
    if (empty($email)) {
        $emailError = "<p class='error'>Please enter your email</p>";
        $valid = false;
    }
    // verifies that it's an actual email address
    if (!preg_match('/[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}/',$email)) {
        $validError = "<p class='error'>Invalid email address</p>";
    }
    $phone = htmlspecialchars(trim($_POST['phone']));
    // verifies phone number
    if (!preg_match('/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$|^\d{10}$/',$phone)) {
        $phoneError = "<p class='error'>Please enter your proper 10 digit phone number.</p>";
        $valid = false;
    }
    $city = htmlspecialchars(trim($_POST['city']));
    if (empty($city)) {
        $cityError = "<p class='error'>Please enter your city</p>";
        $valid = false;
    }
    $state = htmlspecialchars(trim($_POST['state']));
    if (empty($state)) {
        $stateError = "<p class='error'>Please enter your state</p>";
        $valid = false;
    }
    $state = strtoupper($state);
    // validates zip code
    $zip = htmlspecialchars(trim($_POST['zip']));
    // makes sure zip code is 5 numbers in length
    if (!preg_match('/\d{5}(-\d{4})?/',$zip)) {
        $zipError = "<p class='error'>Please enter your zip code in numeric form.</p>";
    }
    // validates pup drop down selection list
    $pup = $_POST['pup'];
    if ($pup=="") {
        $pupError = "<p class='error'>Please select a pup!</p>";
        $valid = false;
    }
    $time = $_POST['time'];
    if ($time=="") {
        $timeError = "<p class='error'>Please select a visitation time!</p>";
        $valid = false;
    }
    // if everything is valid then submit
    if ($valid) {
        header("Location: ontheway.php?firstname=$fname&lastname=$lname&visitor=$pup");
        exit();
    }
}
writeHead("Pawsitive Delivery");
?>
    <main>
        <div class="tinyLogo">
            <a href="index.html"><img src="photos/logo/tinyLogo.png" alt="Pawsitive Delivery logo"></a>
        </div>
        <div class="dogh2">
            <h2></h2>
            <h3>Here are the dogs currently available for visits. From old to young, big to small, energetic to just plain chill, we've got a great pup companion for every type of person. Click on any photo to get more info about the dog to see if they're the perfect fit to come be with you!</h3>
        </div>
        <div class="pupGallery">
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info1"><img src="photos/dogs/beagle.jpg" alt="Full body photo of a tricolor Beagle named Sadie"></a>
                <div id="dog-info1" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider6">
                            <li><img src="photos/dogSlide/beagle_1.jpg" alt="Full body photo of a tricolor Beagle"></li>
                            <li><img src="photos/dogSlide/beagle_2.jpg" alt="Up close a photo of a tricolor Beagle"></li>
                            <li><img src="photos/dogSlide/beagle_3.jpg" alt="Photo of a tricolor Beagle"></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>Sadie</p></div>
                        <div><h3>Breed:</h3> <p>Beagle</p></div>
                        <div><h3>Age:</h3> <p>3 years-old</p></div>
                        <div><h3>Weight:</h3> <p>22 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Female</p></div>
                    </div>
                    <div class="dogStory">
                        <p>Sadie is full of energy! She is curious but disciplined and gets along with animals and humans alike. Sadie is extremely smart and enjoys playing games and doing tricks. She is perfect to visit families with kids.</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info2"><img src="photos/dogs/blacklab.jpg" alt="Full body photo of a black Lab named Cooper"></a>
                <div id="dog-info2" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider7">
                            <li><img src="photos/dogSlide/blacklab_1.jpg" alt="Full body photo of a black Lab"></li>
                            <li><img src="photos/dogSlide/blacklab_2.jpg" alt="Close up of a black Lab's face"></li>
                            <li><img src="photos/dogSlide/blacklab_3.jpg" alt="Black Lab's face with tongue hanging out"></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>Cooper</p></div>
                        <div><h3>Breed:</h3> <p>Black Labrador</p></div>
                        <div><h3>Age:</h3> <p>1 year-old</p></div>
                        <div><h3>Weight:</h3> <p>59 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Male</p></div>
                    </div>
                    <div class="dogStory">
                        <p>Cooper is very lovable and playful and is happiest when he has a lot of room to move around in. He is wonderful around humans but may need a little time to adjust to new animal friends. Cooper works best in one on one visitations.</</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info3"><img src="photos/dogs/boxer.jpg" alt="Tan Boxer on a beach named Dixie"></a>
                <div id="dog-info3" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider8">
                            <li><img src="photos/dogSlide/boxer_1.jpg" alt="Tan Boxer on a beach"></li>
                            <li><img src="photos/dogSlide/boxer_2.jpg" alt="Tan Boxer puppy"></li>
                            <li><img src="photos/dogSlide/boxer_3.jpg" alt="Close up of a tan Boxer's face"></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>Dixie</p></div>
                        <div><h3>Breed:</h3> <p>Boxer</p></div>
                        <div><h3>Age:</h3> <p>4 years-old</p></div>
                        <div><h3>Weight:</h3> <p>59 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Female</p></div>
                    </div>
                    <div class="dogStory">
                        <p>If you’re looking for a loyal, obedient, and protective companion, Dixie is the perfect choice for you! She is very playful and always wants to please everyone. She is the ideal visitor for a more energetic person, willing to go on adventures together.</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info4"><img src="photos/dogs/collie.jpg" alt="Black and white Collie laying down in the grass named Lady"></a>
                <div id="dog-info4" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider9">
                            <li><img src="photos/dogSlide/collie_1.jpg" alt="Black and white Collie looking away from the camera"></li>
                            <li><img src="photos/dogSlide/collie_2.jpg" alt="Full body photo of a black and white Collie"></li>
                            <li><img src="photos/dogSlide/collie_3.jpg" alt="Black and white Collie laying down in the grass"></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>Lady</p></div>
                        <div><h3>Breed:</h3> <p>Border Collie</p></div>
                        <div><h3>Age:</h3> <p>1 year-old</p></div>
                        <div><h3>Weight:</h3> <p>35 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Female</p></div>
                    </div>
                    <div class="dogStory">
                        <p>Lady is very sweet and smart and loves the company of children. She adapts well with other dogs and doesn’t even mind the cats! Lady is an ideal visitor for families and is qualified as a companion dog for those suffering from PTSD.</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info5"><img src="photos/dogs/corgi.jpg" alt="Close up of a tricolor Corgi named Lily"></a>
                <div id="dog-info5" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider10">
                            <li><img src="photos/dogSlide/corgi_1.jpg" alt="Close up of a tricolor Corgi's face"></li>
                            <li><img src="photos/dogSlide/corgi_2.jpg" alt="Tricolor Corgi laying against a tree"></li>
                            <li><img src="photos/dogSlide/corgi_3.jpg" alt="Tricolor Corgi laying on the ground"></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>Lily</p></div>
                        <div><h3>Breed:</h3> <p>Corgi</p></div>
                        <div><h3>Age:</h3> <p>3 years old</p></div>
                        <div><h3>Weight:</h3> <p>20 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Female</p></div>
                    </div>
                    <div class="dogStory">
                        <p>Lily has a lot of personality packed into a small body. She loves to play with the big dogs though and go on many adventures! She has experience around other dogs and even enjoys cats. Because of her tendancy to herd, Lily is best kept playing with her adult human friends.</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info6"><img src="photos/dogs/dalmation.jpg" alt="Close up of a Dalmation puppy named Bailey"></a>
                <div id="dog-info6" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider11">
                            <li><img src="photos/dogSlide/dalmation_1.jpg" alt="Close up of a Dalmation puppy"></li>
                            <li><img src="photos/dogSlide/dalmation_2.jpg" alt="Dalmation puppy laying down on carpet"></li>
                            <li><img src="photos/dogSlide/dalmation_3.jpg" alt="Full body photo of Dalmation puppy standing"></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>Bailey</p></div>
                        <div><h3>Breed:</h3> <p>Dalmation</p></div>
                        <div><h3>Age:</h3> <p>9 months</p></div>
                        <div><h3>Weight:</h3> <p>15 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Male</p></div>
                    </div>
                    <div class="dogStory">
                        <p>Bailey is one of the most adorable and feisty guys at Pawsitive Delivery! Bailey is all puppy energy and would love to come visit you to play! He is very independent, but want to please his humans and make them smile! This handsome man is ready to come hang out with you!</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info7"><img src="photos/dogs/golden.jpg" alt="Close up of a Golden Retriever named Duke"></a>
                <div id="dog-info7" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider12">
                            <li><img src="photos/dogSlide/golden_1.jpg" alt="Close up of a Golden Retriever's face"></li>
                            <li><img src="photos/dogSlide/golden_2.jpg" alt="Golden Retriever standing outside in the wind"></li>
                            <li><img src="photos/dogSlide/golden_3.jpg" alt="Golden Retriever laying in the grass with a ball"></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>Duke</p></div>
                        <div><h3>Breed:</h3> <p>Golden Retriever</p></div>
                        <div><h3>Age:</h3> <p>3 years-old</p></div>
                        <div><h3>Weight:</h3> <p>62 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Male</p></div>
                    </div>
                    <div class="dogStory">
                        <p>Duke definitely lives up to his name and promises to be a delightful visito to you. He is wonderful with children and is qualified to assist his humans suffering from blindness or PTSD. Duke has had a very fulfilling life helping others at just 3 years of age. As a very patient and relaxed dog, Duke is fantastic for visiting elderly friends.</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info8"><img src="photos/dogs/jackrussell.jpg" alt="Close up of a brown and white Jack Russel Terrier named Max"></a>
                <div id="dog-info8" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider13">
                            <li><img src="photos/dogSlide/jackrussell_1.jpg" alt="Close up of a brown and white Jack Russel Terrier's face"></li>
                            <li><img src="photos/dogSlide/jackrussell_2.jpg" alt="Full body photo of brown and white Jack Russel Terrier"></li>
                            <li><img src="photos/dogSlide/jackrussell_3.jpg" alt="Brown and white Jack Russel Terrier playing in the grass."></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>Max</p></div>
                        <div><h3>Breed:</h3> <p>Jack Russell Terrior</p></div>
                        <div><h3>Age:</h3> <p>6 years-old</p></div>
                        <div><h3>Weight:</h3> <p>18 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Male</p></div>
                    </div>
                    <div class="dogStory">
                        <p>Don’t let Max’s age fool you! He still has a lot of love to give! He LOVES people and loves to play, but unlike most of his breed, Max isn’t overly hyper and loves to snuggle with his humans. He is definitely proof that big things come in small packages!</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info9"><img src="photos/dogs/lab.jpg" alt="Golden Lab named Sasha laying in the grass with a chew toy"></a>
                <div id="dog-info9" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider14">
                            <li><img src="photos/dogSlide/lab_1.jpg" alt="Golden Lab laying in the grass with a chew toy"></li>
                            <li><img src="photos/dogSlide/lab_2.jpg" alt="Close up of a Golden Lab's face"></li>
                            <li><img src="photos/dogSlide/lab_3.jpg" alt="Golden Lab standing outside"></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>Sasha</p></div>
                        <div><h3>Breed:</h3> <p>Labrador Retriever</p></div>
                        <div><h3>Age:</h3> <p>2 years-old</p></div>
                        <div><h3>Weight:</h3> <p>43 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Female</p></div>
                    </div>
                    <div class="dogStory">
                        <p>Sacha is adaptable and comfortable in almost any situation. She has a lot of love to give and craves a lot of love in return. She loves hiking and swimming, so she's looking for companions to go on outdoor adventures with. Have her accomapny you today!</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info10"><img src="photos/dogs/pomeranian.jpg" alt="Close up of a brown Pomeranian named CoCo"></a>
                <div id="dog-info10" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider15">
                            <li><img src="photos/dogSlide/pomeranian_1.jpg" alt="Close up of a brown Pomeranian's face"></li>
                            <li><img src="photos/dogSlide/pomeranian_2.jpg" alt="Full body photo of a brown Pomeranian"></li>
                            <li><img src="photos/dogSlide/pomeranian_3.jpg" alt="Close up of a brown Pomeranian's face"></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>CoCo</p></div>
                        <div><h3>Breed:</h3> <p>Pomeranian</p></div>
                        <div><h3>Age:</h3> <p>2 years-old</p></div>
                        <div><h3>Weight:</h3> <p>6 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Female</p></div>
                    </div>
                    <div class="dogStory">
                        <p>You would be hard pressed to find a companion as cute as CoCo! She is about as lovable as it gets and would be great with other animals and children. CoCo enjoys making noise and has a tendency to bark but once she warms up to you, the cuddles don't stop. She is a great lap dog and works well with elderly customers.</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info11"><img src="photos/dogs/pug.jpg" alt="Full body photo of a black and tan Pug named Oliver standing in the grass"></a>
                <div id="dog-info11" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider16">
                            <li><img src="photos/dogSlide/pug_1.jpg" alt="Full body photo of a black and tan Pug standing in the grass"></li>
                            <li><img src="photos/dogSlide/pug_2.jpg" alt="Close up of a black and tan Pug's face laying down"></li>
                            <li><img src="photos/dogSlide/pug_3.jpg" alt="Close up of a black and tan Pug's face"></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>Oliver</p></div>
                        <div><h3>Breed:</h3> <p>Pug</p></div>
                        <div><h3>Age:</h3> <p>1 year-old</p></div>
                        <div><h3>Weight:</h3> <p>15 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Male</p></div>
                    </div>
                    <div class="dogStory">
                        <p>Oliver was made to be at a person's side as a loyal companion! He may be shy with other dogs, but is never confrontational. If you're looking for someone to curl up next to you while you read or spend a relaxing afternoon together, Oliver is looking for you!</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div>
                <a class="popup-with-zoom-anim" href="#dog-info12"><img src="photos/dogs/rottweiler.jpg" alt="Black and red Rottweiler named Nikki at the lakeside"></a>
                <div id="dog-info12" class="zoom-anim-dialog mfp-hide dogInfo">
                    <div class="dogSlider">
                        <ul class="rslides" id="slider17">
                            <li><img src="photos/dogSlide/rottweiler_1.jpg" alt="Black and red Rottweiler at the lakeside"></li>
                            <li><img src="photos/dogSlide/rottweiler_2.jpg" alt="Full body photo of a black and red Rottweiler"></li>
                            <li><img src="photos/dogSlide/rottweiler_3.jpg" alt="Close up of a black and red Rottweiler outside"></li>
                        </ul>
                    </div>
                    <div class="dogdata">
                        <div><h3>Name:</h3> <p>Nikki</p></div>
                        <div><h3>Breed:</h3> <p>Rottweiler</p></div>
                        <div><h3>Age:</h3> <p>1 year 6 months</p></div>
                        <div><h3>Weight:</h3> <p>97 lbs</p></div>
                        <div><h3>Sex:</h3> <p>Female</p></div>
                    </div>
                    <div class="dogStory">
                        <p>Contrary to her size, Nikki is a giant, lovable teddy bear and enjoys spending her days lazing around. She is especially good with children and will gladly give rides to her smaller playmates! Have Nikki visit you today!</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <h2 class="visit">Visitation Form</h2>
        <div class="form2">
            <form method="post" action="dogs.php">
            <p>
                <label for="fname">First name:</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
                <?php if(isset($fnameError)) { echo $fnameError;} ?>
            </p>
            <p>
                <label for="lname">Last name:</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                <?php if(isset($lnameError)) { echo $lnameError;} ?>
            </p>
            <p>
                <label for="email">Email address:</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>">
                <?php if(isset($emailError)) { echo $emailError;} ?>
                <?php if(isset($validError)) { echo $validError;} ?>
            </p>
            <p>
                <label for="phone">Phone number:</label>
                <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>">
                <?php if(isset($phoneError)) { echo $phoneError;} ?>
            </p>
            <p>
                <label for="city">City:</label>
                <input type="text" name="city" id="city" value="<?php echo $city; ?>">
                <?php if(isset($cityError)) { echo $cityError;} ?>
            </p>
            <p>
                <label for="state">State:</label>
                <input type="text" name="state" id="state" value="<?php echo $state; ?>">
                <?php if(isset($stateError)) { echo $stateError;} ?>
            </p>
            <p>
                <label for="zip">Zip Code:</label>
                <input type="text" name="zip" id="zip" value="<?php echo $zip; ?>">
                <?php if(isset($zipError)) { echo $zipError;} ?>
            </p>
            <!-- drop down selection menu for dogs -->
            <p><label for="pup">Visitor:</label>
                <select name="pup" id="pup">
                    <option value="">Select a pup</option>
                    <!-- 12 drop down options-->
                    <option value="Lady"
                        <?php
                            // check to see if the pup is selected
                            if ($pup=="Lady") { echo "selected";}
                        ?>
                    >Lady</option>
                    <option value="Sadie"
                        <?php
                            if ($pup=="Sadie") { echo "selected";}
                        ?>
                    >Sadie</option>
                    <option value="Dixie"
                        <?php
                            if ($pup=="Dixie") { echo "selected";}
                        ?>
                    >Dixie</option>
                    <option value="Bailey"
                        <?php
                            if ($pup=="Bailey") { echo "selected";}
                        ?>
                    >Bailey</option>
                    <option value="Sasha"
                        <?php
                            if ($pup=="Sasha") { echo "selected";}
                        ?>
                    >Sasha</option>
                    <option value="Lily"
                        <?php
                            if ($pup=="Lily") { echo "selected";}
                        ?>
                    >Lily</option>
                    <option value="Oliver"
                        <?php
                            if ($pup=="Oliver") { echo "selected";}
                        ?>
                    >Oliver</option>
                    <option value="CoCo"
                        <?php
                            if ($pup=="CoCo") { echo "selected";}
                        ?>
                    >CoCo</option>
                    <option value="Max"
                        <?php
                            if ($pup=="Max") { echo "selected";}
                        ?>
                    >Max</option>
                    <option value="Nikki"
                        <?php
                            if ($pup=="Nikki") { echo "selected";}
                        ?>
                    >Nikki</option>
                    <option value="Duke"
                        <?php
                            if ($pup=="Duke") { echo "selected";}
                        ?>
                    >Duke</option>
                    <option value="Cooper"
                        <?php
                            if ($pup=="Cooper") { echo "selected";}
                        ?>
                    >Cooper</option>
                </select>
                <?php if(isset($pupError)) { echo $pupError;} ?>
            </p>
            <p><label for="time">Visit time:</label>
                <select name="time" id="time">
                    <option value="">Select a time:</option>
                    <!-- 12 drop down options-->
                    <option value="early"
                        <?php
                            // check to see if the time is selected
                            if ($time=="early") { echo "selected";}
                        ?>
                    >9:00 AM - 11:00 AM</option>
                    <option value="noon"
                        <?php
                            if ($time=="noon") { echo "selected";}
                        ?>
                    >11:00 AM - 1:00 PM</option>
                    <option value="earlyAfter"
                        <?php
                            if ($time=="earlyAfter") { echo "selected";}
                        ?>
                    >1:00 PM - 3:00 PM</option>
                    <option value="afternoon"
                        <?php
                            if ($time=="afternoon") { echo "selected";}
                        ?>
                    >3:00 PM - 5:00 PM</option>
                    <option value="late"
                        <?php
                            if ($time=="late") { echo "selected";}
                        ?>
                    >5:00 PM - 7:00 PM</option>
                </select>
                <?php if(isset($timeError)) { echo $timeError;} ?>
            </p>
            <p class="submit2">
                <label for="submit"></label>
                <button type="submit" name="submit">Request your Visit!</button>
            </p>
            </form>
        </div>
    </main>
<?php
writeFoot();
?>