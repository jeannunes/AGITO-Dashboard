<?php $this->assign('title', __('Queries')); ?>
<div class="card">
    <div class="card-content">
        <table class="table">
            <thead>
            <tr>
                <th><?= __('Title') ?></th>
                <th><?= __('Creation Date') ?></th>
                <th style="width: 230px"><?= __('Actions'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($queries as $query): ?>
                <tr>
                    <td>
                        <?= $this->Html->link($query->title, ['action' => 'run', $query->slug]); ?>
                    </td>
                    <td>
                        <small><?= $query->creation_date; ?></small>
                    </td>
                    <td>
                        <div class="btn-group btn-group-justified">
                            <?= $this->Html->link(__('Run'), ['action' => 'execute', $query->slug], ['class' => 'btn btn-sm btn-success btn-fill']); ?>
                            <?php if (!$query->padlock || $this->Profile->is('admin')): ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $query->slug], ['class' => 'btn btn-sm btn-info btn-fill']); ?>
                                <?= $this->Html->link(__('Remove'), ['action' => 'remove', $query->slug], ['class' => 'btn btn-sm btn-danger btn-fill']); ?>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>