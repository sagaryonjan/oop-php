<div class="banner-right-text">
    <h3 class="tittle"><?php echo $cat[4]['title']; ?> <i class="glyphicon glyphicon-facetime-video"></i></h3>
    <!--/general-news-->
    <div class="general-news">
        <div class="general-inner">

            <?php
            $i = 0;
            foreach ($posts[4] as $key => $post) { ?>

                <?php if ($key == 0) { ?>
                    <div class="general-text">
                        <a href="single.html"><img src="<?php echo 'public/images/post/'.$post['image']; ?>" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html"><?php echo $post['title']; ?></a></h5>
                        <p><?php echo $post['short_desc']; ?></p>
                        <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0
                            </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56
                            </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                <?php } else { ?>

                    <?php if ($key == 1) { ?>
                    <div class="edit-pics">
                        <?php } ?>

                        <div class="editor-pics">
                            <div class="col-md-3 item-pic">
                                <img src="<?php echo 'public/images/post/'.$post['image']; ?>" class="img-responsive" alt="">

                            </div>
                            <div class="col-md-9 item-details">
                                <h5 class="inner two"><a href="single.html"><?php echo $post['title']; ?></a>
                                </h5>
                                <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Feb 22, 2015 <a
                                            href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    <?php

                    $total =  count($posts[4]) - 1;

                    if ($i == $total) {
                      echo "</div>";
                    }
                    ?>


                <?php }   $i++; ?>
            <?php } ?>


            <!--- media-->
            <div class="media">
                <h3 class="tittle media"><?php echo $cat[5]['title']; ?> <i class="glyphicon glyphicon-floppy-disk"></i></h3>


                <?php   foreach ($posts[5] as $key => $post) {  ?>
                <div class="general-text two">
                    <a href="single.html">
                        <img src="<?php echo 'public/images/post/'.$post['image']; ?>" class="img-responsive" alt="">
                    </a>
                    <h5 class="top"><a href="single.html"><?php echo $post['title']; ?></a></h5>
                    <p><?php echo $post['short_desc']; ?></p>
                    <p>On Jun 27
                        <a class="span_link" href="#">
                            <span class="glyphicon glyphicon-comment"></span>0 </a><a
                                class="span_link" href="#">
                            <span class="glyphicon glyphicon-eye-open"></span>56 </a>
                        <a
                                class="span_link" href="single.html"><span
                                    class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                </div>


                <?php } ?>

            </div>



        </div>
    </div>
    <!--//general-news-->
    <!--/news-->
    <!--/news-->
</div>