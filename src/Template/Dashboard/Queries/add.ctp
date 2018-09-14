<?php $this->assign('title', __('Add Query')); ?>
<?= $this->Form->create($query); ?>
    <div class="card">
        <div class="card-content">
            <div class="row">
                <div class="col-sm-12 col-md-3 form-group">
                    <?= $this->Form->control('slug', ['class' => 'form-control']); ?>
                </div>
                <div class="col-sm-12 col-md-9 form-group">
                    <?= $this->Form->control('title', ['class' => 'form-control']); ?>
                </div>
                <div class="col-sm-12 form-group">
                    <?= $this->Form->control('description', ['class' => 'form-control']); ?>
                </div>
                <div class="col-sm-12 form-group">
                    <?= $this->Form->textarea('query', ['class' => 'form-control']); ?>
                </div>
                <div class="col-sm-12 form-group">
                    <?= $this->Form->submit(__('Save'), ['class' => 'btn btn-primary btn-fill']); ?>
                </div>
            </div>
        </div>
    </div>
<?= $this->Form->end(); ?>