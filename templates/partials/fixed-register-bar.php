<?php
    if (strpos($_SERVER['REQUEST_URI'], "register") !== false){

    }
?>

<div id="fixed" class="fixed-registration-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 fixed-content">
                <div class="center text-muted">
                    <!-- <?php if (strpos($_SERVER['REQUEST_URI'], "register") !== false): ?>
                        <a href="http://aocsummit.cvent.com/events/agents-of-change-summit-2018/event-summary-8f6244382e194002912b2437a0bfa208.aspx"
                           target="_blank" class="p btn btn-lg btn-danger" onClick="registerStartClick()">Start Registration</a>
                    <?php else: ?>
                        <a href="/register" class="p btn btn-lg btn-danger" onClick="registerNowClick()">Register now</a>
                    <?php endif; ?> -->
                    <a href="/stay-connected" class="p btn btn-lg btn-danger" onClick="stayConnected()">Stay Connected</a>
                    <div class="hashtag"><span class="text-red">#</span>AOCS18</div>
                </div>
            </div>
        </div>
    </div>
</div>