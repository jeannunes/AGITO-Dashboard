<?php $this->assign('title', __('Dashboard')); ?>

    <h3 class="page-title"><?= __('On the last day'); ?></h3>

    <div class="row">

        <div class="col-xs-12 col-sm-3">
            <?= $this->Widget->indicator(__('Glycemia Measurements'), 'glycemia_last_day', [
                'key' => 'total',
                'icon' => 'hand-point-up'
            ]); ?>
        </div>

        <div class="col-xs-12 col-sm-3">
            <?= $this->Widget->indicator(__('Feeding Measurement'), 'glycemia_last_day', [
                'key' => 'total',
                'icon' => 'apple'
            ]); ?>
        </div>

        <div class="col-xs-12 col-sm-3">
            <?= $this->Widget->indicator(__('Mood Measurements'), 'glycemia_last_day', [
                'key' => 'total',
                'icon' => 'face-smile'
            ]); ?>
        </div>

        <div class="col-xs-12 col-sm-3">
            <?= $this->Widget->indicator(__('User Interactions'), 'glycemia_last_day', [
                'key' => 'total',
                'icon' => 'user'
            ]); ?>
        </div>

    </div>

    <h3 class="page-title"><?= __('Usage'); ?></h3>

    <div class="row">

        <div class="col-xs-12 col-sm-4">
            <?= $this->Widget->graphFromQuery(__('Low Glycemia Levels'), 'glicemia_baixa_mensal', [
                'label' => 'date',
                'x_label' => __('Date'),
                'value' => 'total',
                'y_label' => __('Count'),
                'type' => 'line'
            ]) ?>
        </div>

        <div class="col-xs-12 col-sm-4">
            <?= $this->Widget->graphFromQuery(__('Normal Levels'), 'glicemia_alta_mensal', [
                'label' => 'date',
                'x_label' => __('Date'),
                'value' => 'total',
                'y_label' => __('Count'),
                'type' => 'line'
            ]) ?>
        </div>

        <div class="col-xs-12 col-sm-4">
            <?= $this->Widget->graphFromQuery(__('High Glycemia Levels'), 'glicemia_alta_mensal', [
                'label' => 'date',
                'x_label' => __('Date'),
                'value' => 'total',
                'y_label' => __('Count'),
                'type' => 'line'
            ]) ?>
        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <?= $this->Widget->graphFromQuery(__('Glycemia Leveling Through Time'), 'glicemia_result_month', [
                'label' => ['date'],
                'x_label' => __('Date'),
                'value' => ['low', 'normal', 'high'],
                'y_label' => [__('Low'), __('Normal'), __('High')],
                'color' => ['rgba(0,255,255, 0.5)', 'rgba(255,0,255,0.5)', 'rgba(255,255,0,0.5)'],
                'type' => 'line'
            ]) ?>
        </div>
    </div>

<?php $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js', ['block' => true]); ?>
<?php $this->Html->script('widgets.js', ['block' => true]); ?>