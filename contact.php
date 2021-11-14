<?php
get_header();


$contact_name = get_field('contact_name');
$contact_email = get_field('contact_email');
$contact_number = get_field('contact_number');

?>

    <section class="blue-bg" id="contact">
        <div class="container">
            <div class="d-flex flex-row-reverse justify-content-center p-4">
                <div class="row d-flex flex-row-reverse">
                    <div class="col-lg-6">
                        <h5 class="card-title"><?php echo $contact_name; ?></h5>
                    </div>
                    <p class="card-text">Contact me:>
                        <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
                        <br> Send me a call!: <?php echo $contact_number; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>





<?php
get_footer();
