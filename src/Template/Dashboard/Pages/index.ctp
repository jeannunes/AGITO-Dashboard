<?php $this->assign('title', __('Dashboard')); ?>

<h1>Relatórios Parciais</h1>

<div class="row">

    <div class="col-xs-12 col-sm-3">
        <div class="card">
            <div class="card-body">
                <div clas="card-title">Média Geral</div>
                <div class="card-text">
                    <p><?= $med->media; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-3">
        <div class="card">
            <div class="card-body">
                <div clas="card-title">Média dos Últimos Sete Dias</div>
                <div class="card-text">
                    <p><?= $sem->media ? $sem->media : 0; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-3">
        <div class="card">
            <div class="card-body">
                <div clas="card-title">Média do Dia</div>
                <div class="card-text">
                    <p><?= $dia->media ? $dia->media : 0; ?></p>
                </div>
            </div>
        </div>
    </div>

</div>
<h2 class="page-title">Últimas medições de glicemia</h2>
<table class="table">
    <thead>
    <tr>
        <th><?= __('Date') ?></th>
        <th><?= __('User') ?></th>
        <th><?= __('Level') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($gly as $g): ?>
        <tr>
            <td><?= $g->date ?></td>
            <td><?= $g->user_id ?></td>
            <td><?= $g->level ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<h2 class="page-title">Últimos registros de humor</h2>
<table class="table">
    <thead>
    <tr>
        <th><?= __('Date') ?></th>
        <th><?= __('User') ?></th>
        <th><?= __('Mood') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($moods as $m): ?>
        <tr>
            <td><?= $m->creation_date; ?></td>
            <td><?= $m->user_id ?></td>
            <td><?= $m->mood; ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<h2 class="page-title">Últimos registros de alimentação</h2>
<table class="table">
    <thead>
    <tr>
        <th><?= __('Date') ?></th>
        <th><?= __('User') ?></th>
        <th><?= __('Food') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($foods as $m): ?>
        <tr>
            <td><?= $m->creation_date; ?></td>
            <td><?= $m->user_id ?></td>
            <td><?= $m->food; ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<h2 class="page-title">Por usuário</h2>
<table class="table">
    <thead>
    <tr>
        <th><?= __('User') ?></th>
        <th><?= __('Min') ?></th>
        <th><?= __('Media') ?></th>
        <th><?= __('Max') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($use as $g): ?>
        <tr>
            <td><?= $g->user_id ?></td>
            <td><?= $g->min ?></td>
            <td><?= $g->media ?></td>
            <td><?= $g->max ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>