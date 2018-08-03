<?php
    //call function page
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
        // if everything is valid then submit
        if ($valid) {
            header("Location: thankyou.php?firstname=$fname&lastname=$lname&adoptee=$pup");
            exit();
        }
    }
    writeHead ('Pawsitive Delivery');
?>
    <main>
        <div class="tinyLogo">
            <a href="index.html"><img src="photos/logo/tinyLogo.png" alt="Pawsitive Delivery logo"></a>
        </div>
    <div class="adoption">
        <div class="adoptInfo">
            <h2>Did you fall in love with one of our dogs on a visit?</h2>
            <p>Our goal here is not just to bring smiles and tail wags to people in need, but also to help our furry friends find permanent homes. We work with local shelters to supply our dogs and almost all of them are available for adoption!
            </p>
            <h3>Fill out the adoption form below...</h3>
        </div>
        <div class="form">
            <form method="post" action="adopt.php">
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
                <?php if(isset($phoneError)) { echo $phoneError;}?>
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
            <p><label for="pup">Dog for adoption:</label>
                <select name="pup" id="pup">
                    <option value="" data-url="photos/adopt/pupDefault_image.jpg">Select a pup</option>
                    <!-- 12 drop down options-->
                    <option value="Lady" data-url="photos/adopt/collie_image.jpg"
                        <?php
                            // check to see if the pup is selected
                            if ($pup=="Lady") { echo "selected";}
                        ?>
                    >Lady</option>
                    <option value="Sadie" data-url="photos/adopt/beagle_image.jpg"
                        <?php
                            if ($pup=="Sadie") { echo "selected";}
                        ?>
                    >Sadie</option>
                    <option value="Dixie" data-url="photos/adopt/boxer_image.jpg"
                        <?php
                            if ($pup=="Dixie") { echo "selected";}
                        ?>
                    >Dixie</option>
                    <option value="Bailey" data-url="photos/adopt/dalmation_image.jpg"
                        <?php
                            if ($pup=="Bailey") { echo "selected";}
                        ?>
                    >Bailey</option>
                    <option value="Sasha" data-url="photos/adopt/lab_image.jpg"
                        <?php
                            if ($pup=="Sasha") { echo "selected";}
                        ?>
                    >Sasha</option>
                    <option value="Lily" data-url="photos/adopt/corgi_image.jpg"
                        <?php
                            if ($pup=="Lily") { echo "selected";}
                        ?>
                    >Lily</option>
                    <option value="Oliver" data-url="photos/adopt/pug_image.jpg"
                        <?php
                            if ($pup=="Oliver") { echo "selected";}
                        ?>
                    >Oliver</option>
                    <option value="CoCo" data-url="photos/adopt/pomeranian_image.jpg"
                        <?php
                            if ($pup=="CoCo") { echo "selected";}
                        ?>
                    >CoCo</option>
                    <option value="Max" data-url="photos/adopt/jackrussell_image.jpg"
                        <?php
                            if ($pup=="Max") { echo "selected";}
                        ?>
                    >Max</option>
                    <option value="Nikki" data-url="photos/adopt/rottweiler_image.jpg"
                        <?php
                            if ($pup=="Nikki") { echo "selected";}
                        ?>
                    >Nikki</option>
                    <option value="Duke" data-url="photos/adopt/golden_image.jpg"
                        <?php
                            if ($pup=="Duke") { echo "selected";}
                        ?>
                    >Duke</option>
                    <option value="Cooper" data-url="photos/adopt/blacklab_image.jpg"
                        <?php
                            if ($pup=="Cooper") { echo "selected";}
                        ?>
                    >Cooper</option>
                </select>
                <?php if(isset($pupError)) { echo $pupError;} ?>
            </p>
            <p class="submit">
                <label for="submit"></label>
                <button type="submit" name="submit">Request your Pup!</button>
            </p>
            </form>
        </div>
        <div class="selectionImg">
            <p>Take me home!</p>
            <img id="image" src="photos/adopt/pupDefault_image.jpg" alt="photo of your selected dog">
        </div>
    </div>
    </main>
<?php
writeFoot();
?>