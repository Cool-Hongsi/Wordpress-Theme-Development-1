<?php

$feature_section_image  = get_field('features_section_image');
$feature_section_title  = get_field('features_section_title');
$feature_section_body   = get_field('features_section_body');

$features_section_background    = get_field('features_section_background');

?>

<?php
    if( !empty($features_section_background) ) { ?>
    <section id="course-features" style="background:url('<?php echo $features_section_background['url']; ?>') no-repeat; background-size: cover; ')">
    <?php } else { ?>
        <section id="course-features">
    <?php } ?>


<!-- <section id="course-features"> -->
    <div class="container">

        <div class="section-header">

            <!-- If user uploaded an image -->
            <?php
                if( !empty($feature_section_image) ) : ?>
                <img src="<?php echo $feature_section_image['url']; ?>" alt="<?php echo $featrue_section_image['alt']; ?>">
            <?php endif; ?>

            <h2><?php echo $feature_section_title; ?></h2>

            <!-- If user added body text -->
            <?php
                if( !empty($feature_section_body) ) : ?>
                <p class="lead"><?php echo $feature_section_body; ?></p>
            <?php endif; ?>

        </div>

        <div class="row">

            <?php $loop = new WP_Query( array( 'post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="col-sm-2">
                    <i class="<?php the_field('course_feature_icon'); ?>"></i>
                    <h4><?php the_title(); ?></h4>
                </div>

            <?php endwhile; wp_reset_query(); ?>

        </div>

    </div>
</section>