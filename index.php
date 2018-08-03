<?php
    require_once 'portfolio.php';
    writeHead("Pawsitive Delivery");
?>
    <main>
        <h2 class="welcome">Welcome!</h2>
        <div class="tinyLogo">
            <a href="index.html"><img src="photos/logo/tinyLogo.png" alt="Pawsitive Delivery logo"></a>
        </div>
        <div class="intro howto">
                <div class="whoweare">
                    <h3>Who we are</h3>
                    <p><span class="paws">Pawsitive Delivery</span> is an organization committed to providing therapeutic visits with a well-trained, loving pet. Our strict standards on every therapy service dog we supply makes certain that every client who uses our services is left satisfied that they have had a safe, loving and healing encounter. We've been in business since 2012 and have saved the lives of countless dogs through our organization and, in turn, many of our customers may argue that their lives were saved as well. Our goal is to enrich the lives of both the humans and animals that we service.</p>
                    <p>Based and operated in the DFW area, Pawsitive Delivery proudly serves the communities of Dallas, Carollton, Addison, Richardson, and Plano.</p>
                    <p>Pawsitive Delivery visits people of all ages, ethnicities and at both private and public locations.</p>
                </div>
                <div id="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/q4c7OSBvqcE" frameborder="0" allowfullscreen></iframe>
                </div>
        </div>
            <div class="divider1">
                <h4>Mission Statement</h4>
                <p>Our mission is to lovingly provide elders, children and everyone in between that suffer from PTSD, Depression or loneliness, an individualized therapeutic and healing encounter with a gentle, affectionate pet.</p>
            </div>
        <div class="intro">
            <h3>How it Works</h3>
                <p>Pawsitive Delivery helps both the humans we visit and the animals that help them. We seek our animal friends from local shelters and put them through a rigorous training and certification process so that they can be of service to those in need in our community. By doing this, we not only bring smiles and healing to those that need their love and support, but also attempt to find good and loving homes for these wonderful animals and get them the love they so dearly deserve.</p>
            <h6>Let us bring the joy and laughter into your life with a visit today! It's easy!</h6>
            <div class="howto">
                <div class="steps">
                    <img src="photos/step1.jpg" alt="Man looking depressed">
                    <p>1. Feeling Down?</p>
                </div>
                <div class="steps">
                    <img src="photos/step2.jpg" alt="Man making a phone call">
                    <p>2. Contact us.</p>
                </div>
                <div class="steps">
                    <img src="photos/step3.jpg" alt="Corgi standing at a car steering wheel">
                    <p>3. We'll send a pup your way.</p>
                </div>
                <div class="steps">
                    <img src="photos/step4.jpg" alt="Man holding Corgi while smiling">
                    <p>4. Smiles are guaranteed!</p>
                </div>
            </div>
            <div>
                <p class="goto">
                    <a class="button" href="dogs.php">Schedule your visit here!</a>
                </p>
            </div>
        </div>
            <div class="divider2">
                <h4>Did you know?</h4>
                <p>Medical science shows that interaction with a therapy dog can reduce blood pressure; promote physical healing; reduce anxiety, fatigue and depression; and provide emotional support. Our dogs love human contact and have no language barrier! We'd like to show you the calming and therapeutic effect that a therapy dog can have on the quality of your life.</p>
            </div>
        <div class="intro">
            <h3>FAQ</h3>
            <h5>What is a therapy dog?</h5>
                <p>A therapy dog is a friend to everyone! Therapy dogs are extremely patient and loving - and provide great companionship. Pawsitive Delivery brings only the best-natured, and most well trained dogs to your location for a small, but reasonable fee. Reliability and training is the backbone of our agency. We visit hospitals, rehabilitation and hospice facilities, schools, senior centers, nursing communities, homeless shelters, homes for youth at-risk, bereavement centers and private homes. Our successful outreach programs are tailored to meet your specific needs...and our programs are growing every day!  If you're looking for emotional or physical support, look no further - you've come to the right place. Anyone can benefit from the unique animal-to-human bond. It's not just our mission; it's our personal commitment to you.</p>
            <h5>How do I know which dog is best to visit me?</h5>
                <p>Choosing the right Pawsitive Delivery dog is easy to do… If you have specific needs or need a dog specialized for your condition, just browse through our adoption profile page and read the strengths of each of our service animals. We most certainly have one that is perfect for you!</p>
            <h5>Can I have more than one dog visit at a time?</h5>
                <p>Unfortunately, No. Pawsitive Delivery customizes each client with the animal that is best suited for them. Our primary specialization is bringing a loving, bonding experience for each client and animal and that is best when the focus is one-on-one.</p>
            <h5>What if I want to adopt a dog that visits me?</h5>
                <p>The adoption process is simple and, in most cases, can be completed within 24 hours of submitting your adoption application. Just follow these easy steps:</p>
                <ul class="adoptionSteps">
                    <li>Fill out and submit your <a href="adopt.php">online adoption application.</a></li>
                    <li>One of the members of the Pawsitive Delivery Adoption Team will contact you the same day to set up your adoption appointment and 30-minute training session with one of our certified trainers.</li>
                    <li>Make your one-time payment of $150 (This covers certified training and administrative fees.)</li>
                    <li>Take your new pet home to their new forever family!</li>
                </ul>
            <h5>Can anyone receive a visit from a Pawsitive Delivery Pet?</h5>
                <p>Absolutely! Everyone needs a smile and love… However, anyone under the age of 18 needs a guardian present during the visit.</p>
            <h5>Are all of the dogs safe for children?</h5>
                <p>Each dog in our service has been through a rigorous training and certification process to help and benefit our human clients safely. All have been spayed/neutered, up-to-date on all shots and vaccines, and show absolutely no signs of aggression to humans. </p>
        </div>
    </main>
<?php
writeFoot();
?>