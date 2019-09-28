
<?php

$instructor_section_title               = get_field('instructor_section_title');
$instructor_section_name                = get_field('instructor_name');
$instructor_section_bio_excerpt         = get_field('bio_excerpt');
$instructor_section_full_bio            = get_field('full_bio');
$instructor_section_twitter_username    = get_field('twitter_username');
$instructor_section_facebook_username   = get_field('facebook_username');
$instructor_section_instagram_username  = get_field('instagram_username');
$instructor_section_number_of_students  = get_field('number_of_students');
$instructor_section_number_of_reviews   = get_field('number_of_reviews');
$instructor_section_number_of_courses   = get_field('number_of_courses');

?>

<!-- INSTRUCTOR -->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">

                <div class="row">
                    <div class="col-lg-8">
                        <h2><?php echo $instructor_section_title ?> <small><?php echo $instructor_section_name ?></small></h2>
                    </div>
                    <div class="col-lg-4">

                        <?php if( !empty($instructor_section_twitter_username) ): ?>
                            <a href="<?php echo $instructor_section_twitter_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>

                        <?php if( !empty($instructor_section_facebook_username) ): ?>
                            <a href="<?php echo $instructor_section_facebook_username; ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>

                        <?php if( !empty($instructor_section_instagram_username) ): ?>
                            <a href="<?php echo $instructor_section_instagram_username; ?>" target="_blank" class="badge social instagram"><i class="fa fa-instagram"></i></a>
                        <?php endif; ?>
                        
                    </div>
                </div>

                <p class="lead"><?php echo $instructor_section_bio_excerpt ?></p>
                <?php echo $instructor_section_full_bio ?>
            
                <hr/>

                <h3>The Numbers <small>They Don't Lie</small></h3>

                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $instructor_section_number_of_students ?> <span>students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $instructor_section_number_of_reviews ?> <span>reviews</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $instructor_section_number_of_courses ?> <span>courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>