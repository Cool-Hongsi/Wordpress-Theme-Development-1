<?php

$course_introduction_title  = get_field('course_introduction_title');
$course_introduction_video  = get_field('course_introduction_video');

?>

<!-- VIDEO FEATURES -->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $course_introduction_title ?></h2>
                <!-- Embeded sharing -->
                <iframe width="100%" height="415" src="<?php echo $course_introduction_video ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>