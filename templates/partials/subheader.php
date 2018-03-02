<div class="main-container ">

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