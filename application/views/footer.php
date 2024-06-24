<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
    .py-60 {
        padding: 60px 0;
    }

    @media only screen and (max-width: 768px) {
        .py-60 {
            padding: 52px 0;
        }
    }

    section {
        background: #f3f3f3;
    }

    h2 {

        font-size: 32px;
        color: #000;
        line-height: 1.25;
        text-transform: uppercase;
    }

    @media only screen and (max-width: 768px) {
        h2 {
            font-size: 24px;
        }
    }

    .text-control-1 h2 {
        margin-bottom: 20px;
    }

    @media only screen and (max-width: 768px) {
        .text-control-1 h2 {
            margin-bottom: 16px;
        }
    }

    .q-mark {
        font-weight: bold;
        color: #09445a;
        padding: 18px 0 18px 18px;
    }

    .question {

        font-size: 14px;
        color: #5c5c5c;
        line-height: 1.5;
        padding: 20px;
        margin-bottom: 0;
        font-weight: bold;
    }

    .drop {
        padding: 20px;
        font-size: 2rem;
        color: #dd9044;
        transition: transform 0.5s ease-in-out;
    }

    .answer {
        font-size: 14px;
        color: #000;
        padding: 16px;
        padding-left: 52px;
        padding-bottom: 32px;
        background-color: #fff;
        overflow: hidden;
    }

    .accordion {
        background-color: #fff;
        color: #000;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        text-align: left;
        border: none;
        outline: none;
        transition: 0.4s;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 2px 1px -1px rgba(0, 0, 0, 0.12), 0 1px 3px 0 rgba(0, 0, 0, 0.2);
        border-radius: 4px;
    }

    @media only screen and (max-width: 768px) {
        .accordion {
            margin-bottom: 16px;
        }

        .faq-tab {
            font-size: 14px !important;
            margin: 0 10px 0 0 !important;
        }
    }


    .question-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background-color 0.25s ease-in-out;
    }

    .answer-wrapper {
        display: none;
    }

    .icon-expend {
        transform: rotateX(180deg);
        transition: transform 0.75s ease-in-out;
    }

    .active,
    .accordion:hover .question-wrapper {
        background-color: #ebebeb;
    }

    .active p,
    .accordion:hover .question-wrapper p {
        color: #3d3d3d;
    }

    .container {
        width: 100%;
        padding-right: 20px;
        padding-left: 20px;
        margin-right: auto;
        margin-left: auto;
    }

    @media only screen and (min-width: 768px) {
        .container {
            max-width: 768px;
        }
    }

    @media only screen and (min-width: 992px) {
        .container {
            max-width: 1144px;
        }
    }
    @media only screen and (max-width: 992px) {
        .pbb-ff {
            padding-bottom:20px !important;
        }
    }
