<?php $this->assign('title', __('Register')); ?>
    <div class="register-page">
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-text">
                            <h2><?= __('Dashboard'); ?></h2>
                            <h4><?= __('If you have received an invitation link through e-mail, please, use the same e-mail to register.'); ?></h4>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon icon-danger">
                                    <i class="ti ti-user"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Free Account</h5>
                                Here you can write a feature description for your dashboard, let the users know what is
                                the
                                value that
                                you
                                give them.
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <div class="icon icon-warning">
                                    <i class="ti-bar-chart-alt"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Awesome Performances</h5>
                                Here you can write a feature description for your dashboard, let the users know what is
                                the
                                value that
                                you
                                give them.
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <div class="icon icon-info">
                                    <i class="ti-headphone"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Global Support</h5>
                                Here you can write a feature description for your dashboard, let the users know what is
                                the
                                value that
                                you
                                give them.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->create($monitor); ?>
                        <div class="card card-plain">
                            <div class="content">
                                <div class="form-group">
                                    <input type="email" placeholder="Your First Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Your Last Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Company" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Enter email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password Confirmation" class="form-control">
                                </div>
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-fill btn-danger btn-wd">Create Free Account
                                </button>
                            </div>
                        </div>
                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->Html->script('login', ['block' => true]); ?>