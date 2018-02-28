<?php if (!empty($node->field_intro['und'][0]['value'])): ?>
    <?php $subHeaderTxt = $node->field_intro['und'][0]['value']; ?>  
<?php endif; ?>
<?php
    include 'partials/header.php';
?>
                <div class="full-box container">
                    <div class="col-sm-12">
                        <div class="body-text-container">
                            <div class="row">
                                <div class="col-sm-12 home-text">
                                    <?php if (!empty($node)): ?>
                                        <?php print $node->body['und'][0]['value']; ?>  
                                    <?php endif; ?>
                                    <!-- <div class="text-center text-muted">
                                        <a href="./content/abstracts" class="p btn btn-lg btn-danger submission-ended">Submit an Abstract</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-30">
                        <div class="col-sm-12">
                            <p class="download text-right"><a href="/sites/all/themes/agents_of_change/downloads/AOCS_Submission_Guidelines_FAQ.pdf" target="_blank"><i class="fa fa-cloud-download"></i> Download Submission Guidelines</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="scrollbox">
                                <?php if (!empty($node)): ?>
                                    <?php print $node->field_info['und'][0]['value']; ?>  
                                <?php endif; ?>
                            </div> <!-- scrollbox ends here -->
                        </div>
                    </div>
                 </div> 
<?php
include 'partials/fixed-register-bar.php';
include 'partials/footer.php';

       