</style>
<hr>
<section class="py-60 pbb-ff" style="padding-bottom:160px;">

    <div class="container text-control-1 faqq">
        <h3 class="text-center mb-4">FAQs</h3>
        <div class="d-flex justify-content-md-around justify-content-between mb-4">
            <h6 class="m-0 faq-tab" data-open="company">RELATED TO COMPNAY</h6>
            <h6 class="m-0 faq-tab" data-open="order">RELATED TO ORDER</h6>
            <h6 class="m-0 faq-tab" data-open="bitumen">RELATED TO BITUMEN</h6>
        </div>
        <div class="faqs-section" data-tab="company">
            <div class=" faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">
                            Do you import Bitumen or Purchase Domestic?</p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">We import Viscosity Grade bitumen directly from top refineries of Middle east
                        countries packed & bulk both forms& provide to clients at reasonable price. Refineries specially
                        produce bitumen with our label too.
                    </p>
                </div>
            </div>
            <div class="faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">
                            Are You PWD Empanelled?
                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">Yes, we are authorized by PWD govt. of Raj. & Uttarakhand for quality bitumen.
                    </p>
                </div>
            </div>
            <div class="faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">
                            Are You UDH and JDA Empanelled?
                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">Yes, we are authorized by UDH and JDA govt. of Raj. for quality bitumen.
                    </p>
                </div>
            </div>
            <div class="faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">From Where do you supply Bitumen?
                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">We supply Bitumen from Kandla, Mumbai, Mundra, Jaipur, Jodhpur, Pipavav, Vadodara,
                        Hazira & so on.</p>
                </div>
            </div>
            <div class="faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">
                            Do you Export Bitumen?
                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">Yes, we export Bitumen& we are no. 1 Bitumen Exporter in India in December 2021
                        and Jan 2022. We are the 3rd Largest Importer in packed bitumen category in India. We have pack
                        drums available in 156kg & 180 kg. We export bitumen packed & bulk both forms. We export bitumen
                        in Nepal Birgunj, Biratnagar, Bhairahawa, Nepalgunj, Kakarvitta and Still Going!
                    </p>
                </div>
            </div>

            <div class="faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">
                            Where is your Head Office?
                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">We are located in Jaipur (Raj.) since 2017 Near PWD Office.

                    </p>
                </div>
            </div>

            <div class="faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">
                            What Grade or viscosity Bitumen do you supply?

                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">We supply VG10, Vg30, VG40 in Bulk & drum both forms PAN India.

                    </p>
                </div>
            </div>




        </div>

        <div class="faqs-section" data-tab="order">
            <div class=" faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">
                            How long does it take to process the order?
                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">After getting confirmation of an order, we proceed the
                        order further & upto24hours-48hourswe dispatch the order.
                    </p>
                </div>
            </div>
            <div class="faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">
                            Does the Prices are inclusive transportation Charges?
                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">We quote Bitumen price only, but we can arrange transport for buyer separately.
                    </p>
                </div>
            </div>
            <div class="faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">What is the mode of payment?
                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">We accept Payment Through Bank Transfer, BG (Bank Guarantee), LC (letter of
                        credit) by government approved Financer/ Bank.
                    </p>
                </div>
            </div>
            <div class="faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">
                            What is Bitumen Terms of Delivery?</p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">We can Provide FOB shipments/Ex Port, CFR (Cost Freight Rate), CIF (cost Insurance
                        & freight)
                    </p>
                </div>
            </div>
        </div>

        <div class="faqs-section" data-tab="bitumen">
            <div class=" faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">
                            What are the benefits / advantages of VG Bitumen over Penetration Grade?
                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">VG bitumen is globally preferred to penetration grades (30/40, 60/70, 80/100, and
                        soon), mainly because it is tested and classified more accurately.
                    </p>
                </div>
            </div>
            <div class="faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">
                            Do we have a ready-made chart to use various Bitumen Grades as per the temperature zones?
                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">Yes, we have chart or test reports of every shipment as per viscosity,
                        Penetration, Grade temperature & require product details.
                    </p>
                </div>
            </div>
            <div class="faq accordion">
                <div class="question-wrapper">
                    <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
                        <p class="question" title="">How would you assure about the quality of Bitumen?
                        </p>
                    </div><i class="drop fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <div class="answer-wrapper">
                    <p class="answer">Our Bitumen is certified by Refineries & NABL& IIT Roorki laboratory also. We have
                        in house Laboratory also & we do test of every shipment.
                    </p>
                </div>
            </div>

        </div>
</section>

<style>
    .faq-tab {
        cursor: pointer;
        font-size: 16px;
    }

    .faq-tab-active {
        border-bottom: 1px solid #000;
    }
</style>


