<?php if (!empty($node->field_intro['und'][0]['value'])): ?>
    <?php $subHeaderTxt = $node->field_intro['und'][0]['value']; ?>  
<?php endif; ?>

<?php
    include 'partials/header.php';
?>

    <section class="past-talks">
        <div class="container white-bkg">
            <div>
                <div class="top-video hidden-xs">
                    <div class="thumbplayer-container" data-id="" data-alttext="">
                        <div class="thumbplayer videoWrapper embed-responsive embed-responsive-16by9"></div>
                    </div>

                    <div class="col-md-12 video-title">

                    </div>

                    <div class="row moderator-panelists">
                        <div class="col-sm-3 moderator">

                        </div>
                        <div class="col-sm-9 panelists">

                        </div>

                    </div>

                </div>

                <div class="video-view">
                    <?php
                    $blockObject = block_load('views', 'past_talks-block');
                    $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
                    $output = drupal_render($block);
                    print $output;
                    ?>
                </div>
            </div>
        </div>

    </section>

    <?php
    include 'partials/email-sign-up.php';
    ?>

</div>
<?php
include 'partials/fixed-register-bar.php';
include 'partials/footer.php';
       