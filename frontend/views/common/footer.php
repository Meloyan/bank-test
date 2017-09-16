<!-- Footer
================================================== -->
<footer>
    <div class="up-footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">

                    <div class="widget footer-widget text-widget">
                        <h4>About Ement</h4>
                        <p>Dantes remained confused and silent by this explanation of the thoughts which had
                            unconsciously been working in his mind, or rather soul; for there are two distinct sorts of
                            ideas. Dantes remained confused and silent by this explanation.</p>
                    </div> <!-- end footer-widget -->

                    <div class="widget footer-widget clearfix widget-newsletter">
                        <form id="widget-subscribe-form" method="post" class="form-inline">
                            <p><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &
                                Inside Scoops:</p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                                <input type="email" aria-required="true" name="widget-subscribe-form-email"
                                       id="subscriberemail" class="form-control required email"
                                       placeholder="Enter your Email">
                                <span class="input-group-btn">
                    <a id="widget-subscribe-submit-button" class="btn btn-primary">Subscribe</a>
                  </span>
                            </div>
                        </form>
                    </div>

                </div> <!-- end col-md-3 -->

                <div class="col-md-4 col-sm-6">
                    <div class="widget footer-widget recent-widget">
                        <h4>Recent Posts</h4>
                        <ul>
                            <li>
                                <h5><a href="single-post.html">Aenean sed justo tincidunt, vulputate nisi</a></h5>
                                <span>12 April 2016</span>
                            </li>
                            <li>
                                <h5><a href="single-post.html">Aenean sed justo tincidunt, vulputate nisi</a></h5>
                                <span>12 April 2016</span>
                            </li>
                            <li>
                                <h5><a href="single-post.html">Aenean sed justo tincidunt, vulputate nisi</a></h5>
                                <span>12 April 2016</span>
                            </li>
                        </ul>
                    </div> <!-- end recent-widget -->
                </div> <!-- end col-md-3 -->

                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6">

                    <div class="widget footer-widget widget-contact-info">
                        <h4>Contact us</h4>
                        <ul class="widget-contact-list">
                            <li><i class="fa fa-map-marker"></i>
                                <strong>Address:</strong> 795 Folsom Ave, Suite 600
                                <br>San Francisco, CA 94107
                            </li>
                            <li><i class="fa fa-phone"></i><strong>Phone:</strong> (123) 456-7890</li>
                            <li><i class="fa fa-envelope"></i><strong>Email:</strong> <a
                                        href="mailto:first.last@example.com">first.last@example.com</a>
                            </li>
                            <li><i class="fa fa-clock-o"></i>Monday - Friday: <strong>08:00 - 22:00</strong>
                                <br>Saturday, Sunday: <strong>Closed</strong>
                            </li>
                        </ul>
                    </div> <!-- end widget-contact-info -->

                    <div class="widget footer-widget follow-widget">
                        <h4>Follow us</h4>
                        <ul class="social-list">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- end col-md-3 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div>

    <div class="footer-line">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Ement @2016 by <span>Clas-design</span>. All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer-menu text-right">
                        <li><a href="#.html">Home</a></li>
                        <li><a href="#.html">About</a></li>
                        <li><a href="#.html">Services</a></li>
                        <li><a href="#.html">Portfolio</a></li>
                        <li><a href="#.html">Blog</a></li>
                        <li><a href="#.html">Contact</a></li>
                    </ul>
                </div>  <!-- end col-md-6   -->
            </div> <!-- end row      -->
        </div> <!-- end container -->
    </div> <!-- end footer-line -->

</footer>
<!-- End footer -->

<!-- Back-to-top
================================================== -->
<div class="back-to-top">
    <i class="fa fa-angle-up fa-3x"></i>
</div> <!-- end back-to-top -->

<script>
    $(document).ready(function () {
        app.init({
            socketUrl: '<?= Yii::$app->params["socket"]["host"] . ':' . Yii::$app->params["socket"]["port"] ?>',
            user: '<?= Yii::$app->user->id ?>'
        });
    })
</script>