<?php

$course_featrue_image   = get_field('course_featrue_image');
$course_section_title   = get_field('course_section_title');
$course_section_body    = get_field('course_section_body');

?>

<!-- WHO BENEFITS -->
<section id="who-benefits">
    <div class="container">
        
        <div class="section-header">

            <!-- If user uploaded an image -->
            <?php
                if( !empty($course_featrue_image) ) : ?>
                <img src="<?php echo $course_featrue_image['url']; ?>" alt="<?php echo $course_featrue_image['alt']; ?>">
            <?php endif; ?>

            <h2><?php echo $course_section_title; ?></h2>
        </div>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <?php echo $course_section_body; ?>
            </div>
        </div>

    </div>
</section>
