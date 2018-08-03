<?php
    require_once 'portfolio.php';
    writeHead("Pawsitive Delivery");
?>
<main>
    <div class="tinyLogo">
            <a href="index.html"><img src="photos/logo/tinyLogo.png" alt="Pawsitive Delivery logo"></a>
        </div>
    <div class="thankyou">
    <h2>Thank you!</h2>
    <?php
        // display the first and last name passed in the querystring
        echo "<p>".$_GET['visitor'].", is so excited to come play with you, ".$_GET['firstname']." ".$_GET['lastname']."! Give us a few minutes to send you a confirmation email with payment details and we'll get you guys together in no time!</p>"
    ?>
    <img class="thankyouImg" src="photos/ontheway.jpg" alt="A dog sitting in the drivers seat">
    </div>
</main>
<?php
writeFoot();
?>