<footer class="page_footer  text-center c-gutter-100 text-sm-left  ds">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-6 order-1 order-lg-1  animate" data-animation="fadeInUp">
                <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
                <a href="<?php echo base_url(); ?>" class="logo">
                    <img style="width: 290px; max-height:unset;" src="<?php echo base_url(); ?>images/logo12.png"
                        alt="img">
                </a>
                <p>
                    PREMIUM PETRO PRODUCTS. Our firm is manufacturing all types of Emulsion and Modified Bitumen and
                    importing Bitumen (both Bulk and Packed) from Middle East countries.
                </p>
                <a href="https://www.facebook.com/premiumpetroproducts" rel="noopener noreferrer" target="_blank"
                    class="fab fa-facebook-f rounded-icon bg-icon fs-16" title="facebook"></a>
                <a href="https://twitter.com/PetroPremium" target="_blank" rel="noopener noreferrer"
                    class="fab fa-twitter rounded-icon bg-icon fs-16" title="telegram"></a>
                <a href="https://www.linkedin.com/company/premium-petro-products/" rel="noopener noreferrer"
                    target="_blank" class="fab fa-linkedin-in rounded-icon bg-icon fs-16" title="linkedin"></a>
                <a href="https://www.instagram.com/premium_petro_products/" rel="noopener noreferrer" target="_blank"
                    class="fab fa-instagram rounded-icon bg-icon fs-16" title="instagram"></a>
              
            </div>

            <div class="col-lg-4 col-md-12 ls order-3 order-lg-2 footer-special-column text-center animate"
                data-animation="fadeInUp">
                <div class="form-wrapper">
                    <form class="contact-form" method="post" action="<?php echo base_url() ?>thankyou">
                        <div class="row c-mb-20">
                            <div class="col-12 form-title text-center form-builder-item">
                                <div class="header title">
                                    <h3>Write Us</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-lg-12 text-center">
                                <div class="form-group has-placeholder">
                                    <label for="name22335x5553">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name"
                                        id="name22335x5553" class="form-control" placeholder="Full Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-lg-12 text-center">
                                <div class="form-group has-placeholder">
                                    <label for="name223355553">Phone Number <span class="required">*</span></label>

                                    <input type="number" aria-required="true" size="30" value="" name="phone"
                                        id="name223355553" class="form-control mobile-field" placeholder="Phone Number"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-sm-12 text-center">
                                <div class="form-group has-placeholder">
                                    <label for="message22335553">Message</label>

                                    <textarea aria-required="true" rows="3" cols="45" name="message"
                                        id="message22335553" class="form-control" placeholder="Your Message"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                        <style>
                            .g-recaptcha>div {
                                width: 100% !important;
                            }
                        </style>
                        <div class="g-recaptcha" data-sitekey="6LctaaUeAAAAAOrC_x--1CKZlgq4UMq472zj8Bur"
                            data-callback="recaptchaCallback">
                        </div>
                        <div>
                            <span class="text-danger">
                                <?php if (isset($captcha_error)) {
                                                            echo $captcha_error;
                                                        } ?>
                            </span>
                        </div>
                        <div class="row c-mb-10 c-gutter-10">
                            <div class="col-sm-12 mb-0 mt-50">
                                <div class="form-group">
                                    <input class="btn btn-gradient big-btn contact-form-submit" type="submit"
                                        value="Send message">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <h6 class="fs-12 text-uppercase">&copy; Copyright <span class="copyright_year">2024</span>
                    All Rights Reserved</h6>

                <h6 class="fs-12 text-uppercase" style="margin-top:15px!important; font-weight:initial">Designed by <a
                        style="font-weight:bold;" href="https://theodin.in/">The Odin</a> </h6>
            </div>



            <div class="col-lg-4 col-md-6 order-2 order-lg-3 animate" data-animation="fadeInUp">
                <div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90"></div>
                <div class="widget widget_icons_list">
                    <ul>
                        <li class="icon-inline ">
                            <div class="icon-styled icon-top  bordered round fs-16">
                                <i class="fas fa-phone"></i>
                            </div>
                            <p>+91 8441095087</p>
                        </li>
                        <li class="icon-inline ">
                            <div class="icon-styled icon-top  bordered round fs-16">
                                <i class="fab fa-whatsapp" style="font-size:20px;"></i>
                            </div>
                            <p>+91 6367863214</p>
                        </li>
                        <li class="icon-inline">
                            <div class="icon-styled icon-top bordered round  fs-16">
                                <i class="fas fa-envelope"></i>


                            </div>
                            <p>info@premiumpetro.in
                            </p>
                        </li>
                        <li class="icon-inline">
                            <div class="icon-styled icon-top bordered round  fs-16">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p>
                                Premium Petro <br>
                                1-3, Hathroi Market Opp. Gopal Bari, Ajmer Road Jaipur, Rajasthan 302001
                            </p>
                        </li>
                        <li class="icon-inline">

                            <p class="pp-txt" style="margin-left:4em;margin-top:3em;font-style:italic;">
                                <a href="<?php echo base_url('privacy'); ?>">Privacy Policy</a>
                            </p>
                        </li>

                    </ul>
                </div>
              
            </div>
        </div>
    </div>

</footer>


</div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->


