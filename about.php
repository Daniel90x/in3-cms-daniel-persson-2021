
<?php
get_header();
$about_title = get_field('about_title');
$about_desc = get_field('about_description');
$aboutImageArray = get_field('about_image');
$aboutImage = $aboutImageArray['sizes']['large'];
?>


<section class="red-bg" id="about">
    <div class="container">
        <div class="d-flex flex-row-reverse justify-content-center p-4">
            <div class="row d-flex flex-row-reverse">
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?php echo $aboutImage; ?>">
                </div>
                <div class="col-lg-6 text-light d-flex flex-column justify-content-center align-items-center">
                    <h1 class="display-1"><?php echo $about_title; ?></h1>
                    <?php echo $about_desc; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();