<?php

$title = 'Blogger a Blogging Category Flat Bootstrap Responsive Website Template | Home';

include 'includes/head.php'; ?>

<body>
<!-- header-section-starts -->
<?php include 'includes/top_menu.php'; ?>

<div class="full">

    <?php include 'includes/side_menu.php'; ?>


    <div class="col-md-9 main">

        <div class="banner-section">
            <h3 class="tittle">General <i class="glyphicon glyphicon-picture"></i></h3>
            <div class="banner">
                <div  class="callbacks_container">
                    <ul class="rslides" id="slider4">
                        <li>
                            <img src="images/1.jpg" class="img-responsive" alt="" />

                        </li>
                        <li>
                            <img src="images/2.jpg" class="img-responsive" alt="" />


                        </li>
                        <li>
                            <img src="images/3.jpg" class="img-responsive" alt="" />


                        </li>
                        <li>
                            <img src="images/3.jpg" class="img-responsive" alt="" />


                        </li>
                    </ul>
                </div>
                <!--banner-->
                <script src="js/responsiveslides.min.js"></script>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
                        $("#slider4").responsiveSlides({
                            auto: true,
                            pager:true,
                            nav:true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });

                    });
                </script>
                <div class="clearfix"> </div>
                <div class="b-bottom">
                    <h5 class="top"><a href="single.html">What turn out consetetur sadipscing elit</a></h5>
                    <p>On Aug 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                </div>
            </div>
            <!--//banner-->
            <!--/top-news-->
            <div class="top-news">
                <div class="about-content">
                    <!-- about -->
                    <h3 class="tittle">About <i class="glyphicon glyphicon-user"></i></h3>
                    <img src="images/ab.jpg" alt=" " />
                    <p>Having hands on experience in creating innovative designs, I do offer design
                        solutions which harness the new possibilities of web based communication.
                        <label>I do specialize in all aspects of website designing,Nam libero tempore,aspects of website designing cum soluta nobis est eligendi  theme development,
                            possimus omnis dolor repellendus.Nam libero tempore, cum soluta nobis est eligendi  voluptatum...</label></p>
                    <div class="clearfix"></div>
                    <p class="nam">Nam libero tempore, cum soluta nobis est eligendi
                        optio cumque nihil impedit quo minus id quod maxime placeat facere
                        possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                        saepe eveniet ut et voluptates repudiandae sint Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna  et molestiae non recusandae.</p>
                    <div class="more">
                        <a href="single.html">Read More</a>
                    </div>
                </div>
                <div class="top-inner second">
                    <div class="col-md-6 top-text">
                        <a href="single.html"><img src="images/pic1.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="col-md-6 top-text two">
                        <a href="single.html"><img src="images/pic2.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--//top-news-->
        </div>
        <!--//banner-section-->
        <div class="banner-right-text">
            <h3 class="tittle">News  <i class="glyphicon glyphicon-facetime-video"></i></h3>
            <!--/general-news-->
            <div class="general-news">
                <div class="general-inner">
                    <div class="general-text">
                        <a href="single.html"><img src="images/gen4.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="edit-pics">
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="images/f4.jpg" class="img-responsive" alt="">

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                                <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="images/f1.jpg" class="img-responsive" alt="">

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                                <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="images/f1.jpg" class="img-responsive" alt="">

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                                <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="images/f4.jpg" class="img-responsive" alt="">

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="single.html">New iPad App to simulate your Guitar</a></h5>
                                <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="media">
                        <h3 class="tittle media">Media <i class="glyphicon glyphicon-floppy-disk"></i></h3>
                        <div class="general-text two">
                            <a href="single.html"><img src="images/gen3.jpg" class="img-responsive" alt=""></a>
                            <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                            <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                        </div>
                    </div>
                    <div class="general-text two">
                        <a href="single.html"><img src="images/gen5.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                </div>
            </div>
            <!--//general-news-->
            <!--/news-->
            <!--/news-->
        </div>

        <div class="clearfix"> </div>
        <!--/footer-->

        <?php include 'includes/footer.php'; ?>
    </div>
    <div class="clearfix"> </div>
</div>

<?php include 'includes/script.php'?>

</body>
</html>