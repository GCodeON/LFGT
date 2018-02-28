<?php if (!empty($node->field_intro['und'][0]['value'])): ?>
    <?php $subHeaderTxt = $node->field_intro['und'][0]['value']; ?>  
<?php endif; ?>

<?php
    include 'partials/header.php';
?>

    <div class="container speakers">
        <div class="row">
            <div class="col-sm-12">

                <?php
                $blockObject = block_load('views', 'speakers-block_1');
                $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
                $output = drupal_render($block);
                print $output;
                ?>

            </div>
        </div>
    </div>

    <!-- Start Modal  -->
    <div class="speakerModal modal fade" id="speakerModal" role="dialog"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal">x</button>
                <div class="modal-header">
                    <div><img  class="modal-image" src="" /></div>
                    <div class="modal-info">
                        <h2 class="modal-title"></h2>
                        <p class="modal-workTitle"></p>
                        <p class="modal-company"><strong></strong></p>
                        <p class="modal-twitterHandle"></p>
                        <p class="modal-keynote"></p>
                    </div>
                </div>
                <div class="modal-body">
                    <p class="modal-bio"></p>
                </div>
            </div>
        </div> 
    </div> 
    <!-- End Modal  -->

</div>
<?php
include 'partials/fixed-register-bar.php';
include 'partials/footer.php';
