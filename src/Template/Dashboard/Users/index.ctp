<?php $this->assign('title', __('Users')); ?>
<div class="card">
    <div class="card-content">
        <table class="table">
            <thead>
            <tr>
                <th><?= __('Name') ?></th>
                <th><?= __('Username'); ?></th>
                <th><?= __('Last Login') ?></th>
                <th style="width: 200px;"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Html->link($user->full_name, ['action' => 'view', $user->username]) ?></td>
                    <td><?= $user->username ?></td>
                    <td><?= $user->last_login ?></td>
                    <td>
                        <div class="btn-group btn-group-justified">
                            <?= $this->Html->link(__('Reset Password'), ['action' => 'resetPassword', $user->id], ['class' => 'btn btn-warning btn-sm btn-fill']); ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>