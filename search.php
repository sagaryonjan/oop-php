<?php
if(!isset($_GET['search'])) {
    header('location:index.php');
}

include 'admin/class/Category.php';
include 'admin/class/Post.php';



$search_post = (new Post())->getFilterdPost($_GET['search']);



$title = 'Blogger a Blogging Category Flat Bootstrap Responsive Website Template | Home';


$categories = (new Category())->categoryList();

$posts = [];
$cat = [];
foreach ($categories as $category){
    $posts[$category['id']] = (new Post())->getPostAsCategory($category['id']);
    $cat[$category['id']] = $category;
}








include 'includes/head.php'; ?>

<body>
<!-- header-section-starts -->
<?php include 'includes/top_menu.php'; ?>

<div class="full">

    <?php include 'includes/side_menu.php'; ?>


    <div class="col-md-9 main">


        <!--banner-section-->
        <div class="banner-section">
            <h3 class="tittle"> Search for this {<?php  echo  $_GET['search']; ?>}<i class="glyphicon glyphicon-search"></i></h3>

            <!--/top-news-->
            <div class="top-news">
                <div class="top-inner">
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
                <div class="top-inner second">
                    <div class="col-md-6 top-text">
                        <a href="single.html"><img src="images/pic3.jpg" class="img-responsive" alt=""></a>
                        <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                        <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
                    </div>
                    <div class="col-md-6 top-text two">
                        <a href="single.html"><img src="images/pic4.jpg" class="img-responsive" alt=""></a>
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
        <?php include 'includes/home/banner_right.php'; ?>

        <div class="clearfix"> </div>
        <!--/footer-->

        <?php include 'includes/footer.php'; ?>
    </div>
    <div class="clearfix"> </div>
</div>

<?php include 'includes/script.php'?>

</body>
</html>