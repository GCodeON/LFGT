    <?php
        include 'partials/header.php';
    ?>

    <div class="full-box container">
        <div class="col-sm-12">
            <div class="body-text-container">
                <div class="submit row">
                    <?php if (!drupal_is_front_page()) { ?>
                        <?php print render($page['content']); ?>
                    <?php } ?>
                    <?php if (!empty($node->body)): ?>
                        
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


<?php
include 'partials/fixed-register-bar.php';
include 'partials/footer.php';


       