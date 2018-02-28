<?php if (!empty($node->field_intro['und'][0]['value'])): ?>
    <?php $subHeaderTxt = $node->field_intro['und'][0]['value']; ?>  
<?php endif; ?>
<?php
    include 'partials/header.php';
?>

    <div class="container speakers">
        <div class="row">
            <div class="col-sm-12">
                <div class="committee-tab">
                    <ul role="tablist">
                        <li class="active"><a href="#steering" role="tab" data-toggle="tab">Steering Committee</a></li>
                        <li class="seperator">/</li>
                        <li><a href="#planning" role="tab" data-toggle="tab">Planning Committee</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="steering">
                        <?php
                            $blockObject = block_load('views', 'committees-block');
                            $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
                            $output = drupal_render($block);
                            print $output;
                        ?>
                        </div>

                        <div class="tab-pane" id="planning">
                        <?php
                            $blockObject = block_load('views', 'committees-block_1');
                            $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
                            $output = drupal_render($block);
                            print $output;
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row nominate-committee">
            <p>Interested in joining or nominating someone for the 2018 Steering or Planning Committee? Please email <a href="mailto:Carrie@AgentsOfChangeSummit.org">Carrie@AgentsOfChangeSummit.org</a>.</p>
        </div>
    </div>
</div> <!-- closing main-container -->
<?php
include 'partials/fixed-register-bar.php';
include 'partials/footer.php';
