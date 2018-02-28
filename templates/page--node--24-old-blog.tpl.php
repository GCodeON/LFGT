<?php /* region--navigation.tpl.php */ ?>

<div class="main-container ">

    <section<?php /*print $content_column_class; */ ?>>
        <?php if (!empty($page['highlighted'])): ?>
            <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
        <?php if (!empty($breadcrumb)): print $breadcrumb; endif; ?>
        <a id="main-content"></a>
        <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
        <?php endif; ?>
        <?php print $messages; ?>
        <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
        <?php endif; ?>
        <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>

        <?php print render($title_prefix); ?>

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
                                        <span class="hdr-hashtag">#AOCS18</span>

                                        <p class="danger-bkg">The Science and Technology of Behavior Change</p>

                                        <div class="row">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                    data-target=".navbar-collapse">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
                                            <div class="navbar-collapse collapse">
                                                <div>
                                                    <nav role="navigation">
                                                        <?php if (!empty($primary_nav)): ?>
                                                            <?php print render($primary_nav); ?>
                                                        <?php endif; ?>


                                                    </nav>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <?php print render($title_suffix); ?>
    <section class="sub-page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1><?php print render($title); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row white-bkg">
                <div class="col-md-8 col-sm-12 white-bkg">
                    <?php if (!drupal_is_front_page()) { ?>
                        <?php print render($page['blog']); ?>
                    <?php } ?>
                    <?php if (!empty($node->body)): ?>

                    <?php endif; ?>
                    <?php /*print render($page['content']); */ ?>
                </div>
                <div class="col-md-4 col-sm-12 white-bkg">
                    <?php if (!drupal_is_front_page()) { ?>
                        <?php print render($page['blog-popular']); ?>
                    <?php } ?>
                    <?php if (!empty($node->body)): ?>

                    <?php endif; ?>
                    <?php /*print render($page['content']); */ ?>
                </div>
            </div>
        </div>

    </section>

</div>
<div id="fixed">
    <div class="container-fluid">
        <div class="row">
            <div class="success-box">
            </div>
            <section class="white-bkg">
                <div class="success-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="center text-muted">
                                    <a href="/register" class="p btn btn-lg btn-danger">Register opens May 1, 2017</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
                            <img src="<?php print $logo; ?>" alt="<?php print t('Agents of Change Summit Home'); ?>"/>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-5 col-md-offset-4">
                        <p><a href="https://twitter.com/AOCSummit" target="_blank"><i class="fa fa-twitter"></i></a> <a
                                href="https://www.youtube.com/c/aocsummit" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.facebook.com/AOCSummit" target="_blank"><i class="fa fa-facebook"></i></a>
                        </p>

                        <p>&copy; <?php echo date("Y") ?> <span><a href="/privacy-policy">Privacy Policy</a></span> /
                            <span><a href="/terms-of-use">Terms of Use</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 

       