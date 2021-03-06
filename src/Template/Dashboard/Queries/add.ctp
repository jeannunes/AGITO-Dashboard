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
                <label for="query"><?= __('Query'); ?></label>
                <?= $this->Form->textarea('query', ['class' => 'form-control']); ?>
            </div>
            <div class="col-sm-12 form-group">
                <?= $this->Form->submit(__('Save'), ['class' => 'btn btn-primary btn-fill']); ?>
            </div>
        </div>
    </div>
</div>
<?= $this->Form->end(); ?>

<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.40.2/codemirror.min.js'); ?>
<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.40.2/mode/sql/sql.min.js'); ?>
<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.40.2/addon/hint/sql-hint.min.js'); ?>
<?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.40.2/codemirror.min.css'); ?>
<?= $this->Html->script('query.editor.js'); ?>
