<div class="main-container ">
    <section class="logo-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
                            <div class="navbar-header">
                                <div class="col-sm-12 col-md-4">
                                    <?php if ($logo): ?>
                                        <a class="logo navbar-btn" href="<?php print $front_page; ?>" title="<?php print t('Agents of Change Summit Home'); ?>">
                                            <img src="<?php print $logo; ?>" alt="<?php print t('Agents of Change Summit Home'); ?>"/>
                                        </a>
                                    <?php endif; ?>
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="col-sm-12 col-md-8 nav-col">
                                    <p class="danger-bkg">The Science and Technology of Behavior Change</p>
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

    <?php print render($title_suffix); ?>
    <section class="sub-page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 page-title">
                    <h1><?php print render($title); ?></h1>
                </div>
                <div class="col-sm-6 header-text-container">
                <?php if (isset($subHeaderTxt) && trim($subHeaderTxt) !== ''): ?>
                    <?php echo $subHeaderTxt; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>