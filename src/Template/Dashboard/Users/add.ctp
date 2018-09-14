<?php $this->assign('title', __('New User')); ?>
<?= $this->Form->create($user); ?>
    <div class="card">
        <div class="card-content">
            <div class="row">
                <div class="col-sm-6">
                    <?= $this->Form->control('name', ['class' => 'form-control']); ?>
                </div>
                <div class="col-sm-6">
                    <?= $this->Form->control('email', ['class' => 'form-control']); ?>
                </div>
                <div class="col-sm-6">
                    <?= $this->Form->control('username', ['class' => 'form-control']); ?>
                </div>
                <div class="col-sm-6">
                    <?= $this->Form->control('birth_date', ['class' => 'form-control']); ?>
                </div>
                <div class="col-sm-6">
                    <label><?= __('Gênero'); ?></label>
                    <?= $this->Form->radio('gender_identity', ['m' => __('Male'), 'f' => __('Female')]); ?>
                </div>
            </div>
            <div class="card-footer">
                <?= $this->Form->submit(__('Save'), ['class' => 'btn btn-primary']); ?>
            </div>
        </div>
    </div>
<?= $this->Form->end(); ?>

<?php $this->Html->script('user.add.js', ['block' => true]); ?>