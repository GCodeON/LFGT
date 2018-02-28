<?php /* region--navigation.tpl.php */ ?>

<?php
$subHeaderTxt = "";
include 'partials/header.php';
?>

    <div class="full-box container">
        <div class="col-sm-12">
            <div class="row">
                <div class="home-text rtecenter">
                        <?php if (!drupal_is_front_page()) { ?>
                            <?php print render($page['content']); ?>
                        <?php } ?>
                        <?php /*print render($page['content']); */?>
                </div>
            </div>
        </div>
    </div>  


<?php
include 'partials/fixed-register-bar.php';
include 'partials/footer.php';


