<?php
/*
 *
 * - need to include header partial for this and other templates
- add header and footer here
- remove content from WYSIWYG
- add in views
- code the tempalte for the two views (node--people--teaser.tpl.php

*/
?>

<?php
$subHeaderTxt = '';
include 'partials/header.php';
?>
    <?php if (!empty($node)): ?>
        <?php print $node->body['und'][0]['value']; ?>  
    <?php endif; ?>
<?php
include 'partials/fixed-register-bar.php';
include 'partials/footer.php';

