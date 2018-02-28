<?php /* region--navigation.tpl.php */ ?>
<div class="save-the-date">
    <div class="main-container ">

        <section<?php /*print $content_column_class; */ ?>>
            <section class="logo-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
                                    <div class="navbar-header">
                                        <div class="col-sm-12 col-md-4">
                                            <?php if ($logo): ?>
                                                <a class="logo navbar-btn" href="<?php print $front_page; ?>"
                                                   title="<?php print t('Agents of Change Summit Home'); ?>">
                                                    <img src="<?php print $logo; ?>"
                                                         alt="<?php print t('Agents of Change Summit Home'); ?>"/>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-12 col-md-8">
                                            <p class="danger-bkg">The Science and Technology of Behavior Change</p>

                                        </div>
                                    </div>

                                </header>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class="sub-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 title-div">
                        <p class="title"><?php print render($title); ?></p>
                        <p class="date">February 12 & 13, 2018 <span class="teal">/</span><br class="mobile-only"> San Diego, CA</p>
                        <p class="sub-title">Sheraton San Diego Hotel & Marina <span>|</span> Marina Tower </p>

                        <div class="videoWrapper">
                            <iframe src="https://www.youtube.com/embed/YvS9UQ_E6sg" frameborder="0"
                                    allowfullscreen="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-body">
            <div class="container">
                <div class="row white-bkg">
                    <div class="col-md-6 col-md-offset-3 white-bkg">
                        <p>In 2016, the <span>Agents of Change Summit</span> united public health, technology and behavior change
                            professionals at a conference experience like no other. Over 300 participants heard experts
                            from Google, Facebook, Tumblr, Rescue, CDC, FDA, Ad Council and dozens of other public health and technology
                            organizations about how to increase their impact. In 2018, the Agents of Change Summit returns to San Diego with new
                            technologies, insights and research to help you change health behaviors in your community.&nbsp;</p>

                        <p><span>#AOCS18</span> will equip professionals with evidence-based strategies proven to cause change and the
                            technological tools to effectively drive health behaviors. Every attendee will participate in an
                            environment of innovation intended to bring change agents together to learn and collaborate towards more
                            effective behavior change practices.</p>

                        <p>Stay tuned for the Agents of Change Summit 2018 speaker lineup, agenda and conference
                            activities when the full website launches in early 2017.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="signup-form">
                            <form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup"
                                  method="POST"
                                  action="https://visitor2.constantcontact.com/api/signup">
                                <h3>Stay Up to Date</h3>
                                <p>Share your email address with us to receive updates for the <br
                                        class="very-small-screen-hide">2018 Agents of Change
                                    Summit.</p>
                                <!-- The following code must be included to ensure your sign-up form works properly. -->


                                <input data-id="ca:input" type="hidden" name="ca"
                                       value="53d54b98-2ecd-4f99-a9db-0f4f7b0620c3">
                                <input data-id="list:input" type="hidden" name="list" value="1991577406">
                                <input data-id="source:input" type="hidden" name="source" value="EFD">
                                <input data-id="required:input" type="hidden" name="required" value="list,email">
                                <input data-id="url:input" type="hidden" name="url" value="">
                                <span id="success_message" style="display:none;">
                        <div class="alert alert-success" role="alert">Thanks for signing up!</div>
                    </span>
                                <div class="input-group">
                                    <input data-id="Email Address:input" type="text" name="email" value=""
                                           maxlength="80" class="form-control input-med"
                                           placeholder="Enter your email address">
                                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" data-enabled="enabled">Get Updates</button>
                      </span>
                                </div>
                                <div><p class="small">By submitting this form, you are granting: Rescue | The Behavior
                                        Change Agency, 2437 Morena
                                        Blvd, San Diego, California, 92110, United States, <a
                                            href="http://www.rescueagency.com" target="_blank">http://www.rescueagency.com</a>
                                        permission to email you. You may unsubscribe via the link found at the bottom of
                                        every email. (See our <a
                                            href="http://www.constantcontact.com/legal/privacy-statement"
                                            target="_blank">Email Privacy Policy</a>
                                        for details.) Emails are serviced by Constant Contact.</p></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="page-bottom-bar">
        <div class="row">
            <div class="col-md-12 bar">
                <p>Registration begins <span class="drk-blue">May 15, 2017</span>
                    <br>
                    <span class="red">#</span><i>AOCS18</i>
                </p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <a class="logo navbar-btn" href="<?php print $front_page; ?>"
                               title="<?php print t('Agents of Change Summit Home'); ?>">
                                <img src="<?php print $logo; ?>"
                                     alt="<?php print t('Agents of Change Summit Home'); ?>"/>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-5 col-md-offset-4">
                            <p><a href="https://twitter.com/AOCSummit" target="_blank"><i class="fa fa-twitter"></i></a> <a
                                    href="https://www.youtube.com/playlist?list=PL9nPye7a7WJnQ-pB4_tWIW8Et0Y9Z_46v"
                                    target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="https://www.facebook.com/AOCSummit" target="_blank"><i class="fa fa-facebook"></i></a>
                            </p>
                            <p>&copy; <?php echo date("Y") ?> <span><a href="/privacy-policy">Privacy Policy</a></span>
                                /
                                <span><a href="/terms-of-use">Terms of Use</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script type='text/javascript'>
    var localizedErrMap = {};
    localizedErrMap['required'] = 'This field is required.';
    localizedErrMap['ca'] = 'An unexpected error occurred while attempting to send email.';
    localizedErrMap['email'] = 'Please enter your email address in name@email.com format.';
    localizedErrMap['birthday'] = 'Please enter birthday in MM/DD format.';
    localizedErrMap['anniversary'] = 'Please enter anniversary in MM/DD/YYYY format.';
    localizedErrMap['custom_date'] = 'Please enter this date in MM/DD/YYYY format.';
    localizedErrMap['list'] = 'Please select at least one email list.';
    localizedErrMap['generic'] = 'This field is invalid.';
    localizedErrMap['shared'] = 'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
    localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
    localizedErrMap['state_province'] = 'Select a state/province';
    localizedErrMap['selectcountry'] = 'Select a country';
    var postURL = 'https://visitor2.constantcontact.com/api/signup';
</script>
<script type='text/javascript'
        src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>