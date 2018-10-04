<?php $this->assign('title', __('Dashboard')); ?>
<h1 class="page-title"><?= __('Partial Reports'); ?></h1>

<div class="row">
    <div class="col-xs-12 col-sm-3">
        <div class="card">
            <div class="card-content">
                <?= $this->Widget->graphFromQuery(__('Median Glycemia Level'), 123) ?>
            </div>
        </div>
    </div>
</div>