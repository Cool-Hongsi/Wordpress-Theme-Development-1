<?php

$optin_text         = get_post_meta(19, 'optin_text', true);
$optin_button_text  = get_post_meta(19, 'optin_button_text', true);

?>

<!-- OPT IN SECTION -->
<section id="optin">
    <div class="container">
        <div class="row">

            <div class="col-sm-8">
                <p class="lead">
                    <?php echo $optin_text; ?>
                </p>
            </div>

            <div class="col-sm-4">
                <button class="btn btn-success btn-lg btn-blick" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
            </div>

        </div>
    </div>
</section>