<?php

$title = 'Blogger a Blogging Category Flat Bootstrap Responsive Website Template | Home';

include 'admin/class/Category.php';
include 'admin/class/Post.php';

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

        <?php include 'includes/home/banner_section.php'; ?>
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