<a href="https://wa.me/919672007111?text=I'm%20interested%20in%20your%20product" class="float" rel="noopener noreferrer"
    target="_blank" style="position:fixed;
	width:60px;
	height:60px;
	bottom:100px;
	right:30px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:999;"><i class="fab fa-whatsapp" style="margin-top:16px;"></i></a>







<script src="<?php echo base_url(); ?>js/compressed.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.magnific-popup.js"></script>
<script src="<?php echo base_url(); ?>js/main.js?v1.1"></script>
<script src="<?php echo base_url(); ?>js/switcher.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function () {
        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom',
            gallery: {
                enabled: true
            },

            zoom: {
                enabled: true,

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                opener: function (openerElement) {

                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }

        });

    });
</script>

<script>
    setTimeout(() => {
        $('#contact-pop-up').fadeIn()
    }, 7000)
    $('#contact-pop-up-close').click(function () {
        $('#contact-pop-up').fadeToggle();
    })
</script>

<script>
    var recaptchachecked;

    function recaptchaCallback() {
        //If we managed to get into this function it means that the user checked the checkbox.
        recaptchachecked = true;
    }
    $('.contact-form-submit').click(function (e) {
        e.preventDefault();
        let check = 0;

        $('.contact-form input').each(function () {
            if ($.trim($(this).val()) == '') {
                check = 1;
                alert('One or more fields are empty or invalid!')
                return false;
            }

        })
        if (check == 1) {
            return false;
        }

        if ($.trim($('.contact-form input[name="name"]').val()).length > 30) {
            check = 1;
            alert('Name too long!')
            return false;
        }
        if ($.trim($('.mobile-field').val()).length != 10) {
            check = 1;
            alert('Mobile number must be of 10 digits')
            return false;
        }
        if ($.trim($('.contact-form textarea').val()) == '') {
            check = 1;
            alert('please enter a message')
            return false;
        }
        if (!recaptchachecked) {
            alert('Please fill in captcha');
            return false;
        }

        if (check == 0) {
            $('.contact-form').submit();
        }

    })
</script>

<script>
    $(".question-wrapper").click(function () {
        $('.answer-wrapper').removeClass("expanded")
        $('.drop').removeClass('icon-expanded');
        var container = $(this).parents(".accordion");
        var answer = container.find(".answer-wrapper");
        var trigger = container.find(".drop");
        var state = container.find(".question-wrapper");

        answer.animate({
            height: "toggle"
        }, 100);

        if (trigger.hasClass("icon-expend")) {
            trigger.removeClass("icon-expend");

            // state.removeClass("active");
        } else {
            trigger.addClass("icon-expend");
            // state.addClass("active");
        }

        if (container.hasClass("expanded")) {
            container.removeClass("expanded");
        } else {
            container.addClass("expanded");
        }
    });
</script>

<script>
    $('.faq-tab').removeClass('faq-tab-active');
    $('.faqs-section').hide();
    $('.faq-tab[data-open="company"]').addClass('faq-tab-active');
    $('.faqs-section[data-tab="company"]').show();
    $('.faq-tab').click(function () {
        $('.faq-tab').removeClass('faq-tab-active');
        $(this).addClass('faq-tab-active');
        $('.faqs-section').hide();
        $('.faqs-section[data-tab="' + $(this).data('open') + '"]').fadeIn();
    })
</script>

<!-- Google Map Script -->
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&callback=initGoogleMap">
    </script>

<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Product",
        "name": "Premium Petro Products",
        "image": "https://premiumpetro.in/images/roads/road2.jpg",
        "description": " Premium Petro Products are a leading Importer, Trader of a wide range of Bitumen VG 10, VG 30 & VG 40 etc it’s empanelled supplier of PWD Rajasthan.",
        "mpn": "925872",
        "brand": {
            "@type": "Thing",
            "name": "Modified Bitumen Supplier"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.8",
            "reviewCount": "188"
        },
        "offers": {
            "@type": "Offer",
            "priceValidUntil": "2022-11-05",
            "itemCondition": "http://schema.org/Fresh",
            "availability": "http://schema.org/InStock",
            "seller": {
                "@type": "Organization",
                "name": "Crumb Rubber Modified Bitumen"
            }
        }
    }
</script>

<script>
    $('.testimonials-slider-slick').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        dots: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: true,
                    arrows: true
                }
            }
        ]
    })
</script>





</body>

</html>