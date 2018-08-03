
$(document).ready(function(){
    // hides info on DOGS page
    $('.pupInfo').hide();
    $('.showHide').show();
    $('.showHide').click(function(){
        $('.pupInfo').slideToggle();
    });
    // mobile drop down menu
    $('.menu-btn').click(function() {
        /*$('.dropdownNav').toggleClass('expand');*/
        $('.dropdownNav').slideToggle();
        $(this).toggleClass('click');
        $('.hamNav').toggleClass('darkHamNav');
    });//end mobile click
    //banner slide shows => all media query sizes
    $("#slider1").responsiveSlides({
        maxwidth: 1200,
        speed: 600
    });
    $("#slider2").responsiveSlides({
        maxwidth: 960,
        speed: 600
    });
    $("#slider3").responsiveSlides({
        maxwidth: 720,
        speed: 600
    });
    $("#slider4").responsiveSlides({
        maxwidth: 600,
        speed: 600
    });
    $("#slider5").responsiveSlides({
        maxwidth: 460,
        speed: 600
    }); //end banner slide shows
    // dog story dialog box slider
    $("#slider6").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });
    $("#slider7").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });
    $("#slider8").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });
    $("#slider9").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });
    $("#slider10").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });
    $("#slider11").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });
    $("#slider12").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });
    $("#slider13").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });
    $("#slider14").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });
    $("#slider15").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });
    $("#slider16").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });
    $("#slider17").responsiveSlides({
        maxwidth: 400,
        speed: 400
    });//end dog slide show
    // drop down dog selection
    function setPup() {
        var img = document.getElementById("image");
        img.src = this.options[this.selectedIndex].getAttribute('data-url');
        return false;
    }
    var pupElement = document.getElementById("pup"),
        imageElement = document.getElementById("image");
    if (pupElement && imageElement) {
        pupElement.onchange = setPup;
    }
    //
    //$('.circleText').arctext({radius: 250}); // curved text -- didn't work but still curious
    // popup plugin //
    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    }); //end plugin
    // prevents page from reloading upon contact form submission
    // and closes modal
    $('#contactForm').on('submit',function(event){
        event.preventDefault();
        $.magnificPopup.close();
    });
    $('#reviewSubmit').on('submit',function(event){
        event.preventDefault();
        $.magnificPopup.close();
    });
});//end ready

