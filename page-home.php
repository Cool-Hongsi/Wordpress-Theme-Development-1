<?php
/*
    Template Name: Home Page
 */

get_header();
?>

    <?php get_template_part('content', 'hero'); ?>

    <?php get_template_part('content', 'optin'); ?>

    <?php get_template_part('content', 'boost'); ?>

    <?php get_template_part('content', 'benefit'); ?>

    <?php get_template_part('content', 'course'); ?>

    <?php get_template_part('content', 'project'); ?>

    <?php get_template_part('content', 'video'); ?>

    <?php get_template_part('content', 'instructor'); ?>

    <?php get_template_part('content', 'testimonial'); ?>

<?php get_footer(); ?>