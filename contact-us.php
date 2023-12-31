    <?php include('./includes/header.php'); ?>

    <!-- Main content Start -->
    <div class="main-content">

        <!-- Contact Section Start -->
        <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row contact-address-section">
                    <div class=" col-lg-6 col-md-12 lg-pl-0 md-mb-30">
                        <div class="contact-info contact-address">
                            <div class="icon-part">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="content-part">
                                <h5 class="info-subtitle">Address</h5>
                                <h6 class="info-title">2nd Floor, , Plot No 122/66 A, Chauraha, Vijay Path, near Madhyam Marg, opp. Ram Tirth Marg, Mansarovar, Jaipur, Rajasthan 302020 </h6>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-12 md-mb-30">
                        <div class="contact-info contact-mail">
                            <div class="icon-part">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="content-part">
                                <h5 class="info-subtitle">Email Address</h5>
                                <h6 class="info-title"><a href="mailto:info@rstheme.com">info@dmartskilleducation.com</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-12 lg-pr-0">
                        <div class="contact-info contact-phone">
                            <div class="icon-part">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <div class="content-part">
                                <h5 class="info-subtitle">Phone Number</h5>
                                <h6 class="info-title"><a href="tel:+91-8764420489">+91-8764420489</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 md-mb-30">
                        <div class="contact-map2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.824789162961!2d75.77449367379639!3d26.845524562977687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5a5ac096449%3A0xa7252c750a3f918e!2sDmart%20Skills%20education!5e0!3m2!1sen!2sin!4v1693412324345!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7 pl-30 lg-pl-15">
                        <div class="rs-quick-contact new-style">
                            <div class="inner-part mb-50">
                                <h2 class="title mb-15">Get In Touch</h2>
                                <p><b>Ready to Take the Next Step?</b><br />

                                    Embark on a journey of knowledge, skill enhancement, and career advancement with Dmart Skill Education. Contact us today to explore the courses that will shape your future in IT.</p>
                            </div>
                            <div id="form-messages"></div>
                            <form method="post" action="./process.php">
                                <div class="row">
                                    <div class="col-lg-6 mb-35 col-md-12">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-6 mb-35 col-md-12">
                                        <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-6 mb-35 col-md-12">
                                        <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-6 mb-35 col-md-12">
                                        <input class="from-control" type="text" id="subject" name="courseName" placeholder="Course Name in that you are intersted" required="">
                                    </div>

                                    <div class="col-lg-12 mb-50">
                                        <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="btn-send" type="submit" value="Submit Now">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <?php include('./includes/footer.php'); ?>