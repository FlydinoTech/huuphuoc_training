@extends('template.booktour.master')
@section('main_content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(img/tour/background/5.jpg)">
        <div class="auto-container">
            <h2>Contact Us</h2>
            <ul class="page-breadcrumb">
                <li><a href="index-2.html">home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <!-- Contact Form Section -->
    <section class="contact-form-section" style="background-color: white" style="background-image:url(img/tour/background/contact.png)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h2>Get In Touch</h2>
                <div class="text">Do you have anything in your mind to let us know?  Kindly don't delay to connect to us by means of our contact form.</div>
            </div>
            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <!--Contact Form-->
                            <form method="post" action="http://t.commonsupport.com/stella-orre/sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="username" placeholder="Your name" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="email" placeholder="Email address" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Submit now</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Info Column -->
                <div class="info-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Contact Info List -->
                        <ul class="contact-info-list">
                            <li><strong>Address :</strong><br>256, Stella Orr'e,, New York 24</li>
                        </ul>
                        <!-- Contact Info List -->
                        <ul class="contact-info-list">
                            <li><strong>Phone : </strong><a href="tel:1800-456-7890">1800 456 7890</a></li>
                            <li><strong>Email : </strong><a href="mailto:info@stellaorre.com">info@stellaorre.com</a></li>
                        </ul>
                        <!-- Contact Info List -->
                        <ul class="contact-info-list">
                            <li><strong>Opening Hours :</strong><br>8:00 AM – 10:00 PM <br> Monday – Sunday</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Form Section -->
    <!-- End Map Section -->
@stop