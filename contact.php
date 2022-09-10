<link rel="stylesheet" href="css/custom/contact.css">

<!-- <?php
    include "functions/variables.php";
?> -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" style="padding: 0 8%;">

    <div class="mt-5 mb-50">

        <div class="section-title">
            <h1>Contact Us</h1>
            <span class="social_profile">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-square-facebook text-dark"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-square-twitter text-dark"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-square-instagram text-dark"></i></a></li>
                </ul>
            </span>
        </div>

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="fa-solid fa-location-dot"></i>
                        <h4>Location:</h4>
                        <p><?php echo $location ?></p>
                    </div>

                    <div class="email">
                        <i class="fa-solid fa-envelope"></i>
                        <h4>Email:</h4>
                        <p><?php echo $emailAddress ?></p>
                    </div>

                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <h4>Call:</h4>
                        <p><?php echo $contactNumber ?></p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form class="email-form">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    </div>

                    <div class="contact-submit-btn">
                        <button type="submit">Send Message</button>
                    </div>
                </form>

            </div>

        </div>

    </div>

</section>
<!-- End Contact Section -->


<div class="mb-100" style="padding: 0 8%;">
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.6372736395742!2d70.79262681487839!3d22.367320985288814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c972761ce515%3A0x3651e3fe1e9df4f8!2sMarwadi%20University!5e0!3m2!1sen!2sin!4v1661272949926!5m2!1sen!2sin"
        style="border:0; width:100%; height:34vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('.nav').addClass('affix');
            console.log("OK");
        } else {
            $('.nav').removeClass('affix');
        }
    });
    $('.navTrigger').click(function() {
        $(this).toggleClass('active');
        console.log("Clicked menu");
        $("#mainListDiv").toggleClass("show_list");
        $("#mainListDiv").fadeIn();

    });
</script>