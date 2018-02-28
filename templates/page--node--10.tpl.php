<?php if (!empty($node->field_intro['und'][0]['value'])): ?>
    <?php $subHeaderTxt = $node->field_intro['und'][0]['value']; ?>  
<?php endif; ?>

<?php
    include 'partials/header.php';
?>

         <div class="full-box container">
                    <div class="col-sm-12">
                        <div>
                            <div class="row">
                                <div class="col-sm-12 home-text">
                                    <?php if (!empty($node)): ?>
                                        <?php print $node->body['und'][0]['value']; ?>  
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div> 
<?php
include 'partials/fixed-register-bar.php';
include 'partials/footer.php';