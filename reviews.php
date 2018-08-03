<?php
    require_once 'portfolio.php';
    // variables
    $pup = NULL;
    writeHead("Pawsitive Delivery");
?>
    <main>
        <div class="tinyLogo">
            <a href="index.html"><img src="photos/logo/tinyLogo.png" alt="Pawsitive Delivery logo"></a>
        </div>
        <div class="reviewIntro">
            <div class="customStart">
                <h2>Check out all our satisfied customers!</h2>
                <a class="popup-with-zoom-anim button" href="#submitReview"><h4>Leave a Review!</h4></a>
                <div id="submitReview" class="zoom-anim-dialog mfp-hide">
                    <form id="reviewForm" class="reviewForm" method="post" action="">
                    <h2>Leave a Review!</h2>
                        <p>
                            <label for="fname">First name:</label>
                            <input type="text" name="fname" id="fname">
                        </p>
                        <p>
                            <label for="lname">Last name:</label>
                            <input type="text" name="lname" id="lname">
                        </p>
                        <p><label for="pup">Who visited you:</label>
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
                        </p>
                        <p>
                            <label for="date">Date of visit:</label>
                            <input type="text" name="date" id="date">
                        </p>
                        <div>
                            <label for="rate">Rating:</label>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half"/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4"/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half"/><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3"/><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half"/><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2"/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half"/><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1"/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half"/><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                        </div>
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
            </div>
            <div class="happyDog">
                <img src="photos/happyDog.jpg">
            </div>
        </div>
        <div class="review">
            <h4 class="date">2017, October 9</h4>
            <div class="reviewInfo">
                <div><h3>Name:</h3> <p>Michael T.</p></div>
                <div><h3>Visiting Pup:</h3> <p>CoCo</p></div>
                <div><h3>Date of Visit:</h3> <p>Sept 30, 2017</p></div>
                <div>
                    <h3>Rating:</h3>
                    <p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
            <div class="comments">
                <p>Great dogs and super nice staff! My wife and I contacted Pawsitive Delivery last fall to lift the spirits of my elderly Mother who lives alone. We have been amazed by the difference in her overall health and emotional state since the service has been visiting! We are definitely believers in Pawsitive Delivery and would recommend them to anyone that needs some love in their life! Cheers, Pawsitive Delivery!</p>
            </div>
        </div>
        <div class="review">
            <h4 class="date">2017, October 8</h4>
            <div class="reviewInfo">
                <div><h3>Name:</h3> <p>Madison R.</p></div>
                <div><h3>Visiting Pup:</h3> <p>Duke</p></div>
                <div><h3>Date of Visit:</h3> <p>June 22, 2017</p></div>
                <div>
                    <h3>Rating:</h3>
                    <p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
            <div class="comments">
                <p>Our area was hit pretty hard earlier this year by several tornadoes and hailstorms and our neighborhood was most of the homes and buildings suffered devastating damages. Morale among our residents, adults and children alike, was low to say the least. To brighten the spirits of the neighborhood children, we got together and called Pawsitive Delivery to have a park day. They saved the day! It was great to see the smiles on the kids’ faces! Thank you, Pawsitive Delivery!</p>
            </div>
        </div>
        <div class="review">
            <h4 class="date">2017, October 6</h4>
            <div class="reviewInfo">
                <div><h3>Name:</h3> <p>Stacy A.</p></div>
                <div><h3>Visiting Pup:</h3> <p>Scooter</p></div>
                <div><h3>Date of Visit:</h3> <p>Sept 2, 2017</p></div>
                <div>
                    <h3>Rating:</h3>
                    <p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
            <div class="comments">
                <p>I learned about Pawsitive Delivery from my neighbor who was suffering from Post Traumatic Stress Disorder (PTSD). My husband was diagnosed with the same disorder last year so we thought we’d try it out and the entire experience has been wonderful! In fact, we felt so good after our visits with “Scooter” that we adopted from the service and now he’s part of our family! Pawsitive Delivery is a godsend!</p>
            </div>
        </div>
        <div class="review">
            <h4 class="date">2017, September 28</h4>
            <div class="reviewInfo">
                <div><h3>Name:</h3> <p>Adam B.</p></div>
                <div><h3>Visiting Pup:</h3> <p>Lily</p></div>
                <div><h3>Date of Visit:</h3> <p>August 23, 2017</p></div>
                <div>
                    <h3>Rating:</h3>
                    <p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
            <div class="comments">
                <p>I live in a tiny apartment in Uptown and it's hard to find space for a dog, but I really missed having one. I called up Pawsitive Delivery to have a visit from my favorite breed, a corgi. Lily was energetic and we ran around the park for a good while. It was such a blast! Really lifted my mood for the rest of the month. The only reason I don't rate it 5 stars is that I do wish the visitation times could be longer, maybe all day or something.</p>
            </div>
        </div>
    </main>
<?php
writeFoot();
?>