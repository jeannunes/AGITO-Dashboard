<section class="features" id="features">
    <div class="container">
        <div class="section-heading text-center">
            <h2><?= __('Limited Features, Unlimited Possibilities'); ?></h2>
            <p class="text-muted"><?= __('For now we\'re testing a few features but there\'s more to come. Check out what you can do with AGITO:'); ?></p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-4 my-auto">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="device">
                            <div class="screen">
                                <?= $this->Html->image('agito_app_2.png', ['class' => 'img-fluid']); ?>
                            </div>
                            <div class="button">
                                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 my-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-user text-primary"></i>
                                <h3><?= __('Customize'); ?></h3>
                                <p class="text-muted">
                                    <?= __('Make it your own way by changing hair styles and clothing.'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-bell text-primary"></i>
                                <h3><?= __('Get notified'); ?></h3>
                                <p class="text-muted"><?= __('We can remind you of testing your glycemia levels after your meals'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-info text-primary"></i>
                                <h3><?= __('Personal Tips'); ?></h3>
                                <p class="text-muted"><?= __('Through the gathering of information like your mood and what you had for your meals we can offer you custom tips to help you balance your glycemia levels.'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-chart text-primary"></i>
                                <h3><?= __('Data Analysis'); ?></h3>
                                <p class="text-muted"><?= __('With your information we can give you monthly reports about your health.'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>