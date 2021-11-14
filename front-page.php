<?php

get_header();

$title = get_field('home_title');
$description = get_field('home_description');
$link = get_field('home_link');
$homeImageArray = get_field('home_image');
$homeImage = $homeImageArray['sizes']['large'];


?>

  <section class="green-bg" id="home">
    <div class="container">
      <div class="d-flex flex-row-reverse justify-content-center p-4">
        <div class="row d-flex flex-row-reverse">
          <div class="col-lg-6">
            <img class="img-fluid" src="<?php echo $homeImage; ?>">
          </div>
          <div class="col-lg-6 text-light d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-1"><?php echo $title; ?></h1>
           <?php echo $description; ?>
           <button type="button" class="btn btn-outline-light">
           <a style="text-decoration: none; color: white"href="<?php echo $link['url']; ?>">
            <?php echo $link['title']; ?>
            </a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>




<?php
get_footer();