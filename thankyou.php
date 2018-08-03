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
        echo "<p>Your pup, ".$_GET['adoptee'].", will be so excited to hear from you, ".$_GET['firstname']." ".$_GET['lastname']."! Please allow up to a week for response time via email.</p>"
    ?>
    <img class="thankyouImg" src="photos/thankyou.jpg" alt="small terrier puppy">
    </div>
</main>
<?php
writeFoot();
?>
