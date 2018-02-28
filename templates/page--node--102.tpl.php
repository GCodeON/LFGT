<?php if (!empty($node->field_intro['und'][0]['value'])): ?>
    <?php $subHeaderTxt = $node->field_intro['und'][0]['value']; ?>  
<?php endif; ?>
<?php
    include 'partials/header.php';
?>
    <div class="location">
        <div class="white-bkg black-text">
            <div class="container">
                <div class="indent-container">
                    <div class="row venue-info">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <h2>Change Agents Celebration Dinner</h2>

                            <p>
                                Monday, February 12 / 7:00pm<br/>
                                Sheraton Hotel Ballroom
                            </p>
                            

                            <p>All Agents of Change Summit attendees are invited to a celebration dinner. Enjoy entertainment, a hosted meal, mingling with fellow attendees and a celebration of successful behavior change programs and campaigns. This event was praised as one of the most fun and engaging parts of Agents of Change Summit 2016! Please join us.</p>

                            <p>The $64 fee covers part of the dinner and entertainment for guests. There may only be limited on-site registration availability so sign up now to guarantee your space.</p>

                        </div>

                        <div class="col-lg-7 col-md-6 col-sm-12"><img alt="AOC Dinner" src="/sites/all/themes/agents_of_change/images/aoc_dinner.JPG"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div> <!-- closing main-container -->
<?php
include 'partials/fixed-register-bar.php';
include 'partials/footer.php';

