<?php $this->assign('title', __('Reset Password')); ?>
    <div class="full-page login-page" data-color=""
         data-image="<?= $this->Url->image('489112.jpg'); ?>">
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <?= $this->Form->create(); ?>
                        <div class="card" data-background="color" data-color="blue">
                            <div class="card-header">
                                <h3 class="card-title"><?= __('Reset Password'); ?></h3>
                            </div>
                            <div class="card-content">
                                <div class="form-group">
                                    <?= $this->Form->control('password', ['class' => 'form-control input-no-border']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->control('confirm_password', ['class' => 'form-control input-no-border']) ?>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <?= $this->Form->submit(__('Save'), ['class' => 'btn btn - fill btn - wd']) ?>
                            </div>
                        </div>
                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>


    </div>


<?php $this->Html->script('login', ['block' => true]); ?>